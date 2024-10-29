<!-- AGREGAR REGISTRO CON VENTANA MODAL -->
<div id="modal-js-example" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Agregar Sexo</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      

    <form class="" action="config_agregar_sexo.php" name="frmContacto" method="POST">

    <div class="field">
    <label class="label">Sexo</label>
    <div class="control">
      <input class="input is-small" type="text" id="sexo" name="sexo" placeholder="Sexo" 
      autocomplete="off" title="Solo se permiten letras y espacios" required/>
    </div>
  </div>


    </section>
    <footer class="modal-card-foot">
    <div class="field is-grouped">
    <p class="control">
      <button class="button is-success is-small" type="submit" name="agregar">AGREGAR</button>
      </p>

      <p class="control">
      <button class="button is-small">CANCELAR</button>
      </p>
      </div>

    </footer>
    </form>
  </div>
</div>
<!-- FIN AGREGAR REGISTRO CON VENTANA MODAL -->