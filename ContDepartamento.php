<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from departamento ORDER BY DNombre ASC");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_departamento']."'>";
            echo "<td><b>" . $row['id_departamento'] .  "</b></td>"; 
            echo "<td><b>" . $row['DNombre'] .  "</b></td>"; 
            
            echo "<td>
                         
            <a data-target='#EditarDepartamento' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_departamento']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletedepartamento(".$row['id_departamento'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletedepartamento(id_departamento) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este Departamento?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarDepartamento.php',
           data:{delete_id:id_departamento},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>