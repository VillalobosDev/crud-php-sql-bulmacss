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
  if ($contador > 1) {
  $check->closeCursor();
      
              $_SESSION['errMSG'] = "El registro ya se encuentra insertado";

    }
    else
    {

$sql=$DB_con->prepare("INSERT INTO materias (materias, id_pnf, id_trayectos) 
                                          VALUES (:materias, :id_pnf, :id_trayectos)");
$sql->bindParam(':materias', $_POST['materias']);
$sql->bindParam(':id_pnf', $_POST['id_pnf']);
$sql->bindParam(':id_trayectos', $_POST['id_trayectos']);
$sql->execute();

          $_SESSION['successMSG'] ="Registro insertado correctamente";

        }
  }
header('location: materias.php');
?>
<!-- fin proceso para registrar-->