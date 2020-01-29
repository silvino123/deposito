
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catalogo</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/473290e8a6.js"></script>
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
</head>

<body>
<div id="wrapper" style="background-color: #fff;">
<?php include 'Slide-Menu.html'; ?>  
<div id="page-wrapper" class="gray-bg">  
<?php include 'Nav.html'; ?>  
<div class="wrapper wrapper-content">
   
        <div class="row">
        <div class="col-lg-2">
                        <div class="ibox float-e-margins">
                            
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dim btn-large-dim dropdown-toggle" style="width: 140px;font-size: 14px;height: 50px"><i class="fa fa-plus-square"></i>&nbsp;Agregar <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              
                                <li><a  data-toggle="modal" data-target="#operadores"><i class="fa fa-plus-square" > </i> Operadores</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#Marca"> <i class="fa fa-plus-square" ></i> Marca</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#Modelo"> <i class="fa fa-plus-square" ></i> Línea</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#linea"> <i class="fa fa-plus-square"></i> Modelo</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#color"> <i class="fa fa-plus-square"></i> Color</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#mp"> <i class="fa fa-plus-square"></i> M.P</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#departamento"> <i class="fa fa-plus-square"></i> Departamento</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#motivo"> <i class="fa fa-plus-square"></i> Motivo</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#departamento2"> <i class="fa fa-plus-square"></i> Departamento2</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#pension"> <i class="fa fa-plus-square"></i> Pension</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#deposito"> <i class="fa fa-plus-square"></i> Deposito</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#grua"> <i class="fa fa-plus-square"></i> Grua</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    
                  
                   
        </div>
        <!-- tabla -->
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title" >
                        <h4 style="color:#000000" class="text-center"><b>Operadores</b></h4>
                        <div class="ibox-tools">
                            
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr style="background-color:#37474f;color:#fff" >
                                <th>#</th>
                                <th>Nombre</th>
                                
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  
                           require('ContOperador.php');
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title" >
                        <h4 style="color:#000000" class="text-center"><b>Marcas</b> </h4>
                        <div class="ibox-tools">
                            
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead>
                            <tr style="background-color:#37474f;color:#fff">
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php  
                           require('ContMarcas.php');
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h4 style="color:#000000" class="text-center"><b>Líneas</b> </h4>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Marca</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  
                           require('ContModelo.php');
                                ?>
                               
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- linea -->
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h4 style="color:#000000" class="text-center"><b>Modelo</b> </h4>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                <?php  
                           require('ContLineas.php');
                                ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- final linea -->
                <!-- color -->
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h4 style="color:#000000" class="text-center"><b>Colores</b> </h4>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php  
                           require('ContColor.php');
                                ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- final color -->
                <!-- MP -->
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h4 style="color:#000000" class="text-center"><b>M.P</b> </h4>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                               
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- final mp -->
                <!-- Departamento -->
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h4 style="color:#000000" class="text-center"><b>Departamento</b> </h4>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                               
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- final Departamento -->
                <!-- motivo -->
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h4 style="color:#000000" class="text-center"><b>Motivo</b> </h4>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                               
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- final motivo -->
                <!-- Departamento2 -->
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h4 style="color:#000000" class="text-center"><b>Departamento2</b> </h4>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                               
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- final Departamento2 -->
                <!-- Pension -->
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h4 style="color:#000000" class="text-center"><b>Pension</b> </h4>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                               
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- final pension -->
                
                <!-- Deposito -->
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h4 style="color:#000000" class="text-center"><b>Deposito</b> </h4>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                               
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- grua -->
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h4 style="color:#000000" class="text-center"><b>Grua</b> </h4>
                            <div class="ibox-tools">
                               
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                               
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- final grua -->
            </div>
            </div>
        <!-- final tabla -->
        
                    
                    <?php include 'footer.html'; ?>  
</div>

