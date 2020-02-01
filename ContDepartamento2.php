<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from departamento2 ORDER BY Zona ASC");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_departamento2']."'>";
            echo "<td><b>" . $row['id_departamento2'] .  "</b></td>"; 
            echo "<td><b>" . $row['Zona'] .  "</b></td>"; 
            
            echo "<td>
                         
            <a data-target='#EditarDepartamento2' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_departamento2']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletedepartamento2(".$row['id_departamento2'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletedepartamento2(id_departamento2) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este Departamento 2?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarDepartamento2.php',
           data:{delete_id:id_departamento2},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>