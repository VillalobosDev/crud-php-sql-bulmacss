<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_GET['id_sexo']))
  {
    
    $sql_delete = $DB_con->prepare('DELETE FROM sexo WHERE id_sexo =:id_sexo');
    $sql_delete->bindParam(':id_sexo',$_GET['id_sexo']);
    $sql_delete->execute();
    
       $_SESSION['successMSG'] ="El Registro se elimino";

     }
header('location: sexo.php');
?>
<!-- FIN PROCESO PARA ELIMINAR -->