<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ESTILO.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>BOOKHOT-INICIAR SESION</title>
</head>
<body background="IMG/fondo1.jpeg">

 <header>
  <?php
  require_once'barranav.php';
  ?>
 </header>
    
   

<form id="form1" action="controlador.php" method="post">
<div class="alert alert-success" role="alert">
       NO HAY CUENTA REGISTRADA
   </div>
    <div class="mb-3">
        <label for="" class="form-label"> Ingresa tu Correo</label>
        <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <input id="btn" name="ingresar" type="submit" value="Iniciar Sesion" ></input>
</form>

<div id="text">
  <h2 id="l">Ven y conoce los nuevos libros agregados a nuestro enorme y variado catalago, solo aqui encontraras los mejores best sellers y nuevos talentos.
    Crea una cuenta <a href="Registrousuario.php">aqui</a> para que descubras nuevas aventuras! 
  </h2>
</div>

<footer>
  <?php
  require_once'footer.php';
  ?>
</footer>

</body>
</html>