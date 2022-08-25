<?php
class persona{
    function mayorMenor (){
        if ($_GET){
            if ($_GET['edad'] < 18){
                $mensaje = "<img src='menor edad.jpg'>";
            } else {
                $mensaje = "<img src='mayor edad.jpg'>";
            }
        }
        return $mensaje;
    }

}
?>