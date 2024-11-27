<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_GET['id_nivel']))
  {
    
    $sql_delete = $DB_con->prepare('DELETE FROM nivel WHERE id_nivel =:id_nivel');
    $sql_delete->bindParam(':id_nivel',$_GET['id_nivel']);
    $sql_delete->execute();
    
       $_SESSION['successMSG'] ="El Registro se elimino";

     }
header('location: nivel.php');
?>
<!-- FIN PROCESO PARA ELIMINAR -->