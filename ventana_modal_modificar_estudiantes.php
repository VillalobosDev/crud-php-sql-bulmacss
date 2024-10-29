<!-- MODIFICAR REGISTRO CON VENTANA MODAL -->
<div  id="#modificar_<?php echo $linea['id_estudiantes']; ?>" class="modal">
  <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
           <p class="modal-card-title">Modificar Estudiantes</p>
             <button class="delete" aria-label="close"></button>
        </header>

    <section class="modal-card-body">
    <form class="" name="frmContacto" method="POST" action="config_modificar_estudiantes.php?id_estudiantes=<?php echo $linea['id_estudiantes']; ?>">

    
<div class="field-body">
    <div class="field">
           <label class="label">Cédula</label>
          <div class="control">
          <input class="input is-small" type="text" id="cedula" name="cedula" value="<?php echo $linea['cedula']; ?>" placeholder="Cédula" 
          autocomplete="off" pattern="[0-9]{7,8}" title="Solo se permiten Numeros" required/>
          </div>
    </div>

     
    <div class="field">
           <label class="label">Nombres</label>
           <div class="control">
           <input class="input is-small" type="text" id="nombres" name="nombres" value="<?php echo $linea['nombres']; ?>" 
           placeholder="Nombres" autocomplete="off" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
           title="Solo se permiten letras y espacios" required/>
           </div>
    </div>

    <div class="field">
           <label class="label">Apellidos</label>
            <div class="control">
            <input class="input is-small" type="text" id="apellidos" name="apellidos" value="<?php echo $linea['apellidos']; ?>" 
            placeholder="Apellidos" autocomplete="off" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
            title="Solo se permiten letras y espacios" required/>
           </div>
    </div>
</div>




<div class="field-body">
    <div class="field">
           <label class="label">Teléfono</label>
          <div class="control">
             <input class="input is-small" type="text" id="telefono" name="telefono" value="<?php echo $linea['telefono']; ?>" placeholder="Teléfono" autocomplete="off" required/>
          </div>
    </div>

     
    <div class="field">
           <label class="label">Fecha de Nacimiento</label>
           <div class="control">
           <input class="input is-small" type="date" id="fecha_nac" name="fecha_nac" value="<?php echo $linea['fecha_nac']; ?>" placeholder="fecha de Nacimiento" 
           autocomplete="off"  title="Fecha" required/>
           </div>
    </div>

  
  <div class="field">
   <label class="label">Tipo de Sexo</label>
   <div class="control is-expanded">
    <div class="select is-small is-fullwidth">
          <select id="id_sexo" name="id_sexo" required/>
              <option value="" disabled selected>Seleccione Una Opción:</option>
                <?php
                  $consulta1 = $DB_con->query("SELECT * FROM sexo ORDER BY id_sexo");
                  while ($linea_sexo = $consulta1->fetch(PDO::FETCH_ASSOC)) {
                    $selected = '';
                    if($linea_sexo['id_sexo'] == $linea['id_sexo']) {
                      $selected = 'selected';
                    }
                ?>
                <option value="<?php echo $linea_sexo['id_sexo'] ;?>" <?php echo $selected; ?>><?php echo $linea_sexo['sexo'] ;?></option>
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
           <label class="label">Dirección de Habitacón</label>
           <div class="control">
           <input class="input is-small" type="text" id="direccion" name="direccion" value="<?php echo $linea['direccion']; ?>" placeholder="Dirección de Habitacón" autocomplete="off"  
           title="direccion" required/>
           </div>
       </div>
</div>

<div class="field-body">
   <div class="field">
           <label class="label">Correo</label>
           <div class="control">
           <input class="input is-small" type="text" id="correo" name="correo" value="<?php echo $linea['correo']; ?>" placeholder="Correo" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Formato de Correo @ .com" required/>
           </div>
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
<!-- FIN AGREGAR REGISTRO CON VENTANA MODAL -->