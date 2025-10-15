<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ESTILO.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKHOT-HOME</title>
</head>
<body>

 <header >
  <?php
  require_once'barranav.php';
  ?>
 </header>
<br>
<p class="texto">
  Te damos la bienvenida a nuestra extensa libreria, BOOKHOT. <br>
  Aquí podras encontrar libros en inglés y español donde te adentraras a maravillosas aventuras.
  <br>
  <br>
  <!-- From Uiverse.io by augustin_4687 --> 
   <a href="Registrousuario.php">
    <button class="button">
      <div>
        <div>
         <div >¡Suscribete para obtener grandiosas recompensas!</div>
        </div>
      </div>
    </button>
   </a>
</p>


<!-- From Uiverse.io by alexruix --> 
<div class="tarjetas">
  <div class="card">
      <div class="card-details">
        <p class="text-title">CLÁSICOS</p>
        <p class="text-body">Visita nuestra colección de los mejores libros clásicos y sus hermosas historias. </p>
      </div>
      <button class="card-button"> <a href="FANTASIA.php">More info</a> </button>
    </div>

    <div class="card">
       <div class="card-details">
         <p class="text-title">AUTORES</p>
         <p class="text-body">Conoce la gran lista de historias de los mejores autores del mundo y sus recomendaciones.</p>
        </div>
        <button class="card-button"><a href="CIENCIA-FICCION.php">More info</a></button>
    </div>

  <div class="card"s>
      <div class="card-details">
        <p class="text-title">Novedades</p>
        <p class="text-body">Descubre en BOOKHOT los libros en tendencia que nadie puede dejar de leer.</p>
      </div>
      <button class="card-button"><a href="ARTE.php">More info</a></button>
  </div>
</div>

<div class="bestsellers">
  BESTSELLERS DEL AÑO 

</div>
   
<footer>
  <?php
  require_once'footer.php';
  ?>
</footer>
</body>
</htm