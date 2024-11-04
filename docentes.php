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
    <title>DOCENTES II-II</title>
    <link rel="icon" href="favicon/favicon.png">
    <link rel="stylesheet" href="css/bulma.min.css">
  </head>

  <body>

<?php include "menu.php"; ?>



<section class="section">
  <div class="container">

    <div class="columns is-mobile is-centered">

      <div class="column is-10">



      <!-- VALIDACION -->
<?php
  if(isset($_SESSION['errMSG']))
  {
      ?>
      <div id="element" class="notification is-warning is-small">
        <?php echo $_SESSION['errMSG']; ?>
      </div>
  <?php
  unset($_SESSION['errMSG']); // Eliminar el mensaje después de mostrarlo
  }
  else if(isset($_SESSION['successMSG']))
  {
       ?>
       <div id="element" class="notification is-primary is-small">
         <?php echo $_SESSION['successMSG']; ?>
       </div>
  <?php
  unset($_SESSION['successMSG']); // Eliminar el mensaje después de mostrarlo
  }
  ?>           
<!-- FIN VALIDACION -->


<div class="field is-grouped is-grouped-right">
  <p class="control">
  <a href="agregar_docentes.php">
  <button class="button is-primary is-small">+ Agregar</button>
  </a>
  </p>
</div>



<article class="panel is-link">
  <p class="panel-heading has-text-centered has-text-weight-normal is-size-7">LISTADO GENERAL DOCENTES REGISTRADOS</p>

<?php
$consulta = $DB_con->query("SELECT 
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
INNER JOIN sexo ON docentes.id_sexo = sexo.id_sexo ORDER BY id_docentes;");

if($consulta->rowCount() > 0){
$i=1;
 ?>
 <table id="myTable" class="table is-hoverable table is-mobile is-fullwidth has-text-centered">
        <thead>
          <tr>
              <th class="has-text-centered has-text-weight-normal">N°</th>
              <th class="has-text-centered has-text-weight-normal">ID-BD</th>
              <th class="has-text-centered has-text-weight-normal">Cédula</th>
              <th class="has-text-centered has-text-weight-normal">Nombres</th>
              <th class="has-text-centered has-text-weight-normal">Apellidos</th>
              <th class="has-text-centered has-text-weight-normal">Sexo</th>
              <th class="has-text-centered has-text-weight-normal">Acciones</th>
          </tr>
        </thead>
<?php

while ($linea = $consulta->fetch(PDO::FETCH_ASSOC)) {

echo "
        <tbody>
          <tr>
            <td class='has-text-centered'>$i</td>";?>
            <td><?php echo $linea['id_docentes']; ?></td>
            <td><?php echo $linea['cedula']; ?></td>
            <td><?php echo $linea['nombres']; ?></td> 
            <td><?php echo $linea['apellidos']; ?></td>
            <td><?php echo $linea['telefono']; ?></td>          
<td>

<a href="ficha_docentes.php?id_docentes=<?php print($linea['id_docentes']); ?>">
<button class='button is-small is-responsive is-info'>Ficha</button></a>


<a href="modificar_docentes.php?id_docentes=<?php print($linea['id_docentes']); ?>">
<button class='button is-small is-responsive is-link'>Modificar</button></a>



<button data-target="#eliminar_<?php echo $linea['id_docentes']; ?>" 
class='button is-small is-responsive is-danger js-modal-trigger' >Eliminar</button>

</td>
</tr>
<!-- ventana modal-->

<?php
include "ventana_modal_eliminar_docentes.php";
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

<div class="tags has-addons is-centered is-small">


</article>

<div class="control">
<div class="tags has-addons is-right is-small">
<?php
$consulta = $DB_con->query("SELECT 
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
INNER JOIN sexo ON docentes.id_sexo = sexo.id_sexo ORDER BY id_docentes;");
$consulta->execute();
$docentes = $consulta->rowCount();
?>
      <span class="tag is-dark">Total registros:</span>
      <span class="tag is-success"><?php print("$docentes\n"); ?></span>
</div>
</div>


</div>
</div>  

<div class="content has-text-centered">
  <p><strong>© 2024 - </strong> DESARROLLADO POR: ING. OSWALDO AVILAN</p>
  </div>
</section>


<script>
const myAlert = document.getElementById('element');
element.classList.add('fade');
element.style.display = 'block';
setTimeout(() => {
  element.style.display = 'none';
}, 5000);
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add('is-active');
  }

  function closeModal($el) {
    $el.classList.remove('is-active');
  }

  function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
      closeModal($modal);
    });
  }

  // Add a click event on buttons to open a specific modal
  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);

    $trigger.addEventListener('click', () => {
      openModal($target);
    });
  });

  // Add a click event on various child elements to close the parent modal
  (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
    const $target = $close.closest('.modal');

    $close.addEventListener('click', () => {
      closeModal($target);
    });
  });

  // Add a keyboard event to close all modals
  document.addEventListener('keydown', (event) => {
    if(event.key === "Escape") {
      closeAllModals();
    }
  });
});
</script>


  </body>
</html>