<div id="modal_trayecto_<?php echo $linea['id_trayectos']; ?>" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Materias for Trayecto: <?php echo $linea['trayectos']; ?></p>
      <button class="delete button close-modal-button" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <ul>
        <?php
        // Llamamos las materias asociadas con el trayecto y el pnf
        $materiasQuery = "SELECT materias.materias FROM materias 
                          WHERE materias.id_trayectos = :id_trayecto AND materias.id_pnf = :id_pnf";
        $stmt = $DB_con->prepare($materiasQuery);
        $stmt->bindParam(':id_trayecto', $linea['id_trayectos']);
        $stmt->bindParam(':id_pnf', $linea['id_pnf']);
        $stmt->execute();

        // Check if materias exist
        if ($stmt->rowCount() > 0) {
            while ($materia = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<li>" . htmlspecialchars($materia['materias']) . "</li>";
            }
        } else {
            echo "<p>No materias found for this trayecto and PNF.</p>";
        }
        ?>
      </ul>
    </section>
    <footer class="modal-card-foot">
      <button class="button close-modal-button">Cerrar</button>
    </footer>
  </div>
</div>

<script>
  
  document.addEventListener('DOMContentLoaded', () => {
  function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.add('is-active');
  }
  
  function closeModal(modal) {
    modal.classList.remove('is-active');
  }

  // Cerrar ventana modal
  document.querySelectorAll('.close-modal-button').forEach(button => {
    button.addEventListener('click', () => {
      const modal = button.closest('.modal');
      closeModal(modal);
    });
  });

  document.querySelectorAll('.modal-background').forEach(background => {
    background.addEventListener('click', () => {
      const modal = background.closest('.modal');
      closeModal(modal);
    });
  });

  // Abrir ventana modal
  document.querySelectorAll('.js-modal-trigger').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const target = trigger.getAttribute('data-target');
      openModal(target);
    });
  });
});


</script>