<!-- AGREGAR REGISTRO CON VENTANA MODAL -->
<div id="modal-js-example" class="modal">
  <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
           <p class="modal-card-title">Agregar Estudiantes</p>
             <button class="delete" aria-label="close"></button>
        </header>

    <section class="modal-card-body">
       <form class="" action="config_agregar_estudiantes.php" name="frmContacto" method="POST">

    
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
           <label class="label">Fecha de Nacimiento</label>
           <div class="control">
           <input class="input is-small" type="date" id="fecha_nac" 
           name="fecha_nac" placeholder="fecha de Nacimiento" 
           autocomplete="off"  title="Fecha" required/>
           </div>
      </div>






    <div class="field">
           <label class="label">Edad</label>
          <div class="control">
             <input class="input is-small" type="text" id="edad" 
             name="edad" placeholder="Edad" autocomplete="off" required/>
          </div>
    </div>

     
    

  
  
  <div class="field">
     <label class="label">Tipo de Sexo</label>
      <div class="control is-expanded">
        <div class="select is-small is-fullwidth">
          <select name="id_sexo" required/>
              <option value="" disabled selected>Seleccione Una Opción:</option>
                <?php
                  $consulta = $DB_con->query("SELECT * FROM sexo ORDER BY id_sexo");
                  while ($linea = $consulta->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <option value="<?php echo $linea['id_sexo'] ;?>"><?php echo $linea['sexo'] ;?></option>
                <?php
                  }
                ?>
           </select>
        </div>
     </div>
  </div>
</div>



<div class="field-body">


<div class="field">
           <label class="label">Correo</label>
           <div class="control">
           <input class="input is-small" type="text" id="correo" name="correo" placeholder="Correo" autocomplete="off" 
      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Formato de Correo @ .com" required/>
           </div>
         </div>




         <div class="field">
           <label class="label">Teléfono</label>
          <div class="control">
             <input class="input is-small" type="text" id="telefono" 
             name="telefono" placeholder="Teléfono" autocomplete="off" required/>
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