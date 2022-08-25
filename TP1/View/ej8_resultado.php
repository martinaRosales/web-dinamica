<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("../Controllers/cine.php");
    $obj_controller = new cine;
    $mensaje = $obj_controller -> calcularPrecio();
    echo $mensaje;
    ?>
</body>
</html>