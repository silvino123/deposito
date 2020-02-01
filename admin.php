
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
    <link href="css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
</head>

<body style="overflow-x:scroll">
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
                              
                                <li><a  data-toggle="modal" data-target="#myModal7"><i class="fa fa-sync-alt"></i> Actualización Estatus</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#Entradas"> <i class="fas fa-hand-holding-usd"></i> Entradas y Salidas</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                   
        </div>
        <!-- tabla -->
        <div class="wrapper wrapper-content animated fadeInRight" style="width:100%">
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
                        <th style="background-color:#37474f;color:#fff" >    Fecha </th>
                        <th style="background-color:#37474f;color:#fff">Ubicación</th>
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
                        <th style="background-color:#37474f;color:#fff">Inventario DVA</th>
                        <th style="background-color:#37474f;color:#fff">Marca</th>
                        <th style="background-color:#37474f;color:#fff">Línea</th>
                        <th style="background-color:#37474f;color:#fff">Modelo</th>
                        <th style="background-color:#37474f;color:#fff">Placas </th>
                        <th style="background-color:#37474f;color:#fff">Serie</th>
                        <th style="background-color:#37474f;color:#fff">Color</th>
                        <th style="background-color:#37474f;color:#fff">Llaves</th>
                        <th style="background-color:#37474f;color:#fff">Fotografia</th>
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
                        <th style="background-color:#37474f;color:#fff" >Editar</th>
                        <th style="background-color:#37474f;color:#fff" >Eliminar</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php  
                           require('ContBitacora.php');
                                ?>
                        
                    
                   
                    </tbody>
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
                                           
                                           <img alt="image" src="images/logo.jpg" style="width: 100px; height:80px;margin-left:-700px;"/>
                                            <h5 class="modal-title" style="color:#37474f">Bitácora Depósito Vehicular Autorizado   </h5>
                                            
                                        </div>
                                        <div class="modal-body" style="background-color:#e0e0e0">
                                        <form class="form-horizontal" method="POST" action="RegistrarBitacora.php">
                                        <div class='row'>
                                            <h3 style="color:red">Información de Entrada</h3>
    <div class=' col-lg-3' >
    <label for='sel1'style="color:#37474f">Operador</label>
    <select class='form-control' id='Operador' name='Operador' required=''>
        <option >Seleccionar</option>
        <?php 
                               require('conec.php');

                         $rs = mysqli_query($con, "SELECT * FROM operadores");

   while($row = mysqli_fetch_array($rs)){
     
     echo"<option value=".$row['id_operador'] ."  >". $row['ONombre'] ."</option>";
                         
    }

  mysqli_close($con);
 ?>      
        
    </select>
</div>
    <div class=' col-lg-3'>
    <label for='sel1'style="color:#37474f">Autoridad que Entrega</label>
        <input type='text' class='form-control' id='AutoridadEntrega' name='AutoridadEntrega' required='' >
    </div>
    <div class=' col-lg-3'>
    <label for='sel1' style="color:#37474f">Departamento</label>
    <select class='form-control' id='Departamento' name='Departamento' required=''>
        <option >Seleccionar</option>
        <?php 
                               require('conec.php');

                         $xs = mysqli_query($con, "SELECT * FROM departamento");

   while($rows = mysqli_fetch_array($xs)){
     
     echo"<option value=".$rows['id_departamento'] ."  >". $rows['DNombre'] ."</option>";
                         
    }

  mysqli_close($con);
 ?>      
        
    </select>
    </div>
    <div class=' col-lg-3'>
    <label for='sel1' style="color:#37474f">Motivo</label>
    <select class='form-control' id='Motivo' name='Motivo' required=''>
        <option >Seleccionar</option>
        <?php 
                               require('conec.php');

                         $xs = mysqli_query($con, "SELECT * FROM motivo");

   while($rows = mysqli_fetch_array($xs)){
     
     echo"<option value=".$rows['id_motivo'] ."  >". $rows['NMotivo'] ."</option>";
                         
    }

  mysqli_close($con);
 ?>      
        
    </select>
