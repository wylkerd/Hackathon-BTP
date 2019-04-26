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
                    <h3 class = "text-muted"><i class = "fa fa-tools"></i> Serviços à Confirmar</h3>
                </div>
            </div>
            <hr/>
            <div class = "row">
                <div class = "col-md-12">
                    <div class="card">
                        <div class = "section-header">
                            <div class = "card-body">
                                <h5 class="card-title text-muted">Serviços</h5>
                                <small class = "" style = "color: #a6e033;">Todos os Serviços</small>
                            </div>
                        </div>
                        <div class = "section-body">
                            <div class = "card-body">
                                <div class = "table-responsive">
                                    <table class = "table table-sm text-center">
                                        <thead>
                                            <th>Nome</th>
                                            <th>Horário Previsto</th>
                                            <th></th>
                                        </thead>
                                        <tbody class = "report-rows">
                                            <tr>
                                                <td>Operação Navio I</td>
                                                <td><span class = "text-muted">09/04/2019 - 10:00AM</span></td>
                                                <td>
                                                    <button class = "btn btn-sm btn-round btn-success"><i class = "fa fa-check"></i></button>
                                                    <button class = "btn btn-sm btn-round btn-danger"><i class = "fa fa-times"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Operação Navio II</td>
                                                <td><span class = "text-muted">09/04/2019 - 13:00PM</span></td>
                                                <td>
                                                    <button class = "btn btn-sm btn-round btn-success"><i class = "fa fa-check"></i></button>
                                                    <button class = "btn btn-sm btn-round btn-danger"><i class = "fa fa-times"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Operação Navio III</td>
                                                <td><span class = "text-muted">09/04/2019 - 15:00PM</span></td>
                                                <td>
                                                    <button class = "btn btn-sm btn-round btn-success"><i class = "fa fa-check"></i></button>
                                                    <button class = "btn btn-sm btn-round btn-danger"><i class = "fa fa-times"></i></button>
                                                </td>
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