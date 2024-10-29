<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";


  if(isset($_GET['id_estudiantes']))
  {
    
    $sql_delete = $DB_con->prepare('DELETE FROM estudiantes WHERE id_estudiantes =:id_estudiantes');
    $sql_delete->bindParam(':id_estudiantes',$_GET['id_estudiantes']);
    $sql_delete->execute();
    
        $_SESSION['successMSG'] = "¡ Atención: El Registro a sido Eliminado !";

     }
header('location: estudiantes.php');
?>
<!-- FIN PROCESO PARA ELIMINAR -->