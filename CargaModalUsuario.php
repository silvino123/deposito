<?php

require('conec.php');

if($_POST['rowid']) {
    $id_usuario = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT I.id_usuario,I.Nombre,I.Correo,I.Contrasena,I.Tipo FROM usuarios I  where I.id_usuario ='$id_usuario'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_usuario'];
    $nombre=$row['Nombre'];
    $correo=$row['Correo'];
    $contrasena=$row['Contrasena'];
    $tipo=$row['Tipo'];
   
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_usuario' name='id_usuario' required=''   value='".$id."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Nombre</label>
                <input type='text' class='form-control' id='Nombre'  name='Nombre' required='' value='".$nombre."'>
            </div>
          
            <div class='form-group'>
                <label for='sel1'>Correo</label>
                <input type='email' class='form-control' id='Correo' name='Correo' required='' value='".$correo."'>
            </div>
            
            <div class='form-group'>
                <label for='sel1'>Contraseña</label>
                <input type='text' class='form-control' id='Contrasena' name='Contrasena' required='' value='".$contrasena."'>
            </div>
            <div class='form-group'>
                <label>Tipo de Usuario</label>
                <select class='form-control' id='tipo' name='tipo' required=''>
                    <option value='".$tipo."' selected=''>".$tipo."</option>
                    <option value='Administrador'>Administrador</option>
                    <option value='Operador'>Operador</option>
                    <option value='Fiscalia'>Fiscalia</option>
                </select>
            </div>    
            
            ";
            
                                                                                                                
           
    
       echo" </div>
        </div> ";
     
   
 }
 mysqli_close($con);
?>
