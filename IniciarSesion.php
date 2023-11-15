

<?php

    session_start();
    require_once('conexion.php'); 

    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    $registros = mysqli_query($conexion, "SELECT persona.Correo, persona.Contraseña, rol.idRol FROM persona INNER JOIN personarol ON personarol.IdPersona=persona.IdPersona INNER JOIN rol ON rol.IdRol=personarol.IdRol WHERE Correo='$usuario' AND Contraseña='$contrasena'")
    or die (mysqli_error($conexion));
    
    if ($reg=mysqli_fetch_array($registros)){
        $comparaRol=$reg['idRol'];

        if($comparaRol==1){
            $_SESSION['usuario-nombre']=$reg['NombrePersona'];
            $_SESSION['SESSION']=$_SESSION;

            echo "<script>self.location='Admin.html';</script>";

        }

        if ($comparaRol==2){
            $_SESSION['usuario-nombre']=$reg['NombrePersona'];
            $_SESSION['SESSION']=$_SESSION;

            echo "<script>self.location='Index.php';</script>";

        }else{
            echo"<script language= 'javascript' >
            alert('Datos incorrectos porfavor verifique Usuario y/o Contraseña')
            self.location='../../index.php';
            </script>";
        }
    }


?>