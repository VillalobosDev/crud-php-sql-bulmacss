<!-- la session-->
<?php
 
    session_start();

  ?>

<!-- fin de la session-->


<!-- conexion y errores-->
<?php
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";
?>
<!-- fin conexion y errores-->

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
       <div class="column is-12">


       <div class="field is-grouped is-grouped-right">
  <p class="control">
  <a href='docentes.php' button class='button is-primary is-small' type='submit'>Volver Atrás</button></a>
  </p>
</div>

           <article class="panel is-link">
             <p class="panel-heading has-text-centered has-text-weight-normal is-size-7">DATOS DEL ESTUDIANTE</p>


<div class="columns is-mobile is-centered">
 <div class="column is-10">
  
  <?php
    if(isset($_GET['id_docentes'])){
    $id_docentes= $_GET['id_docentes'];

    $consulta = $DB_con->prepare("SELECT 
    docentes.id_docentes,
    docentes.cedula,
    docentes.nombres,
    docentes.apellidos,
    docentes.fecha_nacimiento,
    docentes.edad,
    docentes.id_sexo,
    docentes.correo,
    docentes.telefono,
    sexo.id_sexo,
    sexo.sexo
    FROM docentes
    INNER JOIN sexo ON docentes.id_sexo=sexo.id_sexo 
    WHERE docentes.id_docentes=:id_docentes;");
    $consulta->execute(array(':id_docentes'=>$id_docentes));
    $editar_linea = $consulta->fetch(PDO::FETCH_ASSOC);
    if($editar_linea){
        extract($editar_linea);
    }
} else {
    echo "El parámetro id no está definido.";
}
?>

<br>

<div class="columns is-mobile is-left">
  <div class="column is-3"><p class="has-text-centered has-text-weight-normal is-size-7"><strong>CÉDULA:</strong> <?php echo $cedula; ?></p></div>
  <div class="column is-3"><p class="has-text-centered has-text-weight-normal is-size-7"><strong>NOMBRES:</strong> <?php echo $nombres; ?></p></div> 
  <div class="column is-3"><p class="has-text-centered has-text-weight-normal is-size-7"><strong>APELLIDOS:</strong> <?php echo $apellidos; ?></p></div> 
  <div class="column is-3"><p class="has-text-centered has-text-weight-normal is-size-7"><strong>FECHA DE NACIMIENTO:</strong> <?php echo $fecha_nacimiento; ?></p></div> 
</div>

<div class="columns is-mobile is-left">
  <div class="column is-3"><p class="has-text-centered has-text-weight-normal is-size-7"><strong>EDAD:</strong> <?php echo $edad; ?></p></div> 
  <div class="column is-3"><p class="has-text-centered has-text-weight-normal is-size-7"><strong>TIPO DE SEXO:</strong> <?php echo $sexo; ?></p></div> 
  <div class="column is-3"><p class="has-text-centered has-text-weight-normal is-size-7"><strong>CORREO:</strong> <?php echo $correo; ?></p></div> 
  <div class="column is-3"><p class="has-text-centered has-text-weight-normal is-size-7"><strong>TELÉFONO:</strong> <?php echo $telefono; ?></p></div> 

</div>



 </div>
</div>
</article>
 






<br>




    <div class="columns is-mobile is-centered">
        <div class="buttons">
              <a href='docentes.php' button class='button is-primary is-small' type='submit'>VOLVER ATRÁS</button></a>
        </div> 
    </div> 
   <br>


</div>  
</div>
</div>   
 

<div class="content has-text-centered">
  <p><strong>© 2024 - </strong> DESARROLLADO POR: ING. OSWALDO AVILAN</p>
  </div>


</section>

  </body>
</html>