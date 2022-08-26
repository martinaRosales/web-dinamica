<?php
class verifica_pass{

    public function existeUsuario($cuentas){
        if ($_POST){
            $existe = false;
            foreach ($cuentas as $cuenta){
                if($cuenta["usuario"]==$_POST["usuario"] && $cuenta["contrasenia"]==$_POST["contrasenia"]){
                  
                    $existe = true;
                } 
            }
           if ($existe){
            $mensaje = "<p class='fs-3 fw-semibold text-success'>Bienvenide, ha iniciado sesión :)</p>";
           } else {
            $mensaje="<p class='fs-3 fw-semibold text-danger'>Usuario o contraseña incorrectos :(</p>";
           }
        } else {
            $mensaje = "el post está vacío.";

        }
        return $mensaje;
    }

}


?>