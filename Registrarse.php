

<?php


    require_once('conexion.php'); 

    $nombre=        ucwords($_REQUEST['nombre']);
    $apellido=      ucwords($_REQUEST['apellido']);
    $telefono=      $_REQUEST['telefono'];
    $correo=        strtolower($_REQUEST['correo']);
    $contrasena=    $_REQUEST['contrasena'];


    $consulta1=$conexion -> query ("SELECT * FROM persona");
    $valores=mysqli_fetch_array($consulta1);


    $NombreRegistrado=$valores['NombrePersona'];
    $ApellidoRegistrado=$valores['ApellidoPersona'];

    if($nombre=$NombreRegistrado AND $Apellido=$ApellidoRegistrado){
        echo 
            "<script language= 'javascript' >
                alert('El usuario ya se encuentra registrado')
                self.location='Registrarse.html';
            </script>";   
    } else{
        $consulta= "INSERT INTO persona(NombrePersona,ApellidoPersona,Telefono,Correo,Contraseña) VALUES ('$nombre', '$apellido','$telefono','$correo','$contrasena')";
        mysqli_query($conexion, $consulta);

  
   
        if (mysqli_error($conexion)){
            echo "Error al insertar los datos de la persona";

        }else{

            $idPersona=mysqli_insert_id($conexion);
            $RolPersona=2;
            $insertaRol="INSERT INTO personarol (IdRol, IdPersona) VALUES ('$RolPersona','$idPersona')";
            mysqli_query($conexion,$insertaRol);

            if(mysqli_error($conexion)){
                echo 
                "<script language= 'javascript' >
                    alert('Error al ingresar los datos')
                    self.location='Registrarse.html';
                </script>";
            }else{
                echo
                "<script language= 'javascript' >
                    alert('Datos Ingresados Correctamente')
                    self.location='IniciarSesion.html';
                </script>";
            }
        }


    }

    
      

     
        


?>