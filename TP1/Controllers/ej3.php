<?php
class persona{
    function Presentacion(){
        if ($_POST){
            $mensaje = "Hola, yo soy ". $_POST['nombre']. ", ". $_POST['apellido']. " tengo ". $_POST['edad']. " años 
            y vivo en ". $_POST['direccion'];
        }
        return $mensaje;
    }

    
}

?>