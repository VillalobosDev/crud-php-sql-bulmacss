<!-- PROCESO PARA ELIMINAR -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_POST['modificar'])){
$sql=$DB_con->prepare("UPDATE materias SET materias=:materias, id_pnf=:id_pnf, id_trayectos=:id_trayectos WHERE id_materias=:id_materias");
$sql->bindParam(':materias',$_POST['materias']);
$sql->bindParam(':id_pnf',$_POST['id_pnf']);
$sql->bindParam(':id_trayectos',$_POST['id_trayectos']);
$sql->bindParam(':id_materias',$_GET['id_materias']);
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
header('location: materias.php');
?>
<!-- FIN PROCESO PARA ACTUALIZAR -->