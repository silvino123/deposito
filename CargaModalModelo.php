<?php

require('conec.php');

if($_POST['rowid']) {
    $id_modelo = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT C.id_modelo,C.MNombre,C.Marca,S.NMarca from modelos C  inner join marcas S on C.Marca = S.id_marca  where C.id_modelo ='$id_modelo'");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_modelo'];
    $nombre=$row['MNombre'];
    $marca=$row['Marca'];
    $nmarca=$row['NMarca'];
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_modelo' name='id_modelo' required=''   value='".$id."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Nombre</label>
                <input type='text' class='form-control' id='Nombre'  name='Nombre' required='' value='".$nombre."'>
            </div>
          
           
            <div class='form-group'>
                <label>Marca</label>
                <select class='form-control' id='Marca' name='Marca' required=''>
                    <option value='".$marca."' selected=''>".$nmarca."</option>";
                    $rs = mysqli_query($con, "SELECT * FROM marcas ORDER BY NMarca ASC");

                    while($row3 = mysqli_fetch_array($rs)){
                     
                      echo"<option value=".$row3['id_marca'] ."  >". $row3['NMarca'] ."</option>";
                    } 
               echo" </select>
            </div>   
            ";
            
                                                                                                                
           
    
       echo" </div>
        </div> ";
     
   
 }
 mysqli_close($con);
?>
