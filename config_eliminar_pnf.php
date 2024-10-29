<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_GET['id_pnf']))
  {
    
    $sql_delete = $DB_con->prepare('DELETE FROM pnf WHERE id_pnf =:id_pnf');
    $sql_delete->bindParam(':id_pnf',$_GET['id_pnf']);
    $sql_delete->execute();
    
       $_SESSION['successMSG'] ="El Registro se elimino";

     }
header('location: pnf.php');
?>
<!-- FIN PROCESO PARA ELIMINAR -->