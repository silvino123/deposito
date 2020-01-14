
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
                                <li><a > <i class="fa fa-plus-square"></i> Linea</a></li>
                                <li class="divider"></li>
                                <li><a > <i class="fa fa-plus-square"></i> Color</a></li>
                                <li class="divider"></li>
                                <li><a > <i class="fa fa-plus-square"></i> M.P</a></li>
                                <li class="divider"></li>
                                <li><a > <i class="fa fa-plus-square"></i> Departamento</a></li>
                                <li class="divider"></li>
                                <li><a > <i class="fa fa-plus-square"></i> Motivo</a></li>
                                <li class="divider"></li>
                                <li><a > <i class="fa fa-plus-square"></i> Departamento2</a></li>
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
                    <div class="ibox-title">
                        <h5>Operadores</h5>
                        <div class="ibox-tools">
                            <!-- <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a> -->
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr style="background-color:#37474f;color:#fff">
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td><a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-default' style="background-color:#757575;color:#fff" ><i class='fas fa-pencil-alt' title='Editar'></i></a>
                                        <a  class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td><a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-default' style="background-color:#757575;color:#fff" ><i class='fas fa-pencil-alt' title='Editar'></i></a>
                                        <a  class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td><a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-default' style="background-color:#757575;color:#fff" ><i class='fas fa-pencil-alt' title='Editar'></i></a>
                                        <a  class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Marcas </h5>
                        <div class="ibox-tools">
                            <!-- <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a> -->
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead>
                            <tr style="background-color:#37474f;color:#fff">
                                <th>#</th>
                                <th>Data</th>
                                <th>User</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td><a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-default' style="background-color:#757575;color:#fff" ><i class='fas fa-pencil-alt' title='Editar'></i></a>
                                        <a  class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td><a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-default' style="background-color:#757575;color:#fff" ><i class='fas fa-pencil-alt' title='Editar'></i></a>
                                        <a  class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td><a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-default' style="background-color:#757575;color:#fff" ><i class='fas fa-pencil-alt' title='Editar'></i></a>
                                        <a  class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a></td>
                            </tr>
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
                            <h5>Linea </h5>
                            <div class="ibox-tools">
                                <!-- <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a> -->
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-bordered">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td><a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-default' style="background-color:#757575;color:#fff" ><i class='fas fa-pencil-alt' title='Editar'></i></a>
                                        <a  class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td><a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-default' style="background-color:#757575;color:#fff" ><i class='fas fa-pencil-alt' title='Editar'></i></a>
                                        <a  class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td><a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-default' style="background-color:#757575;color:#fff" ><i class='fas fa-pencil-alt' title='Editar'></i></a>
                                        <a  class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Color </h5>
                            <div class="ibox-tools">
                                <!-- <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a> -->
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>#</th>
                                    <th>Data</th>
                                    <th>User</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><span class="pie">0.52,1.041</span></td>
                                    <td>Samantha</td>
                                    <td class="text-navy"> <i class="fa fa-level-up"></i> 40% </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><span class="pie">226,134</span></td>
                                    <td>Jacob</td>
                                    <td class="text-warning"> <i class="fa fa-level-down"></i> -20% </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><span class="pie">0.52/1.561</span></td>
                                    <td>Damien</td>
                                    <td class="text-navy"> <i class="fa fa-level-up"></i> 26% </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <!-- final tabla -->
        
                    
                    <?php include 'footer.html'; ?>  
</div>

</div>
</div>
<div class="modal inmodal" id="operadores" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <!-- <i class="fa fa-user modal-icon"></i> -->
                                            <h4 class="modal-title">Operadores</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                           
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal inmodal" id="Marca" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <!-- <i class="fa fa-user modal-icon"></i> -->
                                            <h4 class="modal-title">Marca</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                           
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-primary">Guardar</button>
                                        </div>
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
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:34 GMT -->
</html>
