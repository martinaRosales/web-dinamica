<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    <form class="row g-3 needs-validation" name="formulario" id="formulario" method="post" action="ej2_resultado.php" novalidate >
        <div class="col-4">
            <label for="nombre" class="form-label"> Nombre </label>
            <input type="text" id="nombre" name="nombre" class="form-control" required/> <br/>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Ingrese su nombre</div>
        </div>
        <div class="col-4">
            <label for="apellido" class="form-label"> Apellido </label>
            <input type="text" id="apellido" name="apellido" class="form-control" required/> <br/>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Ingrese su apellido</div>
        </div>
        
        <div class="col-4">
            <label for="edad" class="form-label"> Edad </label>
            <input type="text" id="edad" name="edad" class="form-control" required/> <br/>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Ingrese su edad</div>
        </div>

        <div class="col-4">
            <label for="direccion" class="form-label"> Direccion </label>
            <input type="text" id="direccion" name="direccion" class="form-control" required/> <br/>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Ingrese su direcci&oacute;n</div>
        </div>
        <!--<button type="submit" class="btn btn-primary"></button> -->
        <input type="submit" value="Enviar"/>

    </form>
    </div>
    <script>
       
       document.getElementById('formulario').addEventListener('submit',datosCorrectos);
        function datosCorrectos (){
            var nombre, apellido, edad, direccion;

            nombreForm = document.getElementById("nombre");
            nombre = nombreForm.value;

            apellidoForm = document.getElementById("apellido");
            apellido = apellidoForm.value;

            edadForm = document.getElementById("edad");
            edad = edadForm.value;

            direccionForm = document.getElementById("direccion");
            direccion = direccionForm.value;

            document.esNumerico(form.edad)
    
        }

        function esNumerico (edad){
            numero = edad.value;
            if (isNaN(numero)){
                if (numero>0){
                    edad.classList.add('valid');
                    edad.innerHTML = "Todo correcto.";
                } else {
                    edad.classList.add('invalid');
                    edad.innerHTML = "Por favor, ingrese una edad válida.";

                }
            } else {
                edad.classList.add('invalid');
                edad.innerHTML = "Por favor, ingrese un número.";
            }
        }

        function nombreValido (nombre){
            string = nombre.value;
            if ()
        }
    </script>

</body>
</html>