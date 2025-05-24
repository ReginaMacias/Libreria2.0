<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ESTILO.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKHOT-REGISTRATE</title>
</head>
<body background="IMG/fondo1.png">
    
 <header>
  <?php
  require_once'barranav.php';
  ?>
 </header>

 <form id="form1" action="registro2.php" method="POST">
    <div class="mb-3">
        <label for="" class="form-label">Nombre(s)</label>
        <input type="tex" name="nombre" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apeido Paterno</label>
        <input type="text" name="apeidoP" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apeido Materno</label>
        <input type="text" name="apeidoM" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="tel" name="telefono" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input type="email" name="correo" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1">
    </div>
    <button id="btn" type="submit"  name="Registro" class="btn btn-primary">Submit</button>
</form>

<footer>
  <?php
  require_once'footer.php';
  ?>
</footer>

</body>
</html>