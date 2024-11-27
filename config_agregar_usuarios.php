<!-- proceso para registrar-->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";


if(isset($_POST['agregar'])){
  $sql = "SELECT cedula FROM usuarios WHERE cedula = :cedula LIMIT 1"; //Creamos la select
  $check = $DB_con->prepare($sql); //Preparamos la SELECT, de ésta manera evitamos SQL Injection
  $check->bindParam(':cedula', $_POST['cedula']);//Substituimos las variables de la SELECT
  $check->execute();//Ejecutamos la consulta
  $contador = $check -> rowCount();//Esta función devuelve el número de resultados que ha devuelto la SELECT
  if ($contador > 0) {
  $check->closeCursor();
    
      $_SESSION['errMSG'] = "¡ Ups Aviso: El Registro ya se Encuentra Insertado !";
      

    }
    else
    {

      $sql=$DB_con->prepare("INSERT INTO usuarios (cedula, nombres, apellidos, correo, contrasena, id_nivel) 
      VALUES (:cedula, :nombres, :apellidos, :correo, :contrasena, :id_nivel)");
      $sql->bindParam(':cedula', $_POST['cedula']);
      $sql->bindParam(':nombres', $_POST['nombres']);
      $sql->bindParam(':apellidos', $_POST['apellidos']);
      $sql->bindParam(':correo', $_POST['correo']);
      $sql->bindParam(':contrasena', $_POST['contrasena']);
      $sql->bindParam(':id_nivel', $_POST['id_nivel']);
      $sql->execute();

      $_SESSION['successMSG'] ="¡ Bien Hecho: Registro Insertado Correctamente !";

        }
  }

header('location: estudiantes.php');
?>
<!-- fin proceso para registrar-->