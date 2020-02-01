<?php 
require('conec.php');


$idlinea = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM Lineas WHERE id_linea ='$idlinea'");



 ?>