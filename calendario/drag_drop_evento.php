<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");

include('config.php');
                        
$idEvento         = $_POST['idEvento'];
$start            = $_REQUEST['start'];
$fecha_inicio     = date('Y-m-d', strtotime($start)); 
$hora_inicio     = $_REQUEST['hora_inicio'];
$end              = $_REQUEST['end']; 
$fecha_fin        = date('Y-m-d', strtotime($end));  
$hora_fin        = $_REQUEST['hora_fin'];  


$UpdateProd = ("UPDATE eventoscalendar 
    SET 
        fecha_inicio ='$fecha_inicio',
        fecha_fin ='$fecha_fin'
        hora_inicio='$hora_inicio'
        hora_fin='$hora_fin'

    WHERE id='".$idEvento."' ");
$result = mysqli_query($con, $UpdateProd);

?>