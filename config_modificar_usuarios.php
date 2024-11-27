<!-- proceso para actualizar -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";


if(isset($_GET['modificar'])){
$sql = $DB_con->prepare("UPDATE usuario SET cedula=:cedula, nombres=:nombres, apellidos=:apellidos, correo=:correo, contrasena=:contrasena, id_nivel=:id_nivel WHERE id_usuario=:id_usuario");
$sql->bindParam(':cedula', $_GET['cedula']);
$sql->bindParam(':nombres', $_GET['nombres']);
$sql->bindParam(':apellidos', $_GET['apellidos']);
$sql->bindParam(':correo', $_GET['correo']);
$sql->bindParam(':contrasena', $_GET['contrasena']);
$sql->bindParam(':id_nivel', $_GET['id_nivel']);
$sql->execute();
if($sql)
  {

        $_SESSION['successMSG'] = "¡ Bien Hecho: Registro actualizado Correctamente !";

     }

     else

      {

        $_SESSION['errMSG'] = "¡ Ups Aviso: El Registro no se pudo actualizar !";

     }
  }
header('location: usuario.php');
?>
<!-- fin proceso para actualizar   -->
