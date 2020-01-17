<?php 
// session_start();
// if (!isset( $_SESSION["Nombre"])){
   
//    header("location:login.html");
 
//  }

?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:24 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reporte</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/473290e8a6.js"></script>
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/473290e8a6.js"></script>
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
</head>

<body >
<div id="wrapper" style="background-color: #fff;">
    <?php include 'Slide-Menu.html'; ?>  
        <div id="page-wrapper" class="gray-bg">  
            <?php include 'Nav.html'; ?>  
                <div class="wrapper wrapper-content">
               <div class="row">
               <button class="btn btn-success " type="button" onclick="tableToExcel('testTable', 'Reporte')" value="Export to Excel"><i class="fa fa-download"></i>&nbsp;&nbsp;<span class="bold">Descargar Reporte</span></button>
               <br>
            </div>
            <br>
                <div class="row" style="overflow-x:scroll">
                <table class="table table-striped  table-hover" id="testTable">
        <thead>
         <tr style="height: 40px;width: auto;">
             <th style="width:100px;background-color:#fff;"> <img src="images/logoFiscalia.png" style="height: 50px;"/>  </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th colspan="8"style="background-color: #757575;color: #fff;" class="text-center">CONTROL DE INGRESOS, SALIDAS Y STATUS EN C-5</th>
             <th  style="background-color: black;"></th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
          
         </tr>
         <tr style="background-color: red;color: #fff">
           <th>Ciudad</th>
           <th>Fecha de Ingreso al Depósito Vehícular Autorizado</th>
           <th>Fecha de Salida del Depósito Vehícular Autorizado</th>
           <th>Marca</th>
           <th>Tipo</th>
           <th>Línea</th>
           <th>Modelo</th>
           <th>Color</th>
           <th>Serie y/o Motor Completa</th>  
           <th>Placas</th>
           <th>Clasificación Juridíca (Objeto,Producto,Instrumento del Delito/Relacionado con los Hechos,Lugar de la Comision/lugar del hallazgo</th>
           <th>N° Inventario Agente</th>
           <th>N° Inventario del Depósito Vehicular Autorizado</th>
           <th>Reporte Fotográfico</th>
           <th>¿Ingreso en Grua?</th>
           <th>Motivo de Ingreso</th>
           <th>Departamento que Entrega</th>
           <th>Nombre del Oficial</th>
           <th>Zona de Recuperación</th>
           <th>N° IPH</th>
           <th>Nombre Quien Recibe en Depósito Vehicular Autorizado</th>
           <th>Agencia que Lleva el Asunto</th>
           <th>Clasificación Juridíca de los hechos (Robo,Accidente,Etc.)</th>
           <th>N° NUC</th>
           <th>Nombre del MP</th>
           <th>Resolución (Sentido)</th>
           <th>Fecha de Notificación al Propietario</th>
           <th>Fecha de Inicio de Termino</th>
           <th>Fecha de Conclusion de Termino</th>
           <th>Status</th>
           <th>Nombre Quien Ordena Salida</th>
           <th>N° de Oficio con la que se Ordena</th>
           <th>Departamento</th>
           <th>Fecha de Solicitud de Validación</th>
           <th>Fecha Respuesta</th>
           <th>Nombre quien Valida</th>
           <th>Fecha el Acuerdo</th>
           <th>Observaciones</th>
         </tr>
        </thead>
        <tbody>
          <tr>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          </tr>
          <tr>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          </tr>
          <tr>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          <td style="width:100px;background-color:#fff;color:#000000">Hola</td>
          </tr>
        </tbody>
    </table>
                <!-- <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h2 style="color:#37474f" class="text-center"><b>Reporte Fiscalía</b></h2>

                            
                        </div>
                        <div class="ibox-content">
                        <div class="table-responsive">
                        <table class="table table-striped  table-hover">
        <thead>
         <tr style="height: 40px;width: auto;">
             <th style="width:100px;"> <img src="images/logoFiscalia.png" style="height: 50px;"/>  </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th colspan="8"style="background-color: #757575;color: #fff;" class="text-center">CONTROL DE INGRESOS, SALIDAS Y STATUS EN C-5</th>
             <th  style="background-color: black;"></th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
             <th  style="background-color: black;">    </th>
          
         </tr>
         <tr style="background-color: red;color: #fff">
           <th>Ciudad</th>
           <th>Fecha de Ingreso al Depósito Vehícular Autorizado</th>
           <th>Fecha de Salida del Depósito Vehícular Autorizado</th>
           <th>Marca</th>
           <th>Tipo</th>
           <th>Línea</th>
           <th>Modelo</th>
           <th>Color</th>
           <th>Serie y/o Motor Completa</th>  
           <th>Placas</th>
           <th>Clasificación Juridíca (Objeto,Producto,Instrumento del Delito/Relacionado con los Hechos,Lugar de la Comision/lugar del hallazgo</th>
           <th>N° Inventario Agente</th>
           <th>N° Inventario del Depósito Vehicular Autorizado</th>
           <th>Reporte Fotográfico</th>
           <th>¿Ingreso en Grua?</th>
           <th>Motivo de Ingreso</th>
           <th>Departamento que Entrega</th>
           <th>Nombre del Oficial</th>
           <th>Zona de Recuperación</th>
           <th>N° IPH</th>
           <th>Nombre Quien Recibe en Depósito Vehicular Autorizado</th>
           <th>Agencia que Lleva el Asunto</th>
           <th>Clasificación Juridíca de los hechos (Robo,Accidente,Etc.)</th>
           <th>N° NUC</th>
           <th>Nombre del MP</th>
           <th>Resolución (Sentido)</th>
           <th>Fecha de Notificación al Propietario</th>
           <th>Fecha de Inicio de Termino</th>
           <th>Fecha de Conclusion de Termino</th>
           <th>Status</th>
           <th>Nombre Quien Ordena Salida</th>
           <th>N° de Oficio con la que se Ordena</th>
           <th>Departamento</th>
           <th>Fecha de Solicitud de Validación</th>
           <th>Fecha Respuesta</th>
           <th>Nombre quien Valida</th>
           <th>Fecha el Acuerdo</th>
           <th>Observaciones</th>
         </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    </div>              
                        </div>
                    </div>
                </div> -->
            </div>
                </div>

        </div>
</div>
<div class="modal inmodal" id="usuario" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fas fa-users modal-icon"></i>
                                            <h4 class="modal-title">Registrar Usuario</h4>
                                           
                                        </div>
                                        <div class="modal-body">
                                        
                                        <form class="form-horizontal" method="POST" action="RegistrarUsuarios.php">
                                            <div class="row">
                                                <div class="col-lg-12 b-r">
                                                    
                                                        <div class="form-group"><label>Nombre</label> <input type="text" placeholder="Nombre" class="form-control" id="Nombre" name="Nombre" required=""maxlength="100"></div>
                                                        
                                                        
                                                        <div class="form-group"><label>Correo</label> <input type="email"  class="form-control" id="Correo" name="Correo" required="" ></div>
                                                        <div class="form-group"><label>Contraseña</label> <input type="password"  class="form-control" id="Contrasena" name="Contrasena" required="" ></div>
                                                        
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>   
                            
                            <div class="modal inmodal" id="EditarUsuario" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fas fa-users modal-icon"></i>
                                            <h4 class="modal-title">Editar Usuario</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="post" action="EditarUsuario.php">
                                        <div class="fetched-data"></div> 
                                        
                                        
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                         
                                    </div>
                                    </form>
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
    <script src="js/plugins/footable/footable.all.min.js"></script>
    <script src="js/alertifyjs/alertify.js"></script>
    <script src="js/alertifyjs/alertify.min.js"></script>
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#EditarUsuario').on('show.bs.modal', function (e) {

                var rowid = $(e.relatedTarget).data('id');
                
                $.ajax({
                    type : 'post',
                    url : 'CargaModalUsuario.php', 
                    data :  'rowid='+ rowid, //Pass $id
                    success : function(data){
                    
                    $('.fetched-data').html(data);

                
                    }
                });
            });
        });
    </script>
     <script type="text/javascript">
        var tableToExcel = (function () {
            var uri = 'data:application/vnd.ms-excel;base64,'
                , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
                , base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) }
                , format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) }
            return function (table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML }
                window.location.href = uri + base64(format(template, ctx))
            }
        })()
    </script>
    
</body>

</html>
