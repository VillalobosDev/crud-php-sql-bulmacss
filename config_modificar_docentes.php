<!-- proceso para actualizar -->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";


if(isset($_GET['modificar'])){
$sql = $DB_con->prepare("UPDATE docentes SET cedula=:cedula, nombres=:nombres, apellidos=:apellidos, fecha_nacimiento=:fecha_nacimiento, edad=:edad, id_sexo=:id_sexo, correo=:correo, telefono=:telefono WHERE id_docentes=:id_docentes");
$sql->bindParam(':cedula', $_GET['cedula']);
$sql->bindParam(':nombres', $_GET['nombres']);
$sql->bindParam(':apellidos', $_GET['apellidos']);
$sql->bindParam(':fecha_nacimiento', $_GET['fecha_nacimiento']);
$sql->bindParam(':edad', $_GET['edad']);
$sql->bindParam(':id_sexo', $_GET['id_sexo']);
$sql->bindParam(':correo', $_GET['correo']);
$sql->bindParam(':telefono', $_GET['telefono']);
$sql->bindParam(':id_docentes', $_GET['id_docentes']);
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
header('location: docentes.php');
?>
<!-- fin proceso para actualizar   -->
