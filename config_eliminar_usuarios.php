<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";


  if(isset($_GET['id_usuarios']))
  {
    
    $sql_delete = $DB_con->prepare('DELETE FROM usuarios WHERE id_usuarios =:id_usuarios');
    $sql_delete->bindParam(':id_usuarios',$_GET['id_usuarios']);
    $sql_delete->execute();
    
        $_SESSION['successMSG'] = "¡ Atención: El Registro a sido Eliminado !";

     }
header('location: estudiantes.php');
?>
<!-- FIN PROCESO PARA ELIMINAR -->