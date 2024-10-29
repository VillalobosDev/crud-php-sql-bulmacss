
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

      <div class="column is-8">


<div class="field is-grouped is-grouped-right">
  <p class="control">
  <a href="index.php" class="button is-primary is-small">Volver</a>
  </p>
</div>


<article class="panel is-link">
  <p class="panel-heading has-text-centered has-text-weight-normal is-size-7">LISTADO GENERAL ESTUDIANTES FEMENINO</p>

  <?php
$consulta = $DB_con->prepare("SELECT 
estudiantes.id_estudiantes,
estudiantes.cedula,
estudiantes.nombres,
estudiantes.apellidos,
estudiantes.fecha_nacimiento,
estudiantes.edad,
estudiantes.id_sexo,
estudiantes.correo,
estudiantes.telefono,
sexo.id_sexo,
sexo.sexo
FROM estudiantes 
INNER JOIN sexo ON estudiantes.id_sexo = sexo.id_sexo 
WHERE sexo.id_sexo='10' ORDER BY id_estudiantes;");
$consulta->execute(); // Ejecuta la consulta preparada

if($consulta->rowCount() > 0){
$i=1;
 ?>
 <table id="myTable" class="table is-hoverable table is-mobile is-fullwidth has-text-centered">
        <thead>
          <tr>
              <th class="has-text-centered has-text-weight-normal">N°</th>
              <th class="has-text-centered has-text-weight-normal">ID-BD</th>
              <th class="has-text-centered has-text-weight-normal">CÉDULA</th>
              <th class="has-text-centered has-text-weight-normal">NOMBRES</th>
              <th class="has-text-centered has-text-weight-normal">APELLIDOS</th>
              <th class="has-text-centered has-text-weight-normal">SEXO</th>
          </tr>
        </thead>
<?php

while ($linea = $consulta->fetch(PDO::FETCH_ASSOC)) {

echo "
        <tbody>
          <tr>
            <td class='has-text-centered'>$i</td>";?>
            <td><?php echo $linea['id_estudiantes']; ?></td>
            <td><?php echo $linea['cedula']; ?></td>
            <td><?php echo $linea['nombres']; ?></td>
            <td><?php echo $linea['apellidos']; ?></td>
            <td><?php echo $linea['sexo']; ?></td>              

</tr>
<!-- ventana modal-->

<?php
include "ventana_modal_modificar_sexo.php";
include "ventana_modal_eliminar_sexo.php";
?>

<!-- fin ventana modal-->
<tr>
</tr>
</tbody>

<?php

$i++;
}

}
else
echo "<br><div class='notification is-warning has-text-centered has-text-weight-normal is-size-7'>
<h5 class='black-text text-darken-2 center CONDENSED LIGHT5'>
¡ Advertencia: No se ha encontrado ningún registro !
</h5>
</div>";
echo "</table>";
?>

</article>


<div class="control">
<div class="tags has-addons is-right is-small">
<?php
$consulta = $DB_con->query("SELECT 
estudiantes.id_estudiantes,
estudiantes.cedula,
estudiantes.nombres,
estudiantes.apellidos,
estudiantes.fecha_nacimiento,
estudiantes.edad,
estudiantes.id_sexo,
estudiantes.correo,
estudiantes.telefono,
sexo.id_sexo,
sexo.sexo
FROM estudiantes 
INNER JOIN sexo ON estudiantes.id_sexo = sexo.id_sexo 
WHERE sexo.id_sexo='2'");
$consulta->execute();
$sexo = $consulta->rowCount();
?>
      <span class="tag is-dark">Total registros:</span>
      <span class="tag is-success"><?php print("$sexo\n"); ?></span>
</div>
</div>


</div>
</div>   

<div class="content has-text-centered">
  <p><strong>© 2024 - </strong> DESARROLLADO POR: ING. OSWALDO AVILAN</p>
  </div>
</section>



  </body>
</html>