</div>   
    
    </div>
    <!-- final row -->
    <!-- row2 -->
    <div class='row'>
                                     
    <div class=' col-lg-3' >
    <label for='sel1' style="color:#37474f">Zona o Agencia</label>
    <select class='form-control' id='Departamento2' name='Departamento2' required=''>
        <option >Seleccionar</option>
        <?php 
                               require('conec.php');

                         $rss = mysqli_query($con, "SELECT * FROM departamento2");

   while($row2 = mysqli_fetch_array($rss)){
     
     echo"<option value=".$row2['id_departamento2'] ."  >". $row2['Zona'] ."</option>";
                         
    }

  mysqli_close($con);
 ?>      
        
    </select>
</div>
    <div class=' col-lg-3'>
    <label for='sel1' style="color:#37474f">Origen</label>
        <input type='text' class='form-control' id='Origen' name='Origen' required='' >
    </div>
    
    <div class=' col-lg-3'>
    <label for='sel1' style="color:#37474f">Estatus</label>
    <select class='form-control' id='Estatus' name='Estatus' required=''>
        <option >Seleccionar</option>
        <option value='Patio'>Patio</option>
        <option value='Liberado'>Liberado</option>
        
    </select>
</div>   
<div class=' col-lg-3'>
    <label for='sel1' style="color:#37474f">Inventario Agente</label>
        <input type='number' class='form-control' id='InventarioAgente' name='InventarioAgente' required='' >
    </div>
    </div>

    <br>
    <!-- row3 -->
    <div class='row'>
                                     
                                     <div class=' col-lg-3' >
                                     <label for='sel1' style="color:#37474f">Inventario DVA</label>
                                     
        <input type='number' class='form-control' id='InventarioDVA' name='InventarioDVA'  >
                                 </div>
                                     <div class=' col-lg-3'>
                                     <label for='sel1' style="color:#37474f"># IPH</label>
                                         <input type='number' class='form-control' id='IPH' name='IPH' required='' >
                                     </div>
                                     
                                     <div class=' col-lg-3'>
                                     
                                 </div>   
                                 <div class=' col-lg-3'>
                                     
                                     </div>
                                     </div>
    <!-- Informacion del vehiculo -->
    <div class='row'>
                                            <h3 style="color:red">Información del Vehículo</h3>
    <div class=' col-lg-3' >
    <label for='sel1' style="color:#37474f">Marca</label>
    <select class='form-control' id='Marca' name='Marca' required='' onchange="CargarLineas(this.value);">>
        <option >Seleccionar</option>
        <?php 
                               require('conec.php');

                         $rs = mysqli_query($con, "SELECT * FROM marcas ORDER BY NMarca ASC");

   while($row3 = mysqli_fetch_array($rs)){
    
     echo"<option value=".$row3['id_marca'] ."  >". $row3['NMarca'] ."</option>";
   } 
   echo" </select>";
echo"</div>
    <div class=' col-lg-3'>
    <label for='sel1' style='color:#37474f'>Tipo</label>
    <select class='form-control' id='Linea' name='Linea' required=''>
        <option >Seleccionar</option>";
       
                               

                        
   echo" </select>";
   
  mysqli_close($con);
 ?>      
        
    
    </div>
    <div class=' col-lg-2'>
    <label for='sel1' style="color:#37474f">Modelo</label>
    <select class='form-control' id='Modelo' name='Modelo' required=''>
        <option >Seleccionar</option>
        <?php 
                               require('conec.php');

                         $qsr = mysqli_query($con, "SELECT * FROM lineas ORDER BY Linea DESC");

   while($row2 = mysqli_fetch_array($qsr)){
     
     echo"<option value=".$row2['id_linea'] ."  >". $row2['Linea'] ."</option>";
                         
    }

  mysqli_close($con);
 ?>      
        
    </select>
    </div>
    <div class=' col-lg-2'>
    <label for='sel1' style="color:#37474f">Color</label>
    <select class='form-control' id='Color' name='Color' required=''>
        <option >Seleccionar</option>
        <?php 
                               require('conec.php');

                         $qsr = mysqli_query($con, "SELECT * FROM colores ORDER BY Color ASC");

   while($row6 = mysqli_fetch_array($qsr)){
     
     echo"<option value=".$row6['id_color'] ."  >". $row6['Color'] ."</option>";
                         
    }

  mysqli_close($con);
 ?>      
        
    </select>
