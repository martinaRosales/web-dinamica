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
    include_once ("../Controllers/ej1.php");
    $obj_controlador = new numero;
    $var_resultado = $obj_controlador -> VerNumero();
    echo $var_resultado;
    ?>
    <a href="ej1.php"> <input type="button" value="Volver"/></a>
</body>
</html>