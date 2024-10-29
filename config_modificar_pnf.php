<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_POST['modificar'])){
$sql=$DB_con->prepare("UPDATE pnf SET pnf=:pnf WHERE id_pnf=:id_pnf");
$sql->bindParam(':pnf',$_POST['pnf']);
$sql->bindParam(':id_pnf',$_GET['id_pnf']);
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
header('location: pnf.php');
?>
<!-- FIN PROCESO PARA ACTUALIZAR -->