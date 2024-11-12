<!-- Modal for trayectos -->
<div id="#modal_trayecto_<?php echo $linea['id_trayectos']; ?>" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Seleccionar Trayecto</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <form action="procesar_trayecto.php" method="POST">
        <div class="field">
          <label class="label">Trayecto</label>
          <div class="control">
            <div class="select">
              <select name="id_trayecto" required>
                <option value="">Seleccione un trayecto</option>
                <?php
                $trayectosQuery = "SELECT * FROM trayectos";
                $result = $DB_con->query($trayectosQuery);
                while ($trayecto = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $trayecto['id_trayectos'] . "'>" . $trayecto['trayectos'] . "</option>";
                }
                ?>
              </select>
            </div>
          </div>
        </div>

        <div class="field">
          <button type="submit" class="button is-primary is-small">Guardar</button>
        </div>
      </form>
    </section>
    <footer class="modal-card-foot">
      <button class="button" id="close-modal">Cerrar</button>
    </footer>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Select the modal and close button
    const modal = document.getElementById('modal-trayecto');
    const closeButton = document.getElementById('close-modal');
    
    // Close the modal when the close button is clicked
    closeButton.addEventListener('click', () => {
      modal.classList.remove('is-active');
    });

    // Close the modal if the background is clicked
    const modalBackground = document.querySelector('.modal-background');
    modalBackground.addEventListener('click', () => {
      modal.classList.remove('is-active');
    });
  });
</script>
