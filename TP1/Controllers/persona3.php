<?php
class persona3{
    function mostrarDatos(){
        if ($_POST){
            $mensaje = "Hola, yo soy ". $_POST['nombre']. ", ". $_POST['apellido']." mi género es ". $_POST['genero']. ", tengo ". $_POST['edad']. " años 
            , vivo en ". $_POST['direccion']. " y ". $_POST['estudios'];
        }
        return $mensaje;
    }
}
?>