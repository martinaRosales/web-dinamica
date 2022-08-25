<?php
class numero {

    function VerNumero (){
 
        if ($_POST){
            $mensaje ="";
            if ($_POST['numero'] > 0) {
                $mensaje = "El n&uacute;mero ingresado es positivo.";
            }elseif ($_POST['numero'] == 0){
                $mensaje = "El n&uacute;mero ingresado es 0.";
            } else {
                $mensaje = "El n&uacute;mero ingresado es negativo.";
            }
            $mensaje ="<p>". $mensaje. "</p>";
            
        } else {
            $mensaje="<h1>No se envi&oacute; correctamente la informaci&oacute;</h1>";
        }
     return $mensaje;
        
    } 
}

?>