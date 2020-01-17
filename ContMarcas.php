<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from marcas");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_marca']."'>";
            echo "<td><b>" . $row['id_marca'] .  "</b></td>"; 
            echo "<td><b>" . $row['Nombre'] .  "</b></td>"; 
            
            echo "<td>
                         
            <a data-target='#EditarMarca' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_marca']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletemarca(".$row['id_marca'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletemarca(id_marca) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar esta Marca?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarMarca.php',
           data:{delete_id:id_marca},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>