<?php 
require('conec.php');


$idcolor= $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM colores WHERE id_color ='$idcolor'");



 ?>