<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";


  if(isset($_GET['id_docentes']))
  {
    
    $sql_delete = $DB_con->prepare('DELETE FROM docentes WHERE id_docentes =:id_docentes');
    $sql_delete->bindParam(':id_docentes',$_GET['id_docentes']);
    $sql_delete->execute();
    
        $_SESSION['successMSG'] = "¡ Atención: El Registro a sido Eliminado !";

     }
header('location: docentes.php');
?>
<!-- FIN PROCESO PARA ELIMINAR -->