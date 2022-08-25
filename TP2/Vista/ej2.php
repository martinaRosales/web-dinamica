<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.2.0-dist/css/bootstrap.min.css">

    <title>Document</title>
    <script src="../bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
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
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()


    </script>

</body>
</html>