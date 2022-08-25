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
    include_once("../Controllers/operacion.php");
    $obj_controller = new operacion;
    $resultado = $obj_controller -> calculando();
    echo "El resultado de la operaci&oacute;n seleccionada es ". $resultado;
    ?>
</body>
</html>