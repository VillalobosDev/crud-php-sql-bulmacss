<!-- proceso para registrar-->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_POST['agregar'])){
  $sql = "SELECT materias FROM materias WHERE materias = :materias LIMIT 1"; //Creamos la select
  $check = $DB_con->prepare($sql); //Preparamos la SELECT, de ésta manera evitamos SQL Injection
  $check->bindParam(':materias', $_POST['materias']);//Substituimos las variables de la SELECT
  $check->execute();//Ejecutamos la consulta
  $contador = $check -> rowCount();//Esta función devuelve el número de resultados que ha devuelto la SELECT
  if ($contador > 0) {
  $check->closeCursor();
    
              $_SESSION['errMSG'] = "El registro ya se encuentra insertado";

    }
    else
    {

$sql=$DB_con->prepare("INSERT INTO materias (materias) VALUES (:materias)");
$sql->bindParam(':materias', $_POST['materias']);
$sql->execute();

          $_SESSION['successMSG'] ="Registro insertado correctamente";

        }
  }
header('location: materias.php');
?>
<!-- fin proceso para registrar-->