<!-- AGREGAR REGISTRO CON VENTANA MODAL -->
<div id="modal-js-example" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Agregar Materia</p>
        <button class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
        
  
      <form class="" action="config_agregar_materias.php" name="frmContacto" method="POST">
  
      <div class="field">
      <label class="label">Materia</label>
      <div class="control">
        <input class="input is-small" type="text" id="materias" name="materias" placeholder="Materias" 
        autocomplete="off" title="Solo se permiten letras y espacios" required/>
      </div>
    </div>

      <div class="field">
        <label for="" class="label">PNF</label>
        <div class="control is-expanded"></div>
        <div class="select is-small is-fullwidth">
          <select name="id_pnf" required="required">
            <option value="" disabled="disabled" selected="selected">Seleccione una opción</option>
              <?php
                $consulta = $DB_con->query("SELECT * FROM pnf ORDER BY id_pnf");
                while ($linea = $consulta->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <option value="<?php echo $linea['id_pnf'] ;?>"><?php echo $linea['pnf'];?></option>
              <?php
              }
              ?>
          </select>
        </div>
      </div>
      
      <div class="field">
        <label for="" class="label">Trayectos</label>
        <div class="control is-expanded"></div>
        <div class="select is-small is-fullwidth">
          <select name="id_trayectos" required="required">
            <option value="" disabled="disabled" selected="selected">Seleccione una opción</option>
              <?php
                $consulta = $DB_con->query("SELECT * FROM trayectos ORDER BY id_trayectos");
                while ($linea = $consulta->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <option value="<?php echo $linea['id_trayectos'] ;?>"><?php echo $linea['trayectos'];?></option>
              <?php
              }
              ?>
          </select>
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