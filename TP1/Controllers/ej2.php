<?php
class cursada{
    function CargaHoraria(){
        if ($_GET){
            $horasTotales = 0;
            if ($_GET['lunes'] != null && is_numeric($_GET['lunes'])){
                $horasTotales += $_GET['lunes'];
            } 
            if ($_GET['martes'] !=null && is_numeric($_GET['martes'])){
                $horasTotales+=$_GET['martes'];
            }
            if ($_GET['miercoles'] !=null && is_numeric($_GET['miercoles'])){
                $horasTotales+=$_GET['miercoles'];
            }
            if ($_GET['jueves'] !=null && is_numeric($_GET['jueves'])){
                $horasTotales+=strtotime($_GET['jueves']);
            }
            if($_GET['viernes'] !=null && is_numeric($_GET['viernes'])){
                $horasTotales+=$_GET['viernes'];
            }
            $horasTotales = $horasTotales;
            return $horasTotales; 
        }

    }
}
?>