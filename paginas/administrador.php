<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/style.css">
    <title>Barberos</title>
</head>

<body>

<div class="container-fluid bg-black">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <img class="" src="../Imagenes/barberia1.png" alt="" width="60px" ><a class="navbar-brand">Beards And Company</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active m-3" aria-current="page" href="../index.php">Volver a la pagina principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active m-3" aria-current="page" href="../formulario.php">Volver al formulario de ingreso</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<form class="bg-success mt-5 container-md" method="post">
    <label for=""><h1>Hola administrador</h1></label>
    <label for=""><h2>¿Que servicio quieres utilizar?</h2></label><br>
    <a href="../paginas/barberos.php"><button type="button" class="btn btn-dark m-3">Registrar corte</button></a>
    <a href="../paginas/ing_egr.php"><button type="button" class="btn btn-dark m-3">Visualizar ingresos y egresos</button></a>
</form>

</body>


<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
</html>