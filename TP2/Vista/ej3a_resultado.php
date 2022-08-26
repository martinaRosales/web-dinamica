<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
<?php
    $cuentas[] = ["usuario"=> "Marti", "contrasenia"=> "abcd5678"];
    $cuentas[] = ["usuario" => "Pepito", "contrasenia" => "asdasd123123"]; 
    include_once("../Control/verifica_pass.php");
    $obj_control = new verifica_pass;
    $mensaje = $obj_control->existeUsuario($cuentas); 
    echo $mensaje;
    ?>

<div class="mb-3">
       <a href= "ej3a.php" class="btn btn-primary">Volver</a>
    </div>
</body>
</html>