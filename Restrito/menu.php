<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../vendor/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard.php">SGEA</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        
<!--Dashboard            -->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa fa-fw fa-tachometer-alt"></i>
                    <span class="nav-link-text">Bem-Vindo</span>
                </a>
            </li>
            
<!--Fornecedor            -->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Fornecedor">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseFornecedor" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-dolly"></i>
                    <span class="nav-link-text">Fornecedor</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseFornecedor">
                    <li>
                        <a href="listarFornecedor.php">Listar</a>
                    </li>
<!--                    <li>-->
<!--                        <a href="#">Novo</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">Atualizar</a>-->
<!--                    </li>-->
<!---->
<!--                    <li>-->
<!--                        <a href="#">Excluir</a>-->
<!--                    </li>-->
                </ul>
            </li>
            
<!--Colaborador-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Colaborador">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseColaborador" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Colaborador</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseColaborador">
                    <li>
                        <a href="#">Listar</a>
                    </li>
                    <li>
                        <a href="#">Novo</a>
                    </li>
                    <li>
                        <a href="#">Atualizar</a>
                    </li>

                    <li>
                        <a href="#">Excluir</a>
                    </li>
                </ul>
            </li>

<!--Cliente-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cliente">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCliente" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Cliente</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseCliente">
                    <li>
                        <a href="#">Listar</a>
                    </li>
                    <li>
                        <a href="#">Novo</a>
                    </li>
                    <li>
                        <a href="#">Atualizar</a>
                    </li>

                    <li>
                        <a href="#">Excluir</a>
                    </li>
                </ul>
            </li>

<!--Produto-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Produto">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProduto" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-boxes"></i>
                    <span class="nav-link-text">Produto</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseProduto">
                    <li>
                        <a href="#">Listar</a>
                    </li>
                    <li>
                        <a href="#">Novo</a>
                    </li>
                    <li>
                        <a href="#">Atualizar</a>
                    </li>

                    <li>
                        <a href="#">Excluir</a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gráficos">
                <a class="nav-link" href="charts.php">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Gráficos</span>
                </a>
            </li>
            
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Relatórios">
                <a class="nav-link" href="tables.php">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Relatórios</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Configurações">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Configuração</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="navbar.php">Estilo de menu</a>
                    </li>
                    <li>
                        <a href="cards.php">Cartões</a>
                    </li>
                </ul>
            </li>
            
<!--            Modelo de Pagina em branco-->
<!--            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">-->
<!--                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">-->
<!--                    <i class="fa fa-fw fa-file"></i>-->
<!--                    <span class="nav-link-text">Paginas de exemplos</span>-->
<!--                </a>-->
<!--                <ul class="sidenav-second-level collapse" id="collapseExamplePages">-->
<!--                    <li>-->
<!--                        <a href="blank.php">Blank Page</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->


<!--            Modelo de Menu com niveis-->

<!--            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">-->
<!--                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">-->
<!--                    <i class="fa fa-fw fa-sitemap"></i>-->
<!--                    <span class="nav-link-text"> Levels</span>-->
<!--                </a>-->
<!--                <ul class="sidenav-second-level collapse" id="collapseMulti">-->
<!--                    <li>-->
<!--                        <a href="#">Second Level Item</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">Second Level Item</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">Second Level Item</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>-->
<!--                        <ul class="sidenav-third-level collapse" id="collapseMulti2">-->
<!--                            <li>-->
<!--                                <a href="#">Third Level Item</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Third Level Item</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Third Level Item</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
            
<!--            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">-->
<!--                <a class="nav-link" href="#">-->
<!--                    <i class="fa fa-fw fa-link"></i>-->
<!--                    <span class="nav-link-text">Link</span>-->
<!--                </a>-->
<!--            </li>-->
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">New Messages:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>Jane Smith</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>

