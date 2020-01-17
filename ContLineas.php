<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from lineas");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_linea']."'>";
            echo "<td><b>" . $row['id_linea'] .  "</b></td>"; 
            echo "<td><b>" . $row['Nombre'] .  "</b></td>"; 
            
            echo "<td>
                         
            <a data-target='#EditarLinea' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_linea']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletelinea(".$row['id_linea'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletelinea(id_linea) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar esta linea?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarLinea.php',
           data:{delete_id:id_linea},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>