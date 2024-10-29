<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_GET['id_materias']))
  {
    
    $sql_delete = $DB_con->prepare('DELETE FROM materias WHERE id_materias =:id_materias');
    $sql_delete->bindParam(':id_materias',$_GET['id_materias']);
    $sql_delete->execute();
    
       $_SESSION['successMSG'] ="El Registro se elimino";

     }
header('location: materias.php');
?>
<!-- FIN PROCESO PARA ELIMINAR -->