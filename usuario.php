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
    <link rel="stylesheet" href="css/flatpickr.min.css">
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


<div class="field is-grouped is-grouped-left">
  <p class="control">
  <a href="agregar_nivel.php">
  <button class="button is-primary is-small">Volver</button>
  </a>
  </p>
</div>


<article class="panel is-link">
  <p class="panel-heading has-text-centered has-text-weight-normal is-size-7">AGREGAR NIVEl USUARIO</p>





  <form class="box" action="config_agregar_usuarios.php" name="frmContacto" method="POST">

    
<div class="field-body">
<div class="field">
    <label class="label">Cédula</label>
   <div class="control">
   <input class="input is-small" type="text" id="cedula" name="cedula" placeholder="Cédula" 
   autocomplete="off" pattern="[0-9]{7,8}" title="Solo se permiten Numeros" required/>
   </div>
</div>


<div class="field">
    <label class="label">Nombres</label>
    <div class="control">
    <input class="input is-small" type="text" id="nombres" name="nombres" 
    placeholder="Nombres" autocomplete="off" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
    title="Solo se permiten letras y espacios" required/>
    </div>
</div>

<div class="field">
    <label class="label">Apellidos</label>
     <div class="control">
     <input class="input is-small" type="text" id="apellidos" name="apellidos" 
     placeholder="Apellidos" autocomplete="off" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
     title="Solo se permiten letras y espacios" required/>
    </div>
</div>
</div>


<div class="field-body">
<div class="field">
    <label class="label">Correo</label>
    <div class="control">
    <input class="input is-small" type="text" id="correo" 
    name="correo" placeholder="Correo" 
    autocomplete="off"  title="Fecha" required/>
    </div>
</div>


<div class="field">
    <label class="label">Contraseña</label>
    <div class="control">
    <input class="input is-small" type="text" id="contrasena" 
    name="contrasena" placeholder="Contraseña" 
    autocomplete="off"  title="Contraseña" required/>
    </div>
</div>



</div>

<div class="field-body">
  <div class="field">
    <label class="label">Teléfono</label>
    <div class="control">
       <input class="input is-small" type="text" id="telefono" 
       name="telefono" placeholder="Teléfono" autocomplete="off" required/>
    </div>
  </div>

   <div class="field">
          <label class="label">Tipo de Nivel</label>
          <div class="control is-expanded">
            <div class="select is-small is-fullwidth">
              <select name="id_nivel" required/>
                  <option value="" disabled selected>Seleccione Una Opción:</option>
                    <?php
                      $consulta = $DB_con->query("SELECT * FROM nivel ORDER BY id_nivel");
                      while ($linea = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <option value="<?php echo $linea['id_nivel'] ;?>"><?php echo $linea['nivel'] ;?></option>
                    <?php
                      }
                    ?>
               </select>
            </div>
          </div>
        </div>
</div>

     
 



</d>


<br> <br>


<div class="columns is-mobile is-centered">
           <div class="buttons">
<button class="button is-primary is-small" type="submit" name="agregar">Agregar Nivel Usuario</button>

</div> 
        </div>

</form>

</article>





</div>
</div>  

<div class="content has-text-centered">
  <p><strong>© 2024 - </strong> DESARROLLADO POR: ING. OSWALDO AVILAN</p>
  </div>
</section>


<script src="js/flatpickr.js"></script>


<script>
function calcAge(dateString) {
    var birthday = +new Date(dateString);
    return ~~((Date.now() - birthday) / (31557600000));
}

window.addEventListener('DOMContentLoaded', (event) => {
    var fechaNacPicker = flatpickr('#fecha_nac', {
        dateFormat: 'Y-m-d',
        onChange: function(selectedDates, dateStr, instance) {
            var edad = calcAge(dateStr);
            document.getElementById('edad').value = edad;
        },
    });
});
  </script>




<script>
const myAlert = document.getElementById('element');
element.classList.add('fade');
element.style.display = 'block';
setTimeout(() => {
  element.style.display = 'none';
}, 5000);
</script>



  </body>
</html>