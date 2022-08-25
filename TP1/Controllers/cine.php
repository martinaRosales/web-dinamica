<?php
class cine{
    function calcularPrecio (){
        if ($_POST){
            if ($_POST['edad']<12){
                $mensaje = "El valor de su entrada es $160."; 
            } else {
                if ($_POST['estado']== "V"){
                    $mensaje = "El valor de su entrada es $180";
                } else {
                    $mensaje = "El valor de su entrada es de $300";
                }
            }
        }
        return $mensaje;
    }
}
?>