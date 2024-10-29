<!-- proceso para registrar-->
<?php
session_start(); // Iniciar la sesión al principio del archivo
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";

if(isset($_POST['agregar'])){
  $sql = "SELECT pnf FROM pnf WHERE pnf = :pnf LIMIT 1"; //Creamos la select
  $check = $DB_con->prepare($sql); //Preparamos la SELECT, de ésta manera evitamos SQL Injection
  $check->bindParam(':pnf', $_POST['pnf']);//Substituimos las variables de la SELECT
  $check->execute();//Ejecutamos la consulta
  $contador = $check -> rowCount();//Esta función devuelve el número de resultados que ha devuelto la SELECT
  if ($contador > 0) {
  $check->closeCursor();
    
              $_SESSION['errMSG'] = "El registro ya se encuentra insertado";

    }
    else
    {

$sql=$DB_con->prepare("INSERT INTO pnf (pnf) VALUES (:pnf)");
$sql->bindParam(':pnf', $_POST['pnf']);
$sql->execute();

          $_SESSION['successMSG'] ="Registro insertado correctamente";

        }
  }
header('location: pnf.php');
?>
<!-- fin proceso para registrar-->