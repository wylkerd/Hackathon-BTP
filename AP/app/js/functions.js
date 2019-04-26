$(function(){
    var url = "sealed/data.php";
    var action = "add";
    var id = 0;

    $('.debug').hide();
    $('form').submit(function(){
        return false;
    });

    $('.report-rows').on("click", "tr", function(){
        action = "edit";
        id = $(this).attr("id");
        load();
        toggleButons();
    });

    $('#btnConfirm').on("click", function(){
        if(action == "add"){
            addFunction();
        }
    });

    function addFunction(){
        var sender = $('#form-function').serialize() + '&action=addFunction';
        $.ajax({
            type: "POST",
            url: url,
            data: sender,
            success: function(response){
                var data = $.parseJSON(response);
                if(!data.success){
                    if(data.description == "already exists"){
                        toggleDebug('danger', 'Função Existente', "Cadastre com outro nome");
                    }else{
                        toggleDebug('danger', 'Erro Inesperado', "Contate um administrador");
                    }
                }else{
                    toggleDebug('success', 'Sucesso!', 'Função cadastrada com sucesso!');
                    clear();
                    getView();
                }
            }
        });
    }

    function load(){
        var sender = "id=" + id + '&action=loadFunction';
        $.ajax({
            type: "POST",
            url: url,
            data: sender,
            success: function(response){
                alert(response);
                // var data = $.parseJSON();
                // $('input[name=name]').val(data.name);
                // $('input[name=sector]').val(data.sector);
            }
        });
    }

    function getView(){
        var sender = 'action=getFunctionView';
        $.ajax({
            type: "POST",
            url: url,
            data: sender,
            success: function(response){
                $('.report-rows').html(response);
            }
        });
    }

    function toggleDebug(_class, _title, _description){
        $('.debug').slideUp();
        if(_class == "danger"){
            $('.debug').removeClass("text-success").addClass("text-danger").html(_title + "<br/><small>"+_description+"</small>").slideDown();
        }else{
            $('.debug').removeClass("text-danger").addClass("text-success").html(_title + "<br/><small>"+_description+"</small>").slideDown();
        }
    }

    function toggleButons(){
        if(action == "add"){
            $('#btnClear').addClass("disabled");
            $('#btnDelete').addClass("disabled");
        }else{
            $('#btnClear').removeClass("disabled");
            $('#btnDelete').removeClass("disabled");
        }
    }

    function clear(){
        $('.form-control').val("");
    }

    getView();
});