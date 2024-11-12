<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_POST['modificar'])){
$sql=$DB_con->prepare("UPDATE trayectos SET trayectos=:trayectos WHERE id_trayectos=:id_trayectos");
$sql->bindParam(':trayectos',$_POST['trayectos']);
$sql->bindParam(':id_trayectos',$_GET['id_trayectos']);
$sql->execute();
if($sql)
  {

    $_SESSION['successMSG'] = "Registro actualizado correctamente";

     }

     else

      {

        $_SESSION['$errMSG'] = "El registro no se pudo actualizar";

     }
  }
header('location: trayectos.php');
?>
<!-- FIN PROCESO PARA ACTUALIZAR -->