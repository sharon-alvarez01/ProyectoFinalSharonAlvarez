

<?php
    require_once('conexion.php'); 

    $consulta="SELECT DISTINCT NombreServicio FROM servicio";
    $resul=mysqli_query($conexion,$consulta);

    $consulta1="SELECT DISTINCT IdTipoServicio, NombreTipoServicio FROM tiposervicio";
    $tipoS=mysqli_query($conexion,$consulta1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ReferenciasGoogle/Boostrap.css" >
    <link rel="stylesheet" href="Estilos/ModuloAdmin.css">
    <script src="FormularioBuscar.js"></script>
    <title>Modulo Administrador</title>
</head>
<body>
    <script src="FormularioBuscar.js"></script>
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
                            <ul class="nav  nav-underline barraInicio">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="Index.php">Inicio</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="Admin.html">Calendario</a>
                                </li>
                                <li>
                                    <a class="nav-link active" href="CRUDAdmin.php">Modulo</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="AgregarUsuarioAdmin.html">Agregar Usuario</a>
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
                    <p><strong>MODULO ADMINISTRADOR</strong></p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <input type="submit" id="botonAdmin1" name="botonAdmin1" onclick=buscarServicio() value="Servicios" >
                    <input type="submit" id="botonAdmin2" onclick=buscarPromociones()  value="Promociones">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div id="buscarServcio" class="buscarServicio" style="display: none">
                    <h1><strong>Buscar</strong></h1>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="Formularioseleccionar">

                        <input type="text" class="inputt" list="buscarServicio" name="buscarServicios" id="buscarServicios"  placeholder="Nombre del Servicio">
                            
                        <datalist id="buscarServicio" >
                            <?php
                                if($resul->num_rows >0){
                                    while($fila = $resul->fetch_assoc()){
                                            echo "<option value='{$fila['IdPrecioFacial']}'>{$fila['NombreServicio']}</option>";
                                    }
                                }
                            ?>
                        </datalist>
   
                                
                        <input  type="submit" id="botonBuscarFormulario" name="submit" class="botonBuscar" VALUE="buscar">
                        <input  type="button"  class="botonBuscar" onclick=mostrarformularioAgregar() value="AGREGAR">

                               </form>
                               



                               
              
                   //

                        <?php

                            
 
                            if(isset($_POST['submit']))
                                
                                {
         
                                    $servicio = $_POST['buscarServicios'];

                                    $consul="SELECT DISTINCT IdPrecioFacial,NombreServicio,PrecioServicio FROM servicio INNER JOIN preciofacial ON preciofacial.IdServicio=servicio.IdServicio 
                                    WHERE IdPrecioFacial='$servicio'";
                                    $resul=mysqli_query($conexion,$consul);
                                    if($resul->num_rows >0){
                                        while($fila = $resul->fetch_assoc()){
                                            echo "<br>";
                                            echo "<input type='text'  name='nombreServicio' class='inputServicio' placeholder='Nombre del Servicio' value='{$fila['NombreServicio']}'>
                                            <br>";
                                            echo "<input type='text'  name='precioServicio' class='inputServicio' placeholder='Precio del Servicio' value='{$fila['PrecioServicio']}'>
                                            <br>";
                                            echo"<input type='submit' class='Botonn' value='Actualizar'>";
                                            
                                            
                                            
                                        }
                                        
                                    
                                    }
                                    
                                }
                               
                                
                                ?>

                               
                        
                        <?php
                            /*
                            <?php
 
                                if(isset($_POST['submit']))
                                
                                {
                                
                                $name = $_POST['name'];
                                
                                echo "User Has submitted the form and entered this name : <b> $name </b>";
                                
                                echo "<br>You can use the following form again to enter a new name.";
                                
                                }
                                
                                ?>
                                
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                
                                <input type="text" name="name"><br>
                                
                                <input type="submit" name="submit" value="Submit Form"><br>
                                
                                </form>








                            if(isset($_POST['submit']))
                            
                            {
                            
                                $buscarServicio = $_POST['buscarServicio'];
                               

                                $conexion= mysqli_connect("localhost","root","","beautysalon");
                                
                                if(!$conexion){
                                    die ("Error de conexion: ".mysqli_connect_error());
                                }
                                
                                $consulta="SELECT NombreServicio, PrecioServicio FROM servicio 
                                INNER JOIN preciofacial ON preciofacial.IdServicio=servicio.IdServicio WHERE servicio.NombreServicio==$buscarServicio;";
                                echo $buscarServicio;
                                $resultado=mysqli_query($conexion, $consulta);
                                echo "<table>";
                                echo "<tr><th>Nombre del Servicio</th><th>Precio</th></tr>";
                            
                                while($fila =mysqli_fetch_assoc($resultado)){
                                    echo "<tr>";
                                    echo "<td>". $fila['NombreServicio']."</td>";
                                    echo "<td>". $fila['PrecioServicio']."</td>";
                                    echo "<td><a href=editar1.php?idusuario=".$fila['idusuario'] .">Editar</a></td>";
                                    echo "</tr>";
                                }
                            
                                echo "</table>";
                                mysqli_close($conexion);
                                
                                echo "User Has submitted the form and entered this name : <b> $buscarServicio </b>";
                                
                                echo "<br>You can use the following form again to enter a new name.";
                            
                            }
                            
                         */
                      ?>     
                    <div id="formularioBuscar" class="formularioBuscar"   style="display: none" >
                        

                            <input type="text"  name="nombreServicio" class="inputServicio" placeholder="Nombre del Servicio" value="">
                            <br>
                            <input type="text"  name="precioServicio" class="inputServicio" placeholder="Precio del Servicio" value="">
                            <br>
                            
                            <br><br>
                            <input type="submit" class="Botonn" value="Actualizar">
                        
                      
                    </div>
                          
                    <div id="formularioAgregar" class="formularioAgregar"  style="display: none"  >
                    
                        <form method="POST" action="AgregarServicios.php" id="formularioAgregar" >
                            <input type="text" name="nombreServicio" class="inputServicio" placeholder="Nombre del Servicio">
                            <br>
                            <input class="RadioServicioP" type="radio" name="tipoServicios" id="peluqueria"  value="peluqueria" onclick="mostrarSelect(this)"> Peluqueria
                            <input class="RadioServicioF" type="radio" name="tipoServicios" id="facial" value="facial"  onclick="mostrarSelect(this)"> Estetica facial
                            <br>
                            
                            <div id=facialS style="display: none;">
                                <input type="text" name="precioServicio" class="inputServicio" placeholder="Precio del Servicio">
                                <br>
                                <input type="date" name="fechaInicioServicio" class="inputServicio" placeholder="Fecha Inicio del Servicio">
                                <br>
                                <input type="date" name="fechaFinServicio" class="inputServicio" placeholder="Fecha Fin del Servicio">
                                <br><br>
                            </div>
                            <br>
                            <input type="submit"  class="Botonn" value="Agregar Servicio">
                            
                        </form>
                    </div>
                
                    <script type="text/javascript">
                        function mostrarSelect(elemento) {
                            if(elemento.value=="peluqueria") {
                                document.getElementById("facialS").style.display = "none";
                            }else{
                                if(elemento.value=="facial"){
                                    document.getElementById("facialS").style.display = "block";
                                }
                            }
                        }
                    </script>



                    
                </div >


                <div id="buscarPromociones" class="buscarPromociones" style="display: none" >
                    <h1><strong>Buscar</strong></h1>
                    <input type="text" class="inputtPromociones" name="buscarPromociones" placeholder="Nombre de la Promocion">
                    <input type="submit" name="submit" class="botonBuscar" onclick=mostrarformularioBuscarPromociones()  value="BUSCAR" >
                    <input type="submit" class="botonBuscar" onclick=mostrarformularioAgregarPromociones() value="AGREGAR">

                    <div id="formularioBuscarPromociones" class="formularioBuscarPromociones"  style="display: none"  >
                        <form method="POST" action="Buscar.php" id="FormularioPromociones">

                            <input type="text"  name="nombrePromocion" class="inputServicio" placeholder="Nombre de la Promocion" value="">
                            <br>
                            <input type="text"  name="valorPromocion" class="inputServicio" placeholder="Valor de la promoción" value="">
                            <br>
                            <input type="date"  name="fechaInicioPromocion" class="inputServicio" placeholder="Fecha Inicio de la promoción" value="">
                            <br>
                            <input type="date"  name="fechaFinPromocion" class="inputServicio" placeholder="Fecha fin de la promoción" value="">
                            <br>
                            <br><br>
                            <input type="submit" class="Botonn" value="Actualizar">
                        </form>
                      
                    </div>


                    <div id="formularioAgregarPromociones" class="formularioAgregarPromociones"   style="display: none" >
                    
                        <form method="POST" action="AgregarPromociones.php" id="formularioAgregarPromociones" >

                            <input type="text" name="nombrePromocionA" class="inputServicio" placeholder="Nombre Promoción">
                            <br>
                            <input type="text" name="precioPromocionA" class="inputServicio" placeholder="Precio de la Promoción">
                            <br>
                            <input type="text" name="fechaInicioPromocionA" class="inputServicio" placeholder="Fecha Inicio de la promoción">
                            <br>
                            <input type="date" name="fechaFinPromocionA" class="inputServicio" placeholder="Fecha fin de la promoción">
                            <br>
                            <input type="date" name="fotoPromocionA" class="inputServicio" placeholder="Cargue la Foto de la promoción">
                            <br><br>
                            <input type="submit" class="BotonPromocionA" value="Registrar Promoción">

                        </form>
                    </div>
                </div>

                






                   
            </div>
           

        </div>
  
  

        <div class="row">
            <div class="col-md-12">
                

            </div>

        </div>


    </div>
</body>
</html>