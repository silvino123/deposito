<?php

require('conec.php');

if($_POST['rowid']) {
    $id_pension = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT I.id_pension,I.PNombre,I.Precio FROM pension I  where I.id_pension ='$id_pension'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_pension'];
    $nombre=$row['PNombre'];
    $precio=$row['Precio'];
   
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_pension' name='id_pension' required=''   value='".$id."'>
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
