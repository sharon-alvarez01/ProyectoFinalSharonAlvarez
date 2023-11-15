<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
//$hora = date("g:i:A");

require("config.php");
$evento            = ucwords($_REQUEST['evento']);
$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 
$f_fin             = $_REQUEST['fecha_inicio']; 
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
$fecha_fin1        = strtotime($seteando_f_final."+ 1 days");
$fecha_fin         = date('Y-m-d', ($fecha_fin1));  
$color_evento      = $_REQUEST['color_evento'];
$hora_inicio       =$_REQUEST['hora_inicio'];
$hora_fin          =$_REQUEST['hora_fin'];
$persona           =$_REQUEST['nombreClientes'];
$metodoPago        =$_REQUEST['metodoPago'];
$precio             =$_REQUEST['precioServicio'];



$InsertNuevoEvento = "INSERT INTO eventoscalendar(
      evento,
      Valor,
      fecha_inicio,
      fecha_fin,
      color_evento,
      hora_inicio,
      hora_fin,
      IdPersonaRol,
      Id_Met_Pago
      )
    VALUES (
      '" .$evento. "',
      '" .$precio. "',
      '" .$fecha_inicio."',
      '" .$fecha_fin. "',
      '" .$color_evento. "',
      '" .$hora_inicio. "',
      '" .$hora_fin. "',
      '" .$persona. "',
      '" .$metodoPago. "'
      

  )";
$resultadoNuevoEvento = mysqli_query($con, $InsertNuevoEvento);

header("Location:index.php?e=1");

?>