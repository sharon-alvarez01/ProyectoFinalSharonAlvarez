<?php
    session_start();
    require_once('conexion.php'); 
    
    if(!$conexion){
        die("Error de conexion: ".mysqli_error());
    }

    if(isset($_GET['buscarServicio'])){
        $buscarnormal=$_GET['buscarServicio'];
        
        $buscar = strtolower($buscarnormal);

        $consulta="SELECT servicio.NombreServicio,preciofacial.PrecioServicio FROM servicio 
        INNER JOIN preciofacial ON preciofacial.IdServicio=servicio.IdServicio WHERE servicio.NombreServicio=$buscar;";
        $resultado=mysqli_query($conexion,$consulta);
        $registro=mysqli_fetch_assoc($resultado);

        if(!$registro){
            die("Servicio no encontrado");
        }}else{
            echo ("Nombre no proporcionado");
        }
    
    mysqli_close($conexion);
?>