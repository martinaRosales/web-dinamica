<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="formulario" id="formulario" method="post" action="ej5_resultado.php" >
        Nombre:<input type="text" id="nombre" name="nombre" style="margin:0.5%;"/> <br/>
        Apellido: <input type="text" id="apellido" name="apellido"style="margin:0.5%;"/> <br/>
        G&eacute;nero: <input type="text" id="genero" name= "genero" style="margin:0.5%;"/> <br/>
        Edad: <input type="text" id="edad" name="edad"style="margin:0.5%;"/> <br/>
        Direccion: <input type="text" id="direccion" name="direccion"style="margin:0.5%;"/> <br/>
        Nivel de estudios: 
           <br/> No tiene estudios <input type="radio" id="estudios" name="estudios" value="no tengo estudios"/>
           <br/> Estudios primarios <input type="radio"  id="estudios" name="estudios" value="tengo estudios primarios"/>
           <br/> Estudios secundarios <input type="radio" id="estudios" name="estudios" value=" tengo estudios secundarios"/> <br/>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>