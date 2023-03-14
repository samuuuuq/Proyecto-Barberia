<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./estilos/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    
    include('menu2.php');

    ?>
    <h1 class="mt-4"><center>¡Ingresa aqui!</center></h1>
        <form action="controlador/control_login.php" class="bg-success" method="post">
            <input type="text" placeholder="Usuario" name="usu" required="" class="mb-2">
            <input type="password" placeholder="Contraseña" name="contra" required="">  
            <button name="btn-log" type="submit" class="btn btn-dark m-2">ingresar</button>
        </form>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</html>