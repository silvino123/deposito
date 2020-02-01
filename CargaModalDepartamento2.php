<?php

require('conec.php');

if($_POST['rowid']) {
    $id_dep2 = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT I.id_departamento2,I.Zona FROM departamento2 I  where I.id_departamento2 ='$id_dep2'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_departamento2'];
    $nombre=$row['Zona'];
    
   
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_departamento2' name='id_departamento2' required=''   value='".$id."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Nombre</label>
                <input type='text' class='form-control' id='Nombre'  name='Nombre' required='' value='".$nombre."'>
            </div>
          
            
            ";
            
                                                                                                                
           
    
       echo" </div>
        </div> ";
     
   
 }
 mysqli_close($con);
?>
