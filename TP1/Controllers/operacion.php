<?php
class operacion{
    function calculando(){
        if($_POST){
            $num1 = $_POST['numero1'];
            $num2 = $_POST['numero2'];
            switch ($_POST['operacion']){
                case "suma": 
                    $resultado = $num1 + $num2;
                    break;
                case "resta":
                    $resultado = $num1 - $num2;
                    break;
                case "division":
                    $resultado = $num1 / $num2;
                    break;
                case "multiplicacion":
                    $resultado = $num1 * $num2;
                    break;
            }
        }
        return $resultado;
    }
}
?>