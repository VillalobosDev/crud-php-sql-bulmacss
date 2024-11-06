<nav class="navbar is-link" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
   
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
    
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="index.php">Inicio</a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">Configuración del Sistema</a>
        <div class="navbar-dropdown">
        <a class="navbar-item" href="sexo.php">Sexo</a>
        <a class="navbar-item" href="pnf.php">PNF</a>
        </div>
      </div>


      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">Configuración del Estudiante</a>
        <div class="navbar-dropdown">
          <a class="navbar-item" href="estudiantes.php">Estudiantes</a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="materias.php">Materias</a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="inscripcion.php">Inscripción</a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="pensum.php">Pensum de Estudio</a>
        </div>
      </div>


      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">Configuración del Docente</a>
        <div class="navbar-dropdown">
          <a class="navbar-item" href="docentes.php">Docentes</a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="materias_del_docente.php">Materias del Docente</a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="alumnos_asignados_docentes.php">Inscripción</a>
        </div>
      </div>


            <a class="navbar-item" href="estudiantes_masculino.php">Estudiantes Maculino</a>

            <a class="navbar-item" href="estudiantes_femenino.php">Estudiantes Femenino</a>

    </div>

    <div class="navbar-end">

    

    </div>

      </a>
  </div>
</nav>


<script>
document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Add a click event on each of them
$navbarBurgers.forEach( el => {
  el.addEventListener('click', () => {

    // Get the target from the "data-target" attribute
    const target = el.dataset.target;
    const $target = document.getElementById(target);

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    el.classList.toggle('is-active');
    $target.classList.toggle('is-active');

  });
});

});
</script>