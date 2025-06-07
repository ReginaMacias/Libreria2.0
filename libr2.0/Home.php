<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ESTILO.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKHOT-HOME</title>
</head>
<body background="IMG/fondo1.jpeg">

 <header>
  <?php
  require_once'barranav.php';
  ?>
 </header>


<img id="img" src="IMG/libro1.png" alt="">
<img id="img" src="IMG/libro2.png" alt="">
<img id="img" src="IMG/libro3.png" alt="">

<div id="text">
  <h1 id="l">Ven y conoce los nuevos libros agregados a nuestro enorme y variado catalago, solo aqui encontraras los mejores best sellers y nuevos talentos.
    Crea una cuenta <a href="Registrousuario.php">aqui</a> para que descubras nuevas aventuras! 
  </h1>
</div>

<footer>
  <?php
  require_once'footer.php';
  ?>
</footer>
</body>
</htm