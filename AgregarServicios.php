<?php

    require_once('conexion.php'); 

    $nombreServicio=        $_REQUEST['nombreServicio'];
    $precioServicio=        $_REQUEST['precioServicio'];
    $tipoServicio=          $_REQUEST['tipoServicios'];
    $fechaInicio=           $_REQUEST['fechaInicioServicio'];
    $fechaFin=              $_REQUEST['fechaFinServicio'];


    $insertar ="INSERT INTO servicio (NombreServicio,IdTipoServicio) VALUES ('".$nombreServicio."','".$tipoServicio."') ";
    mysqli_query($conexion, $insertar);
    //$query=mysqli_fetch_array($insertar);

    if(mysqli_error($conexion)){
        echo "Error al insertar el servicio";
    }else{

        $idServicio=mysqli_insert_id($conexion);


            if(mysqli_error($conexion)){
                echo 
                "<script language= 'javascript' >
                    alert('Error al ingresar los datos')
                    self.location='CRUDAdmin.php';
                </script>";
            }else{
                echo
                "<script language= 'javascript' >
                    alert('Datos Ingresados Correctamente')
                    self.location='CRUDAdmin.php';
                </script>";
            }
    

        

    }


    
  
   /*ME SALE EL ERROR PERO AUN ASI ME AGREGA EL SERVICIO CON EL ID DEL TIPO SERVICIO PERO NO ME AGREGA EN LA TABLA DE PRECIOS*/
    
?>