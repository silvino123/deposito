<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from operadores");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_operador']."'>";
            echo "<td><b>" . $row['id_operador'] .  "</b></td>"; 
            echo "<td><b>" . $row['Nombre'] .  "</b></td>"; 
            
            echo "<td>
                         
            <a data-target='#EditarOperador' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_operador']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deleteoperador(".$row['id_operador'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deleteoperador(id_operador) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este Operador?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarOperador.php',
           data:{delete_id:id_operador},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>