</div>   
<div class=' col-lg-2'>
    <label for='sel1' style="color:#37474f">Placas</label>
        <input type='text' class='form-control' id='Placas' name='Placas' required=''>
    </div>
    </div>
    <!-- final row -->
    <!-- row2 -->
    <div class='row'>
                                     
    <div class=' col-lg-3' >
    <label for='sel1' style="color:#37474f">Serie</label>
    <input type='text' class='form-control' id='Serie' name='Serie' required='' >
</div>
    <div class=' col-md-2'>
    <label for='sel1' style="color:#37474f">Llaves</label>
    <select class='form-control' id='Llaves' name='Llaves' required='' onchange="seleccionado()">
    <option value="0" >Seleccionar</option>
        <option value='Si'>Si</option>
        <option value='No'>No</option>
        
    </select>
    
    </div>
    <div class=' col-lg-2 ocultar' style="display:none" id="opc1" >
    <label for='sel1' style="color:#37474f">Ubicacion llaves</label>
    <input type='text' class='form-control' id='Ubicacionllaves' name='Ubicacionllaves'  >
</div>
    <div class=' col-lg-3'>
    <label for='sel1' style="color:#37474f">Tipo Vehículo</label>
    <select class='form-control' id='TipoVehiculo' name='TipoVehiculo' required=''>
        <option >Seleccionar</option>
        <option value='Remolque'>Remolque</option>
        <option value='Vagoneta'>Vagoneta</option>
        <option value='Sedan'>Sedan</option>
        <option value='Tractocamion'>Tractocamion</option>
        <option value='Motocicleta'>Motocicleta</option>
        <option value='Bicicleta'>Bicicleta</option>
        <option value='Pick up'>Pick up</option>
        <option value='Tonelada'>Tonelada</option>
        
    </select>
</div>   
<div class=' col-lg-3' >
    <label for='sel1' style="color:#37474f">Observaciones</label>
    <textArea type='text' class='form-control' id='Observaciones' name='Observaciones'  ></textArea>
</div>
<div class=' col-lg-4' >
    <label for='sel1' style="color:#37474f">Fotografia</label>
    <input type='file' class='form-control' id='Fotografia' name='Fotografia' >
</div>
<div class=' col-lg-3' >
    <label for='sel1' style="color:#37474f">Ubicacion Deposito</label>
    <input type='text' class='form-control' id='Ubicacion' name='Ubicacion'  >
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
                            
                            <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                           <img alt="image" src="images/logo.jpg" style="width: 100px; height:60px;margin-left:-700px;"/>
                                            <h4 class="modal-title" style="color:#37474f">Buscador de Vehículos</h4>
                                         
                                        </div>
                                        <div class="modal-body" style="background-color:#eeeeee">
                                        <div class='row'>
                                            <h3 style="color:#000000">Buscar por</h3>
    <div class=' col-lg-3' >
    
    <input class="w3-radio"  type="radio" required name="Q2" value="Placas" id="Q2"> <label style="color:#37474f">Placas </label>
    <div class=' col-md-2' style="display:none" id="opc2" >
  
  <input class="w3-radio"  type="text"  name="Placas"  id="Placas" placeholder="Ingrese Placas" class="form-control" > 
</div>
</div>

    <div class=' col-lg-3'>
   
    <input class="w3-radio"  type="radio" required name="Q2" value="Fecha" id="Q2"> <label style="color:#37474f">Fecha </label>
    <div class=' col-lg-2' style="display:none" id="opc3" >
  
  <input class="w3-radio"  type="date"  name="Fecha"  id="Fecha" > 
