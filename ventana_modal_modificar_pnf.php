<!-- MODIFICAR REGISTRO CON VENTANA MODAL -->
<div  id="#modificar_<?php echo $linea['id_pnf']; ?>" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Modificar PNF</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
    <form class="" name="frmContacto" method="POST" action="config_modificar_pnf.php?id_pnf=<?php echo $linea['id_pnf']; ?>">
    <div class="field">
    <label class="label">PNF</label>
    <div class="control">
      <input class="input is-small" type="text" name="pnf" value="<?php echo $linea['pnf']; ?>">
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