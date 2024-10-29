<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_POST['modificar'])){
$sql=$DB_con->prepare("UPDATE sexo SET sexo=:sexo WHERE id_sexo=:id_sexo");
$sql->bindParam(':sexo',$_POST['sexo']);
$sql->bindParam(':id_sexo',$_GET['id_sexo']);
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
header('location: sexo.php');
?>
<!-- FIN PROCESO PARA ACTUALIZAR -->