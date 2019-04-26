<nav class="navbar navbar-expand-lg navbar-dark white custom-navbar">
    <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo.png" width = 50px>
    </a>
    <button class="navbar-toggler btn btn-dark" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-3" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-dark custom-link" href="index.php"><i class = "fa fa-home" style = "color: #ccc;"></i> Dashboard
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark custom-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class = "fa fa-users" style = "color: #ccc;"></i> Funcionários</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="functions.php">Funções</a>
                    <a class="dropdown-item" href="employees.php">Funcionários</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark custom-link" href="services.php"><i class = "fa fa-clipboard" style = "color: #ccc;"></i> Serviços</a>
            </li>
        </ul>
    </div>
</nav>