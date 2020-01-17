<?php 
require('conec.php');


$id = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM operadores WHERE id_operador ='$id'");



 ?>