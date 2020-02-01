<?php

require('conec.php');

if($_POST['rowid']) {
    $id_marca = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT I.id_marca,I.NMarca FROM marcas I  where I.id_marca ='$id_marca'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_marca'];
    $nombre=$row['NMarca'];
    
   
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_marca' name='id_marca' required=''   value='".$id."'>
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
