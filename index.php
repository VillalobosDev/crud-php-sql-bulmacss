<!-- la session-->
<?php
 session_start(); // Iniciar la sesión al principio del archivo
  ?>

<!-- fin de la session-->


<!-- conexion y errores-->
<?php
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";
//$crud = new crud($DB_con);
?>

<!DOCTYPE html>
<html lang="es" data-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESTUDIANTES II-II</title>
    <link rel="icon" href="favicon/favicon.png">
    <link rel="stylesheet" href="css/bulma.min.css">
  </head>

  <body>

<?php include "menu.php"; ?>




<section class="section">
  <div class="container">

    <div class="columns is-mobile is-centered">
      <div class="column is-6">

         <article class="panel is-link">
               <p class="panel-heading has-text-centered has-text-weight-normal is-size-7">VISUALIZADOR DE REGISTROS DE TABLAS</p>

                   <?php
                    $consulta = $DB_con->query("SELECT COUNT(*) as total FROM sexo");
                    $linea = $consulta->fetch();

                    $total = $linea['total'];
                    echo "<p class='has-text-centered'>Porcentaje de Registros Tabla Sexo: " . $total . "%</p>";
                  ?>
                   <progress class="progress is-link is-small" value="<?php echo $linea['total']; ?>" max="100">
                   <?php echo $total; ?> %</progress>


                   <?php
                    $consulta = $DB_con->query("SELECT COUNT(*) as total FROM estudiantes");
                    $linea2 = $consulta->fetch();

                    $total = $linea2['total'];
                    echo "<p class='has-text-centered'>Porcentaje de Registros Tabla Estudiantes: " . $total . "%</p>";
                   ?>
                   <progress class="progress is-primary is-small" value="<?php echo $linea2['total']; ?>" max="100">
                   <?php echo $total; ?> %</progress>


                   

        </article>

      </div>    
    </div>
  </div>

  </section>



<div class="content has-text-centered">
  <p><strong>© 2024 - </strong> DESARROLLADO POR: ING. OSWALDO AVILAN</p>
  </div>

</section>


  </body>
</html>