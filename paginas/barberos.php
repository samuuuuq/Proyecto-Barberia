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

<div class="container-fluid bg-info">
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

<form class="bg-success mt-5" method="post">
    <input type="text" placeholder="* Nombre del barbero" name="nombarb" required="" class="mb-2">
    <input type="text" placeholder="* Nombre del cliente" name="nomclie" required="" class="mb-2">
    <input type="num" placeholder="* Numero telefonico del cliente" name="num" required="" class="mb-2">
    <input type="text" placeholder="* Apellido del cliente" name="ape" required="" class="mb-4">
    <select class="form-select mb-2 p-2" aria-label="Default select example">
      <option selected>* Tipo de servicio</option>
      <option value="1">Corte de cabello</option>
      <option value="2">Corte de Barba</option>
      <option value="3">Venta de producto</option>
    </select>
    <input type="text" placeholder="Nombre de producto(si se vendio un producto)" name="nomprod" class="mb-2">
    <input type="number" placeholder="Cantidad de propina (si el cliente dio propina)" name="prop" class="mb-2">
    <label for="" class="m-3 mb-1"><h5>* Fecha en la que se realizo el servicio</h5></label>
    <input type="date"name="fec" required="" class="mb-2">
    <label for="" class="m-3 mb-1"><h5>* Hora en la que se realizo el servicio</h5></label>
    <input type="time" name="hora" required="" class="mb-4">
    <input type="num" placeholder="*  Precio total del servicio" name="num" required="" class="mb-2">
    <button type="submit" class="btn btn-dark m-3">Registrar servicio</button>
</form>

</body>


<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
</html>