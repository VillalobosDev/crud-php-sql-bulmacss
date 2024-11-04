<!-- ELIMINAR REGISTRO CON VENTANA MODAL -->
<div  id="#eliminar_<?php echo $linea['id_docentes']; ?>" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Eliminar Docentes</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">

    <h5 class="center-align">¿Esta seguro de Borrar el registro?</h5>
      
    <?php echo $linea['id_docentes'].') '.$linea['cedula'].' '.$linea['nombres'].' '.$linea['apellidos']; ?>

    </section>
    <footer class="modal-card-foot">
    <div class="field is-grouped">
    <p class="control">
    <a href="config_eliminar_docentes.php?id_docentes=<?php print($linea['id_docentes']); ?>" class="button is-danger is-small" type="submit" name="eliminar">
    ELIMINAR</a>
    </p>
   
    <p class="control">
   <button class="button is-small">CANCELAR</button>
   </p>
   </div>
      
    </footer>
  </div>
</div>
<!-- FIN ELIMINAR REGISTRO CON VENTANA MODAL -->