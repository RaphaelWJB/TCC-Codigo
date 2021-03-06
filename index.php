﻿<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/estilos.css">
    <title>TCC</title>
    <style>

    </style>
</head>
<body>

<!--Container principal-->
<div class="container-fluid fundo">

    <!--Menu-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="http://placehold.it/115x65" alt="LOGO"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav ml-auto p-2">
                    <li class="nav-item">
                        <a href="#" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">CONHEÇA SGEA</a>
                    </li>
                    <li class="nav-item">
                        <a href="#formContato" class="nav-link">CONTATO</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">ENTRAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Carrousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/first.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>O que é Lorem Ipsum?</h5>
                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/second.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Porque nós o usamos?</h5>
                    <p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/third.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>De onde ele vem?</h5>
                    <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!--DETALHES-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-4 mt-2 mb-2">
                <div class="card h-100">
                    <img src="http://placehold.it/700x400" alt="">
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mt-2 mb-2">
                <div class="card h-100">
                    <img src="http://placehold.it/700x400" alt="">
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 m-auto detalhes"  data-toggle="modal" data-target=".bd-example-modal-lg">
                <div class="card h-100">
                    <img src="http://placehold.it/700x400" alt="">
                </div>
            </div>


            <!--Modal modelo-->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detalhes 3</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="http://placehold.it/700x400" alt="">
                            <!--<div class="card-body">-->
                                <h4 class="card-title">
                                    <a href="#">Project One</a>
                                </h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                            <!--</div>-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>







            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2>Detalhes</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <img src="http://placehold.it/700x400" alt="">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Project One</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--Formulario-->
    <div class="container w-50 p-4 form-container" id="formContato">
        <form action="#" method="post" class="form-contato">
            <h1 class="text-center">CONTATO</h1>
            <div class="form-group">
                <label for="cNome" class="mb-1">Nome</label>
                <input type="text" class="form-control" id="cNome" placeholder="Nome">
            </div>


            <div class="form-group">
                <label for="cEmail" class="mb-1">Email</label>
                <input type="text" class="form-control" id="cEmail" placeholder="Email">
            </div>


            <div class="form-group">
                <label for="cTelefone" class="mb-1">Telefone</label>
                <input type="text" class="form-control" id="cTelefone" placeholder="Telefone">
            </div>


            <div class="form-group">
                <label for="cAssunto" class="mb-1">Assunto</label>
                <textarea name="" placeholder="Assunto" id="cAssunto" cols="30" rows="5" class="form-control"></textarea>
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-success w-100" value="ENVIAR" name="btnEnviar">
            </div>
        </form>
    </div>

</div>

<!--footer-->
<div class="container mt-2">
    <div class="text-right p-2">
        <span class="footer">&copy;Desenvolvido por nois - 2018</span>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="node_modules/bootstrap/dist/js/meuScript.js"></script>
</body>
</html>