</div>
</div>
    
    <div class=' col-lg-3'>
    <input class="w3-radio"  type="radio" required name="Q2" value="Serie" id="Q2"> <label style="color:#37474f">Serie </label>
    <div class=' col-md-2' style="display:none" id="opc4" >
  
  <input class="w3-radio"  type="text"  name="Serie"  id="Serie" placeholder="Ingrese Serie" > 
</div>
    </div>
    <div class=' col-lg-2'>
    <input class="w3-radio"  type="radio" required name="Q2" value="Automovil" id="Q2"> <label style="color:#37474f">Automovil </label>
    <div class=' col-md-2' style="display:none" id="opc5" >
  
  <input class="w3-radio"  type="text"  name="Automovil"  id="Automovil" placeholder="Ingrese Automovil" > 
</div>
</div>   
<div class=' col-lg-3'>
<input class="w3-radio"  type="radio" required name="Q2" value="Inventario" id="Q2"> <label style="color:#37474f">Inventario </label>
<div class=' col-md-2' style="display:none" id="opc6" >
  
  <input class="w3-radio"  type="text"  name="Inventario"  id="Inventario" placeholder="Ingrese Inventario" > 
</div>
</div>
<div class=' col-lg-3' >
  
    <input class="w3-radio"  type="radio" required name="Q2" value="Motivo" id="Q2"> <label style="color:#37474f">Motivo </label>
    <div class=' col-md-2' style="display:none" id="opc7" >
  
  <input class="w3-radio"  type="text"  name="Motivo"  id="Motivo" placeholder="Ingrese Motivo" > 
</div>
</div>
    </div>
    <!-- row2 -->
    <div class='row'>
                                        
    
    <div class=' col-lg-3'>
   
    
    </div>
    <div class=' col-lg-3'>
   
    
    </div>
    <div class=' col-lg-2'>
   
    
    </div>
    <div class=' col-lg-4'>
    </div>
<div class=' col-lg-3'>
<button class="btn btn-primary dim btn-large-dim" onclick="buscar();" type="button" style="width: 140px;font-size: 20px;height: 40px"><i class="fa fa-search"></i>&nbsp;Buscar</button> 
    </div>
    </div>

   
      <div class="row">
      <div class=' col-lg-8'>
      <table class="table table-striped"  >
                                <thead>
                                <tr style="background-color:#37474f;color:#fff">
                                    <th>Inventario</th>
                                    <th>Fecha</th>
                                    <th>Estatus</th>
                                    <th>Marca</th>
                                    <th>Tipo</th>
                                    <th>Modelo</th>
                                    <th>Placas</th>
                                    <th>Serie</th>
                                    <th>Motivo</th>
                                </tr>
                                </thead>
                                <tbody id="buscar" >
                                
                                </tbody>
                            </table>
                                                                  
                                           </div>
                                           <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Grafico de Motivos</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <!-- <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li> -->
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="flot-chart">
                                <div class="flot-chart-pie-content" id="flot-pie-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                                           </div>
                                        </div>
                                        <div class="modal-footer">
                                          
                                            <!-- <button type="button" class="btn btn-primary">Registrar</button> -->
                                        </div>
                                    
                                </div>
                            </div> 
                        </div>


                            
                            <div class="modal inmodal fade" id="myModal7" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                           <img alt="image" src="images/logo.jpg" style="width: 100px; height:60px;margin-left:-700px;"/>
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
                            <div class="modal inmodal fade" id="Entradas" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                           <img alt="image" src="images/logo.jpg" style="width: 100px; height:60px;margin-left:-700px;"/>
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

                             <div class="modal inmodal fade" id="EditarBitacora" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                           
                                            <h4 class="modal-title">Editar Datos Bitacora</h4>
                                            
                                        </div>
                                        <div class="modal-body" style="background-color:#e0e0e0">
                                        <form class="form-horizontal" method="post" action="EditarBit.php">
                                        <div class="fetched-data"></div> 
                                        
                                        
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary">Editar</button>
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
<!-- Flot demo data -->
<script src="js/demo/flot-demo.js"></script>
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
    <!-- blueimp gallery -->
    <script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

   
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
        $(function() {

var data = [{
    label: "Motivo 1",
    data: 21,
    color: "#d3d3d3",
}, {
    label: "Motivo 2",
    data: 3,
    color: "#bababa",
}, {
    label: "Motivo 3",
    data: 15,
    color: "#37474f",
}, {
    label: "Motivo 4",
    data: 52,
    color: "#ffb74d",
}];

var plotObj = $.plot($("#flot-pie-chart"), data, {
    series: {
        pie: {
            show: true
        }
    },
    grid: {
        hoverable: true
    },
    tooltip: true,
    tooltipOpts: {
        content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
        shifts: {
            x: 20,
            y: 0
        },
        defaultTheme: false
    }
});

});
    </script>
     <script type="text/javascript">
        $(document).ready(function(){
            $('#EditarBitacora').on('show.bs.modal', function (e) {

                var rowid = $(e.relatedTarget).data('id');
                
                $.ajax({
                    type : 'post',
                    url : 'CargaModalBit.php', 
                    data :  'rowid='+ rowid, //Pass $id
                    success : function(data){
                    
                    $('.fetched-data').html(data);

                
                    }
                });
            });
        });
    </script>
    <script>
