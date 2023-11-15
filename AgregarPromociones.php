<?php

require_once('conexion.php'); 

    $nombrePromocion=        $_REQUEST['nombrePromocionA'];
    $precioPromocion=        $_REQUEST['precioPromocionA'];
    $fechaInicio=            $_REQUEST['fechaInicioPromocionA'];
    $fechaFin=               $_REQUEST['fechaFinPromocionA'];

    $consulta= "INSERT INTO promociones(NombrePromocion,ValorPromocion,FechaInicio,FechaFin) VALUES ('$nombrePromocion ', ' $precioPromocion ',' $fechaInicio',' $fechaFin')";
    $insertar = mysqli_query($conexion, $consulta);

  
   
    if ($insertar){
        echo"<script language= 'javascript' >
            alert('Datos Ingresados Correctamente')
            self.location='CRUDAdmin.php';
            </script>";

    }else{
        echo"Error al ingresar los datos";
    }
?>