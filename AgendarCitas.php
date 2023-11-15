<?php
    require_once('conexion.php'); 
    $consulta="SELECT DISTINCT NombreServicio FROM servicio WHERE IdTipoServicio=1";
    $resulP=mysqli_query($conexion,$consulta);

    $consulta1="SELECT DISTINCT NombreServicio FROM servicio WHERE IdTipoServicio=2";
    $resulF=mysqli_query($conexion,$consulta1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BeautySalon</title>
    <link rel="stylesheet" href="ReferenciasGoogle/Boostrap.css" >
    <script src="ReferenciasGoogle/AgendarCitas.js" type="text/javascript"></script>
    <link rel="stylesheet" href="Estilos/agendarCita.css" asp-append-version="true" />
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg  nav justify-content-end ">
                <div class="container-fluid">
                  <img src="Imagenes/logo.png" alt="Bootstrap" width="100" height="90">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav nav">
                            <ul class="nav  nav-underline barra">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="Index.php">Inicio</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="NuestrosServicios.html">Nuestros Servicios</a>
                                </li>
                                <li>
                                    <a class="nav-link active" href="AgendarCitas.php">Agendar Citas</a>          
                                </li>
                                <li>
                                    <a class="nav-link" href="Promociones.html">Promociones</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="Contactanos.html">Contactanos</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="IniciarSesion.html">Iniciar Sesion</a>
                                </li>
                            </ul>                     
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inicio">
                    <h1><strong>Agendar Citas</strong></h1>
                </div>
            </div>
        </div>
        <div class="row">
           
            <div class="col-md-12">
                <br>
                <h3 class="letradia">Ingrese su nombre</h3> <input type="text" id="valor1" class="inputCita" id="hora"  name="hora">
                <br>
                
                <h3 class="letradia">Seleccione el dia en el que desea la cita</h3> <input type="date" id="agendarCita" class="inputCita"  name="dia">
                <br>
                <br>
                <h3 class="letrahora">Seleccione la hora en la que desea la cita</h3> <input type="time" id="agendarCita" class="inputCita" name="hora">
                <br>
                <h3 class="letraServicio">Servicio requerido</h3>
                <input class="servicioreq" type="radio" name="servicio" id="peluqueria"  value="1" onclick="mostrarselect()"> Peluqueria
                <input class="servicioreq" type="radio" name="servicio" id="facial" value="2"  onclick="mostrarselect()"> Estetica facial
                
                <br>
                <div class="content-select serviciosCita" >
                    <select class="content-select" id="pelo" style="display: none;">
                        
                        <?php
                            if($resulP->num_rows >0){
                                while($fila = mysqli_fetch_assoc($resulP)){
                                    echo "<option value='{$fila['NombreServicio']}'>{$fila['NombreServicio']}</option>";
                                }
                            }
                        ?>
                    </select>
    
                    <select id="rostro" style="display: none;">
                        <?php
                            if($resulF->num_rows >0){
                                while($fila = mysqli_fetch_assoc($resulF)){
                                    echo "<option value='{$fila['NombreServicio']}'>{$fila['NombreServicio']}</option>";
                                }
                            }
                        ?>
                    </select>
                </div>

                <script>
                    function mostrarselect(){
                        var peluqueria = document.getElementById("peluqueria");
                        var facial = document.getElementById("facial");
                        var pelo = document.getElementById("pelo");
                        var rostroo = document.getElementById("rostro");

                        if (peluqueria.checked){
                            pelo.style.display= "block";
                            rostroo.style.display="none";
                        } else if (facial.checked){
                            rostroo.style.display= "block";
                            pelo.style.display="none";
                        }
                    }
                </script>

                <br>

                <h3 class="letra">Valor</h3> <input type="text" id="valor" class="form-control" disabled>

                <a href="Index.php" class="boton btn botonCita"><center>Agendar Cita</center></a>
            </div>
        </div>
    </div>

</body>
</html>