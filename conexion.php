<?php

$servidor="localhost";
$usuario="root";
$contrasena="";
$basedatos="beautysalon";

$conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("No se ha podido conectar al Servidor");
$usarbase = mysqli_select_db($conexion, $basedatos) or die("Upps! Error en conectar a la Base de Datos");

?>