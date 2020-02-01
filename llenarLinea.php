<?php 

require('conec.php');
if($_POST['idmarca']) {
   
$id=$_POST['idmarca'];



$consulta=mysqli_query($con,"SELECT * from modelos where Marca='$id'");
while($row = mysqli_fetch_array($consulta)){
    echo '<option value="' .$row["id_modelo"]. '">' .$row["MNombre"]. '</option>';
}
}
mysqli_close($con);


 ?>