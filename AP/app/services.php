<html>
    <head>
        <title>Serviços</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
        <!-- Quicksand Font -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <!-- Custom Style -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <?php include('partials/navbar.php'); ?>
        <br/>
        <div class = "container-fluid">
            <div class = "row-fluid">
                <div class = "col-md-12">
                    <h3 class = "text-muted"><i class = "fa fa-tools"></i> Serviços</h3>
                </div>
            </div>
            <hr/>
            <div class = "row">
                <div class = "col-md-4">
                    <div class="card">
                        <div class = "section-header">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Gerencie os Serviços</h5>
                                <small class = "" style = "color: #a6e033;">Adicione serviços conforme há navios previstos</small>
                            </div>
                        </div>
                        <div class = "section-body">
                            <div class = "card-body mt-0 pt-0">
                                <form id = "form-function">
                                    <div class="md-form form-group mt-5">
                                        <input type="text" name = "name" class="form-control" placeholder="Nome">
                                        <label for="formGroupExampleInputMD">Serviço</label>
                                    </div>
                                    <div class="md-form form-group mt-5">
                                        <input type="text" name = "" class="form-control" placeholder="Horário para Funcionário">
                                        <label for="formGroupExampleInput2MD">Horário p/ Confirmar</label>
                                    </div>
                                    <div class="md-form form-group mt-5">
                                        <input type="text" name = "" class="form-control" placeholder="Horário do Navio">
                                        <label for="formGroupExampleInput3MD">Horário Previsto</label>
                                    </div>
                                    <div class="md-form form-group mt-5">
                                        <input type="text" name = "" class="form-control" placeholder="Equipe">
                                        <label for="formGroupExampleInput4MD">Equipe</label>
                                    </div>
                                    <div class="md-form form-group mt-5">
                                        <textarea name = "" class="form-control" placeholder="Descrição"></textarea>
                                        <label for="formGroupExampleInput5MD">Descrição</label>
                                    </div>
                                    <h5 class = "debug text-center"></h5>
                                    <div class = "bottom-buttons text-center">
                                        <button class = "btn btn-info btn-round btn-sm disabled" id = "btnClear"><i class = "fa fa-arrow-left"></i></button>
                                        <button class = "btn btn-danger btn-round btn-sm disabled" id = "btnDelete"><i class = "fa fa-trash"></i></button>
                                        <button class = "btn btn-primary btn-round btn-sm" id = "btnConfirm"><i class = "fa fa-check"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "col-md-8">
                    <div class="card">
                        <div class = "section-header">
                            <div class = "card-body">
                                <h5 class="card-title text-muted">Relatório de Serviços</h5>
                                <small class = "" style = "color: #a6e033;">Todos os Serviços</small>
                            </div>
                        </div>
                        <div class = "section-body">
                            <div class = "card-body">
                                <div class = "table-responsive">
                                    <table class = "table table-hover table-sm text-center">
                                        <thead>
                                            <th>Nome</th>
                                            <th>Horário Previsto</th>
                                            <th>Equipe</th>
                                        </thead>
                                        <tbody class = "report-rows">
                                            <tr>
                                                <td>Operação Navio I</td>
                                                <td><span class = "text-muted">09/04/2019 - 10:00AM</span></td>
                                                <td><span class = "text-primary">A</span></td>
                                            </tr>
                                            <tr>
                                                <td>Operação Navio II</td>
                                                <td><span class = "text-muted">09/04/2019 - 13:00PM</span></td>
                                                <td><span class = "text-warning">D</span></td>
                                            </tr>
                                            <tr>
                                                <td>Operação Navio III</td>
                                                <td><span class = "text-muted">09/04/2019 - 15:00PM</span></td>
                                                <td><span class = "text-success">B</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php //include('partials/footer.php'); ?>
    </body>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
    <!-- Custom Script -->
    <!-- <script type = "text/javascript" src = "js/functions.js"></script> -->
</html>