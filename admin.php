
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bitácoras</title>

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
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            
                            
                            <button class="btn btn-primary dim btn-large-dim" type="button" style="width: 140px;font-size: 20px;height: 50px" data-toggle="modal" data-target="#myModal5"><i class="fa fa-plus-square"></i>&nbsp;Agregar</button> 
                            
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                        <button class="btn btn-primary dim btn-large-dim" type="button" style="width: 140px;font-size: 20px;height: 50px" data-toggle="modal" data-target="#myModal6"><i class="fa fa-search"></i>&nbsp;Buscar</button> 
                            
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="ibox float-e-margins">
                            
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dim btn-large-dim dropdown-toggle" style="width: 140px;font-size: 14px;height: 50px"><i class="fas fa-car-alt"></i>&nbsp;Operaciones <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              
                                <li><a  data-toggle="modal" data-target="#Estatus"><i class="fa fa-sync-alt"></i> Actualización Estatus</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#Entradas"> <i class="fas fa-hand-holding-usd"></i> Entradas y Salidas</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                   
        </div>
        <!-- tabla -->
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h3 class="text-center" style="color:#37474f"> <b>Bitácoras Registradas</b></h3>
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

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead >
                    <tr >
                        <th style="background-color:#37474f;color:#fff">Ciudad</th>
                        <th style="background-color:#37474f;color:#fff">Fecha</th>
                        <th style="background-color:#37474f;color:#fff">Operador</th>
                        <th style="background-color:#37474f;color:#fff">Inventario</th>
                        <th style="background-color:#37474f;color:#fff">Inventario del oficial</th>
                        <th style="background-color:#37474f;color:#fff">No.IPH</th>
                        <th style="background-color:#37474f;color:#fff">Oficial que entrega</th>
                        <th style="background-color:#37474f;color:#fff">Departamento</th>
                        <th style="background-color:#37474f;color:#fff">Motivo de Ingreso</th>
                        <th style="background-color:#37474f;color:#fff">Agencia o Zona</th>
                        <th style="background-color:#37474f;color:#fff">Origen</th>
                        <th style="background-color:#37474f;color:#fff">Fecha Salida</th>
                        <th style="background-color:#37474f;color:#fff">Estatus</th>
                        <th style="background-color:#37474f;color:#fff">Inventario</th>
                        <th style="background-color:#37474f;color:#fff">Marca</th>
                        <th style="background-color:#37474f;color:#fff">Línea</th>
                        <th style="background-color:#37474f;color:#fff">Modelo</th>
                        <th style="background-color:#37474f;color:#fff">Placas </th>
                        <th style="background-color:#37474f;color:#fff">Serie</th>
                        <th style="background-color:#37474f;color:#fff">Color</th>
                        <th style="background-color:#37474f;color:#fff">Llaves</th>
                        <th style="background-color:#37474f;color:#fff">Observaciones</th>
                        <th style="background-color:#37474f;color:#fff">Tipo Vehículo</th>
                        <th style="background-color:#37474f;color:#fff">Tarifa</th>
                        <th style="background-color:#37474f;color:#fff">Días en pensión</th>
                        <th style="background-color:#37474f;color:#fff">Acumulado</th>
                        <th style="background-color:#37474f;color:#fff">Pensión </th>
                        <th style="background-color:#37474f;color:#fff">Costo Extra</th>
                        <th style="background-color:#37474f;color:#fff">Cost. Grúa</th>
                        <th style="background-color:#37474f;color:#fff">Depósito</th>
                        <th style="background-color:#37474f;color:#fff">Usuario Liberó </th>
                        <th style="background-color:#37474f;color:#fff">Mp Liberó</th>
                        <th style="background-color:#37474f;color:#fff">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX" style="color:#424242">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td colspan="2" >x
                        <!-- <a data-target='#EditarUsuario' data-toggle='modal' class='btn btn-default' style="background-color:#757575;color:#fff" ><i class='fas fa-pencil-alt' title='Editar'></i></a>
                        <a  class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a> -->
                        </td>

                    </tr>
                    <tr class="gradeC" style="color:#424242">
                    <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="gradeA" style="color:#424242">
                    <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="gradeA" style="color:#424242">
                    <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="gradeA" style="color:#424242">
                    <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="gradeA" style="color:#424242">
                    <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                        <td class="center">X</td>
                    </tr>
                   
                   
                    </tfoot>
                    </table>
                        </div>

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
<div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                           <img alt="image" src="img/logoc5.png" style="width: 100px; height:60px;margin-left:-700px;"/>
                                            <h4 class="modal-title" style="color:#37474f">Bitácora Corralón Municipal C5</h4>
                                         
                                        </div>
                                        <div class="modal-body">
                                          
                                           
                                           </div>
                                        

                                        <div class="modal-footer">
                                          
                                            <button type="button" class="btn btn-primary">Registrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            
                            <div class="modal inmodal fade" id="myModal6" tabindex="1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                           <img alt="image" src="img/logoc5.png" style="width: 100px; height:60px;margin-left:-700px;"/>
                                            <h4 class="modal-title" style="color:#37474f">Buscador de Vehículos</h4>
                                         
                                        </div>
                                        <div class="modal-body">
                                           
                                  
                                           </div>
                                        

                                        <div class="modal-footer">
                                          
                                            <button type="button" class="btn btn-primary">Registrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="modal inmodal fade" id="Estatus" tabindex="1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                           <img alt="image" src="img/logoc5.png" style="width: 100px; height:60px;margin-left:-700px;"/>
                                            <h4 class="modal-title" style="color:#37474f">Actualización de Estatus</h4>
                                         
                                        </div>
                                        <div class="modal-body">
                                           
                                  
                                           </div>
                                        

                                        <div class="modal-footer">
                                          
                                            <button type="button" class="btn btn-primary">Registrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="modal inmodal fade" id="Entradas" tabindex="1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                           <img alt="image" src="img/logoc5.png" style="width: 100px; height:60px;margin-left:-700px;"/>
                                            <h4 class="modal-title" style="color:#37474f">Entradas y Salidas</h4>
                                         
                                        </div>
                                        <div class="modal-body">
                                           
                                  
                                           </div>
                                        

                                        <div class="modal-footer">
                                          
                                            <button type="button" class="btn btn-primary">Registrar</button>
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
