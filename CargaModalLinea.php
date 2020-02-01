<?php

require('conec.php');

if($_POST['rowid']) {
    $id_linea = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT C.id_linea,C.Linea from lineas C   where C.id_linea ='$id_linea'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_linea'];
    $nombre=$row['Linea'];
   
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_linea' name='id_linea' required=''   value='".$id."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Año</label>
                <input type='number' class='form-control' id='Nombre'  name='Nombre' required='' value='".$nombre."'>
            </div>
          
            
            ";
            
                                                                                                                
           
    
       echo" </div>
        </div> ";
     
   
 }
 mysqli_close($con);
?>
