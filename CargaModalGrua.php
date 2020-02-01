<?php

require('conec.php');

if($_POST['rowid']) {
    $id_grua = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT I.id_grua,I.GNombre,I.Precio FROM grua I  where I.id_grua ='$id_grua'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_grua'];
    $nombre=$row['GNombre'];
    $precio=$row['Precio'];
   
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_grua' name='id_grua' required=''   value='".$id."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Nombre</label>
                <input type='text' class='form-control' id='Nombre'  name='Nombre' required='' value='".$nombre."'>
            </div>
            <div class='form-group'>
            <label for='sel1'>Precio</label>
            <input type='number' class='form-control' id='Precio' step='0.01' name='Precio' required='' value='".$precio."'>
        </div>
            
            ";
            
                                                                                                                
           
    
       echo" </div>
        </div> ";
     
   
 }
 mysqli_close($con);
?>
