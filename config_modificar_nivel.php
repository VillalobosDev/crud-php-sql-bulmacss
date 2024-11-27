<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_POST['modificar'])){
$sql=$DB_con->prepare("UPDATE nivel SET nivel=:nivel WHERE id_nivel=:id_nivel");
$sql->bindParam(':nivel',$_POST['nivel']);
$sql->bindParam(':id_nivel',$_GET['id_nivel']);
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
header('location: nivel.php');
?>
<!-- FIN PROCESO PARA ACTUALIZAR -->