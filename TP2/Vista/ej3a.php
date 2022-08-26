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
<body class="bg-secondary p-3">
<div class="modal modal-signin  position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin" >
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="mb-0 fw-normal position-absolute top-1 start-50 translate-middle text-body">Member Login</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form name="form" id="form" class="needs-validation" method="post" action="ej3a_resultado.php" novalidate>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="usuario" name="usuario" placeholder="Username" required>
            <label for="usuario" class="text-secondary"><i class="bi bi-person-fill"></i>Username</label>
            <div class="invalid-feedback"> Ingrese su nombre de usuario </div>
            <div class="valid-feedback"> </div>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="contrasenia" name="contrasenia" placeholder="Password" required>
            <label for="contrasenia" class="text-secondary"><i class="bi bi-lock-fill"></i>Password</label>
            <div id=invalido class="invalid-feedback"> Ingrese una contraseña v&aacute;lida </div>
            <div class="valid-feedback"> contraseña v&aacute;lida </div>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-success" type="submit">Login</button>

        </form>
      </div>
    </div>
  </div>
</div>
<script>
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!validaPassword()||!usuarioValido()) {
        event.preventDefault()
        event.stopPropagation()
        
      }else{
        form.contrasenia.classList.remove('is-invalid');
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
//ver como hago para que no se repitan el usuario y la contraseña
//form.checkValidity()
function validaPassword(){
    const form=document.querySelector('#form');
    const password=form.contrasenia.value;
    let valida=true;
    if(password.length<8){
      valida=false;
      form.contrasenia.classList.add('is-invalid');
      form.contrasenia.classList.remove('is-valid');
    }else if (password==""){
      form.contrasenia.classList.add('is-invalid');
      form.contrasenia.classList.remove('is-valid');
    }else if(!/[a-z][0-9]+$|[0-9][a-z]+$/i.test(password)){
        valida=false;
        form.contrasenia.classList.add('is-invalid');  
        form.contrasenia.classList.remove('is-valid'); 
    } else {
      form.contrasenia.classList.add('is-valid');
      form.contrasenia.classList.remove('is-invalid');
    }
    return valida;
  }

  function usuarioValido (){
    const form=document.querySelector('#form');
    const username=form.usuario.value;
    let valida=true;
    if (username==""){
      valida=false;
      form.usuario.classList.add('is-invalid');
    } else {
      form.usuario.classList.add('is-valid');
      form.usuario.classList.remove('is-invalid');
    }
    return valida;
  }
</script>

</body>
</html>