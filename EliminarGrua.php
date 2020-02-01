<?php 
require('conec.php');


$idgrua= $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM grua WHERE id_grua ='$idgrua'");



 ?>