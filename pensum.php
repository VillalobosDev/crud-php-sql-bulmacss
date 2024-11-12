<!-- la session-->
<?php
  session_start();
?>

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

        <!-- VALIDACION -->
        <?php
          if (isset($_SESSION['errMSG'])) {
            echo "<div id='element' class='notification is-warning is-small'>" . $_SESSION['errMSG'] . "</div>";
            unset($_SESSION['errMSG']);
          } else if (isset($_SESSION['successMSG'])) {
            echo "<div id='element' class='notification is-primary is-small'>" . $_SESSION['successMSG'] . "</div>";
            unset($_SESSION['successMSG']);
          }
        ?>
        <!-- FIN VALIDACION -->

        <div class="field is-grouped is-grouped-right">
          <p class="control">
            <button class="button is-primary is-small js-modal-trigger" data-target="modal-js-example" aria-haspopup="true">+ Agregar</button>
          </p>
        </div>

        <article class="panel is-link">
          <p class="panel-heading has-text-centered has-text-weight-normal is-size-7">LISTADO GENERAL MATERIAS</p>

          <?php
            $consulta = $DB_con->query("SELECT 
              materias.id_materias,
              materias.materias,
              materias.id_pnf,
              trayectos.id_trayectos,
              trayectos.trayectos,
              pnf.pnf
            FROM materias
            INNER JOIN trayectos ON materias.id_trayectos = trayectos.id_trayectos
            INNER JOIN pnf ON materias.id_pnf = pnf.id_pnf
            ORDER BY materias.id_materias;");

            if ($consulta->rowCount() > 0) {
              $i = 1;
              echo "<table id='myTable' class='table is-hoverable table is-mobile is-fullwidth has-text-centered'>
                <thead>
                  <tr>
                    <th class='has-text-centered has-text-weight-normal'>N°</th>
                    <th class='has-text-centered has-text-weight-normal'>ID-BD</th>
                    <th class='has-text-centered has-text-weight-normal'>PNF</th>
                    <th class='has-text-centered has-text-weight-normal'>Trayecto</th>
                    <th class='has-text-centered has-text-weight-normal'>Acciones</th>
                  </tr>
                </thead>
                <tbody>";

              while ($linea = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                  <td class='has-text-centered'>$i</td>
                  <td>{$linea['id_pnf']}</td>
                  <td>{$linea['pnf']}</td>
                  <td><a href='#' class='js-modal-trigger' data-target='modal_trayecto_{$linea['id_trayectos']}'>{$linea['trayectos']}</a></td>
                  <td>
                    <button data-target='#modificar_{$linea['id_materias']}' class='button is-small is-link js-modal-trigger'>Modificar</button>
                    <button data-target='#eliminar_{$linea['id_materias']}' class='button is-small is-danger js-modal-trigger'>Eliminar</button>
                  </td>
                </tr>";

                // Including the modals
                include "ventana_modal_modificar_materias.php";
                include "ventana_modal_eliminar_materias.php";
                include "ventana_modal_trayectos.php";

                $i++;
              }

              echo "</tbody></table>";
            } else {
              echo "<br><div class='notification is-warning has-text-centered has-text-weight-normal is-size-7'>
                <h5 class='black-text text-darken-2 center CONDENSED LIGHT5'>
                  ¡ Advertencia: No se ha encontrado ningún registro !
                </h5>
              </div>";
            }
          ?>
        </article>

        <div class="control">
          <div class="tags has-addons is-right is-small">
            <?php
              $consulta = $DB_con->query("SELECT * FROM materias");
              $consulta->execute();
              $materias = $consulta->rowCount();
            ?>
            <span class="tag is-dark">Total registros:</span>
            <span class="tag is-success"><?php print("$materias\n"); ?></span>
          </div>
        </div>

      </div>
    </div>

    <div class="content has-text-centered">
      <p><strong>© 2024 - </strong> DESARROLLADO POR: ING. OSWALDO AVILAN</p>
    </div>
  </div>
</section>

<script>
  const myAlert = document.getElementById('element');
  myAlert.classList.add('fade');
  myAlert.style.display = 'block';
  setTimeout(() => {
    myAlert.style.display = 'none';
  }, 5000);

  document.addEventListener('DOMContentLoaded', () => {
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

    (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
      const modal = $trigger.dataset.target;
      const $target = document.getElementById(modal);

      $trigger.addEventListener('click', () => {
        openModal($target);
      });
    });

    (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
      const $target = $close.closest('.modal');
      $close.addEventListener('click', () => {
        closeModal($target);
      });
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === "Escape") {
        closeAllModals();
      }
    });
  });
</script>

<!-- ventana modal-->
<?php include "ventana_modal_agregar_materias.php"; ?>
<!-- fin ventana modal-->

</body>
</html>
