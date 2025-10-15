<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ESTILO.css">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>BOOKHOT-CATEGORIAS</title>
</head>
<body style= "background-color: #f2f1ed;">
 <header>
  <?php
  require_once'barranav.php';
  ?>
 </header>
    
 <div class="cards-container">
    <div class="card">
      <div class="card-details">
        <p class="text-title">Card 1</p>
        <p class="text-body">Texto de la primera card.</p>
      </div>
      <button class="card-button"><a href="#">More info</a></button>
    </div>

    <div class="card">
      <div class="card-details">
        <p class="text-title">Card 2</p>
        <p class="text-body">Texto de la segunda card.</p>
      </div>
      <button class="card-button"><a href="#">More info</a></button>
    </div>

    <div class="card">
      <div class="card-details">
        <p class="text-title">Card 3</p>
        <p class="text-body">Texto de la tercera card.</p>
      </div>
      <button class="card-button"><a href="#">More info</a></button>
    </div>
  </div>

 <footer style= "background-color: #710014;">
  <?php
  require_once'footer.php';
  ?>
</footer>
</body>
</html>