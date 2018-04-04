<!DOCTYPE html>
<html lang="en">

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
    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<!--menu-->
<?php
    require_once "menu.php";
?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Fornecedor</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1>Fornecedor</h1>


                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-dolly"></i> Fornecedores
                        <button class="btn btn-success float-right col-1">NOVO</button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Empresa</th>
                                    <th>IE</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Empresa</th>
                                    <th>IE</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Ação</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td>Empresa TALS  ltda</td>
                                    <td>Inscrição estadual</td>
                                    <td>empresatals@tals.com</td>
                                    <td>(999)9999-9999</td>
                                    <td>
                                        <a href="#" class="fa fa-edit align-items-center" data-toggle="modal" data-target="#editar"></a>
                                        <a href="#" class="fa fa-trash-alt text-danger" ></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Editar Fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form>
                    <div class="form-row">

<!--                        Razão Social-->
                        <div class="form-group col-12">
                            <label for="inputRazaoSocial">Razão Social</label>
                            <input type="text" class="form-control" id="inputRazaoSocial" placeholder="Razão Social">
                        </div>

<!--                        Nome Fantasia-->
                        <div class="form-group col-12">
                            <label for="inputNomeFantasia">Nome Fantasia</label>
                            <input type="text" class="form-control" id="inputNomeFantasia" placeholder="Nome Fantasia">
                        </div>
                        
                        <div class="form-group col-12">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        
                        
                        
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    
                    </form>
                
                
                
                
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </div>
    </div>
</div>









<!-- /.container-fluid-->
<!-- /.content-wrapper-->

    <?php
        require_once "footer.php";
    ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
<!--Editar dataTable-->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
</div>
</body>

</html>