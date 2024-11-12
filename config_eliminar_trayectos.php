<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_GET['id_trayectos']))
  {
    
    $sql_delete = $DB_con->prepare('DELETE FROM trayectos WHERE id_trayectos =:id_trayectos');
    $sql_delete->bindParam(':id_trayectos',$_GET['id_trayectos']);
    $sql_delete->execute();
    
       $_SESSION['successMSG'] ="El Registro se elimino";

     }
header('location: trayectos.php');
?>
<!-- FIN PROCESO PARA ELIMINAR -->