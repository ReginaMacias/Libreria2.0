<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ESTILO.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>BOOKHOT-CATEGORIAS</title>
</head>
<body>
 <header>
  <?php
  require_once'barranav.php';
  ?>
 </header>
    
  <div id="cards">

  <div class="card" style="width: 18rem; left: 20%; top:100px;">
   <div class="card-body">
    <h5 class="card-title" style="text-align: center;">FANTASIA</h5>
    <p class="card-text">Sumergete en un mundo maravilloso lleno de aventuras y romance.</p>
    <a href="FANTASIA.php" class="card-link" style="color:#743014 ;"><h5>Haz click aqui para ver nuestro extenso catálogo.</h5></a>
   </div>
  </div>

  <div class="card" style="width: 18rem; left: 60%; bottom:103px;">
   <div class="card-body">
    <h5 class="card-title" style="text-align: center;">CIENCIA FICCION </h5>
    <p class="card-text">Da un salto entre las maravillosas paginas de los multiversos que esperan tu llegada.</p>
    <a href="CIENCIA-FICCION.php" class="card-link" style="color:#743014 ;"><h5>Haz click aqui para ver nuestro extenso catálogo.</h5></a>
   </div>
  </div>

  <div class="card" style="width: 18rem; left: 20%; top:20px;">
   <div class="card-body">
    <h5 class="card-title" style="text-align: center;">AUTO SUPERACION</h5>
    <p class="card-text">Encuentra el camino hacia la paz y superacion humana y la sanacion interna.</p>
    <a href="AUTO-SUPERACION.php" class="card-link" style="color:#743014;"><h5>Haz click aqui para ver nuestro extenso catálogo.</h5></a>
   </div>
  </div>

  <div class="card" style="width: 18rem; left: 60%; bottom:181px;">
   <div class="card-body">
    <h5 class="card-title" style="text-align: center;">ARTE</h5>
    <p class="card-text">Deleitate con las hermosas figuras y pinturas hechas por las manos del hombre y la mujer.</p>
    <a href="ARTE.php" class="card-link" style="color:#743014;"><h5>Haz click aqui para ver nuestro extenso catálogo.</h5></a>
   </div>
  </div>

  

  </div>
  

 <footer>
  <?php
  require_once'footer.php';
  ?>
</footer>
</body>
</html>