function CargarLineas(val)
{
   // $('#Marca').html("espera un momento");    
    $.ajax({
        type: "POST",
        url: 'llenarLinea.php',
        data: 'idmarca='+val,
        success: function(resp){
            $('#Linea').html(resp);
            //$('#Marca').html("");
        }
    });
}
</script>
<script>
function seleccionado(){
    var opt = $('#Llaves').val();
    
   // alert(opt);
    if(opt=="Si"){
        $('#opc1').show();
       
    }else{
        
        
            $('#opc1').hide();
       
    }
}
</script>
<script>
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="Placas"){
            $("#opc2").show();
            $("#opc3").hide();
            $("#opc4").hide();
            $("#opc5").hide();
            $("#opc6").hide();
            $("#opc7").hide();
        } 
        if(valor =="Fecha"){
            $("#opc2").hide();
            $("#opc3").show();
            $("#opc4").hide();
            $("#opc5").hide();
            $("#opc6").hide();
            $("#opc7").hide();
        }
        if(valor =="Serie"){
            $("#opc2").hide();
            $("#opc3").hide();
            $("#opc4").show();
            $("#opc5").hide();
            $("#opc6").hide();
            $("#opc7").hide();
        }
        if(valor =="Automovil"){
            $("#opc2").hide();
            $("#opc3").hide();
            $("#opc4").hide();
            $("#opc5").show();
            $("#opc6").hide();
            $("#opc7").hide();
        }
        if(valor =="Inventario"){
            $("#opc2").hide();
            $("#opc3").hide();
            $("#opc4").hide();
            $("#opc5").hide();
            $("#opc6").show();
            $("#opc7").hide();
        }
        if(valor =="Motivo"){
            $("#opc2").hide();
            $("#opc3").hide();
            $("#opc4").hide();
            $("#opc5").hide();
            $("#opc6").hide();
            $("#opc7").show();
        }
    });
});
</script>
<script>
    function buscar()
{
    var Placas = $("#Placas").val();
    var Fecha = $("#Fecha").val();
    var Serie = $("#Serie").val();
    var Automovil = $("#Automovil").val();
    var Inventario = $("#Inventario").val();
    var Motivo = $("#Motivo").val();
   
    $.ajax({
        type: "POST",
        dataType: 'html',
        url: "buscar.php",
        data: "placa="+Placas+"&fecha="+Fecha+"&serie="+Serie+"&automovil="+Automovil+"&inventario="+Inventario+"&motivo="+Motivo,
        success: function(resp){
            $('#buscar').html(resp);
            //Limpiar();
            //Cargar();
        }
    });
}   
    </script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:34 GMT -->
</html>
