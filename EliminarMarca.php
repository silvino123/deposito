<?php 
require('conec.php');


$idmarca = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM marcas WHERE id_marca ='$idmarca'");



 ?>