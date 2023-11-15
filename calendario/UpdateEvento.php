<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");

include('config.php');
                        
$idEvento         = $_POST['idEvento'];

$evento            = ucwords($_REQUEST['evento']);
$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 
$color_evento      = $_REQUEST['color_evento'];
$hora_inicio       =$_REQUEST['hora_inicio'];
$hora_fin          =$_REQUEST['hora_fin'];
$metodoPago        =$_REQUEST['metodoPago'];
$valor             =$_REQUEST['precioServicio'];


$UpdateProd = ("UPDATE eventoscalendar 
    SET evento ='".$evento."',
        Valor='".$valor."',
        fecha_inicio ='".$fecha_inicio."',
        color_evento ='".$color_evento."',
        hora_inicio='".$hora_inicio."',
        hora_fin='".$hora_fin."',
        Id_Met_Pago='".$metodoPago."'

    WHERE id='".$idEvento."' ");
$result = mysqli_query($con, $UpdateProd);

header("Location:index.php?ea=1");
?>