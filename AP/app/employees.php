<html>
    <head>
        <title>Funcionários</title>
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
                    <h3 class = "text-muted"><i class = "fa fa-tools"></i> Funcionários</h3>
                </div>
            </div>
            <hr/>
            <div class = "row">
                <div class = "col-md-4">
                    <div class="card">
                        <div class = "section-header">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Gerencie os Funcionários</h5>
                                <small class = "" style = "color: #a6e033;">Configure seus funcionários com as determinadas equipes para gerar serviços à eles</small>
                            </div>
                        </div>
                        <div class = "section-body">
                            <div class = "card-body mt-0 pt-0">
                                <form id = "form-function">
                                    <div class="md-form form-group mt-5">
                                        <input type="text" name = "" class="form-control" placeholder="CPF">
                                        <label for="formGroupExampleInputMD">CPF</label>
                                    </div>
                                    <div class="md-form form-group mt-5">
                                        <input type="text" name = "" class="form-control" placeholder="Escala">
                                        <label for="formGroupExampleInput2MD">Escala</label>
                                    </div>
                                    <div class="md-form form-group mt-5">
                                        <input type="text" name = "" class="form-control" placeholder="Equipe">
                                        <label for="formGroupExampleInput3MD">Equipe</label>
                                    </div>
                                    <div class="md-form form-group mt-5">
                                        <input type="text" name = "" class="form-control" placeholder="Função">
                                        <label for="formGroupExampleInput3MD">Função</label>
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
                                <h5 class="card-title text-muted">Relatório de Funcionários</h5>
                                <small class = "" style = "color: #a6e033;">Todos os Funcionários</small>
                            </div>
                        </div>
                        <div class = "section-body">
                            <div class = "card-body">
                                <div class = "table-responsive">
                                    <table class = "table table-hover table-sm text-center">
                                        <thead>
                                            <th>CPF</th>
                                            <th>Equipe</th>
                                            <th>Função</th>
                                        </thead>
                                        <tbody class = "report-rows">
                                            <tr>
                                                <td>521234212-23</td>
                                                <td><span class = "text-primary">A</span></td>
                                                <td>Conferente PL</td>
                                            </tr>
                                            <tr>
                                                <td>502291238-43</td>
                                                <td><span class = "text-success">B</span></td>
                                                <td>Operador de Equipamentos II</td>
                                            </tr>
                                            <tr>
                                                <td>521139212-23</td>
                                                <td><span class = "text-warning">D</span></td>
                                                <td>Operador de Gate V</td>
                                            </tr>
                                            <tr>
                                                <td>932123721-23</td>
                                                <td><span class = "text-success">B</span></td>
                                                <td>Operador de Equipamentos IV</td>
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