<?php 
require('conec.php');


$iddep = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM departamento WHERE id_departamento ='$iddep'");



 ?>