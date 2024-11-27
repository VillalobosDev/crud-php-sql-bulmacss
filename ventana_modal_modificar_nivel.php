<!-- MODIFICAR REGISTRO CON VENTANA MODAL -->
<div  id="#modificar_<?php echo $linea['id_nivel']; ?>" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Modificar Nivel</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
    <form class="" name="frmContacto" method="POST" action="config_modificar_nivel.php?id_nivel=<?php echo $linea['id_nivel']; ?>">
    <div class="field">
    <label class="label">Nivel</label>
    <div class="control">
      <input class="input is-small" type="text" name="nivel" value="<?php echo $linea['nivel']; ?>">
    </div>
  </div>
    </section>
    <footer class="modal-card-foot">

    <div class="field is-grouped">
    <p class="control">
      <button class="button is-link is-small" type="submit" name="modificar">MODIFICAR</button>
      </p>

      </form>
      <p class="control">
      <button class="button is-small">CANCELAR</button>
      </p>
      </div>


    </footer>
  </div>
</div>
<!-- FIN MODIFICAR REGISTRO CON VENTANA MODAL -->