</div>
</div>
<!-- modales operadores -->
<div class="modal inmodal" id="operadores" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <!-- <i class="fa fa-user modal-icon"></i> -->
                                            <h4 class="modal-title">Operadores</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="RegistrarOperador.php">
                                            <div class="row">
                                                <div class="col-lg-12 b-r">
                                                    
                                                        <div class="form-group"><label>Nombre</label> <input type="text" placeholder="Nombre" class="form-control" id="Nombre" name="Nombre" required=""maxlength="100"></div>
                                                        
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal inmodal" id="EditarOperador" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                            <h4 class="modal-title">Editar Operador</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="post" action="EditarOperador.php">
                                        <div class="fetched-data"></div> 
                                        
                                        
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                         
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- final modales operadores -->
                            <!-- modales marca -->
                            <div class="modal inmodal" id="Marca" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <!-- <i class="fa fa-user modal-icon"></i> -->
                                            <h4 class="modal-title">Marca</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="RegistrarMarca.php">
                                            <div class="row">
                                                <div class="col-lg-12 b-r">
                                                    
                                                        <div class="form-group"><label>Nombre</label> <input type="text" placeholder="Nombre" class="form-control" id="Nombre" name="Nombre" required=""maxlength="100"></div>
                                                        
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal inmodal" id="EditarMarca" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                            <h4 class="modal-title">Editar Marca</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="post" action="EditarMarca.php">
                                        <div class="fetched-data"></div> 
                                        
                                        
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                         
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- final modales marcas --> 
                            <!-- modales modelos -->
                            <div class="modal inmodal" id="Modelo" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <!-- <i class="fa fa-user modal-icon"></i> -->
                                            <h4 class="modal-title">Líneas</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="RegistrarModelo.php">
                                            <div class="row">
                                                <div class="col-lg-12 b-r">
                                                    
                                                        <div class="form-group"><label>Nombre</label> <input type="text" placeholder="Nombre" class="form-control" id="Nombre" name="Nombre" required=""maxlength="100"></div>
                                                        <div class="form-group">
                                                        <label>Marcas</label>
                                                        <select class="select2_demo_1 form-control" name="Marca" id="Marca" required>
                                           <option value="" selected>Seleccione una Marca</option>
                                      <?php 
                               require('conec.php');

                         $rs = mysqli_query($con, "SELECT * FROM marcas");

   while($row = mysqli_fetch_array($rs)){
     
     echo"<option value=".$row['id_marca'] ."  >". $row['Nombre'] ."</option>";
                         
    }

  mysqli_close($con);
 ?>      
     </select>
                                                        </div>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal inmodal" id="EditarModelo" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                            <h4 class="modal-title">Editar Líneas</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="post" action="EditarMarca.php">
                                        <div class="fetched-data"></div> 
                                        
                                        
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                         
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- final modales modelos -->
                            <div class="modal inmodal" id="linea" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <!-- <i class="fa fa-user modal-icon"></i> -->
                                            <h4 class="modal-title">Modelo</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="Registrarlineas.php">
                                            <div class="row">
                                                <div class="col-lg-12 b-r">
                                                    
                                                        <div class="form-group"><label>Año</label> <input type="number" placeholder="año" class="form-control" id="Nombre" name="Nombre" required="" maxlength="4"></div>
                                                        
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal inmodal" id="EditarLinea" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                            <h4 class="modal-title">Editar Modelo</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="post" action="EditarOperador.php">
                                        <div class="fetched-data"></div> 
                                        
                                        
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                         
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- final modales lineas -->
                            <!-- modales colores -->
                            <div class="modal inmodal" id="color" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <!-- <i class="fa fa-user modal-icon"></i> -->
                                            <h4 class="modal-title">Colores</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="RegistrarColor.php">
                                            <div class="row">
                                                <div class="col-lg-12 b-r">
                                                    
                                                        <div class="form-group"><label>Nombre</label> <input type="text" placeholder="Nombre" class="form-control" id="Nombre" name="Nombre" required=""maxlength="100"></div>
                                                        
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>
<!-- Toastr -->
<script src="js/plugins/toastr/toastr.min.js"></script>
 <!-- GITTER -->
 <script src="js/plugins/gritter/jquery.gritter.min.js"></script>
 <script src="js/plugins/dataTables/datatables.min.js"></script>
    <!-- Page-Level Scripts -->
    <script src="js/alertifyjs/alertify.js"></script>
    <script src="js/alertifyjs/alertify.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    // { extend: 'copy'},
                    // {extend: 'csv'},
                    // {extend: 'excel', title: 'Bitacoras'},
                    // {extend: 'pdf', title: 'Bitacoras'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#EditarOperador').on('show.bs.modal', function (e) {

                var rowid = $(e.relatedTarget).data('id');
                
                $.ajax({
                    type : 'post',
                    url : 'CargaModalOperador.php', 
                    data :  'rowid='+ rowid, //Pass $id
                    success : function(data){
                    
                    $('.fetched-data').html(data);

                
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#EditarMarca').on('show.bs.modal', function (e) {

                var rowid = $(e.relatedTarget).data('id');
                
                $.ajax({
                    type : 'post',
                    url : 'CargaModalMarca.php', 
                    data :  'rowid='+ rowid, //Pass $id
                    success : function(data){
                    
                    $('.fetched-data').html(data);

                
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#EditarModelo').on('show.bs.modal', function (e) {

                var rowid = $(e.relatedTarget).data('id');
                
                $.ajax({
                    type : 'post',
                    url : 'CargaModalModelo.php', 
                    data :  'rowid='+ rowid, //Pass $id
                    success : function(data){
                    
                    $('.fetched-data').html(data);

                
                    }
                });
            });
        });
    </script>
     <script type="text/javascript">
        $(document).ready(function(){
            $('#EditarLinea').on('show.bs.modal', function (e) {

                var rowid = $(e.relatedTarget).data('id');
                
                $.ajax({
                    type : 'post',
                    url : 'CargaModalLinea.php', 
                    data :  'rowid='+ rowid, //Pass $id
                    success : function(data){
                    
                    $('.fetched-data').html(data);

                
                    }
                });
            });
        });
    </script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:34 GMT -->
</html>
