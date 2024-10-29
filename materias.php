<!-- la session-->
<?php
 session_start(); // Iniciar la sesión al principio del archivo
  ?>

<!-- fin de la session-->


<!-- conexion y errores-->
<?php
error_reporting( ~E_NOTICE );
include "conexion/conexion.php";
//$crud = new crud($DB_con);
?>

<!DOCTYPE html>
<html lang="es" data-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESTUDIANTES II-II</title>
    <link rel="icon" href="favicon/favicon.png">
    <link rel="stylesheet" href="css/bulma.min.css">
  </head>

  <body>

<?php include "menu.php"; ?>




<section class="section">
    <div class="container">
        <div class="columns is-mobile is-centered">    
        <p class="panel-heading has-text-centered has-text-weight-bold is-size-1 is-color-black">MATERIAS</p>
        <p></p>
        
        </div>
        
        
    </div>
    



<div class="content has-text-centered">

    
  <p><strong>© 2024 - </strong> DESARROLLADO POR: ING. OSWALDO AVILAN</p>
  </div>

</section>
<div class="container">
        <div class="is-centered">
            <div class="is-mobile is-centered">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus obcaecati assumenda tenetur accusantium ratione maxime et, doloremque repudiandae fugit, voluptas, sed aliquid dignissimos ducimus veritatis nihil qui facere cum esse.</div>
            <div class="is-mobile is-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt suscipit velit in vero accusantium repellat culpa ratione natus quibusdam laboriosam aliquid ea excepturi, repellendus voluptatem nam. Dicta at voluptatem vel.</div>
            <div class="is-mobile is-right">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, rerum a? Qui accusamus magnam, eligendi distinctio recusandae voluptatum. Asperiores eius sed excepturi quas facere fuga praesentium perferendis officia magnam ullam.</div>
        </div>
</div> 


  </body>
</html>