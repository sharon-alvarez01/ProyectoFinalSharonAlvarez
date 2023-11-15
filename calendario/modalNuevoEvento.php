

<?php

  require("config.php");

  $consulta="SELECT DISTINCT IdServicio, NombreServicio FROM servicio";
  $resul=mysqli_query($con,$consulta);

  $consulta1="SELECT DISTINCT IdTipoServicio, NombreTipoServicio FROM tiposervicio";
  $tipoS=mysqli_query($con,$consulta1);

  $consulta2="SELECT DISTINCT IdMetodoPago, TipoMetodoPago FROM metodopago";
  $tipoPago=mysqli_query($con,$consulta2);

  $consulta3="SELECT persona.IdPersona, persona.NombrePersona, persona.ApellidoPersona, IdPersonaRol FROM persona INNER JOIN personarol ON personarol.IdPersona=persona.IdPersona WHERE personarol.IdRol=2";
  $persona=mysqli_query($con, $consulta3);
?>


<div class="modal" id="exampleModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar Nueva Cita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEvento" id="formEvento" action="nuevoEvento.php" class="form-horizontal" method="POST">
    <div class="form-group">
			<label for="evento" class="col-sm-12 control-label">Nombre Cliente</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" list="nombreClientes" name="nombreClientes" id="nombreCliente" placeholder="Nombre del Cliente" required/>
        <datalist class="select2" id="nombreClientes" >
          <?php
            if($persona->num_rows >0){
              while($fila = mysqli_fetch_assoc($persona)){
                  echo "<option value='{$fila['IdPersonaRol']}'>{$fila['NombrePersona']}</option>";
              }
            }
          ?>
        </datalist>

			</div>
		</div>
		<div class="form-group">
			<label for="evento" class="col-sm-12 control-label">Nombre del Servicio</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" list="nombreServicios" name="evento" id="evento" placeholder="Nombre del Servicio" required/>
        <datalist class="select2" id="nombreServicios" >
          <?php
            if($resul->num_rows >0){
              while($fila = $resul->fetch_assoc()){
                echo "<option value='{$fila['IdServicio']}'>{$fila['NombreServicio']}</option>";
              }
            }
          ?>
        </datalist>        
			</div>
		</div>
    <div class="form-group">
      <label for="fecha_fin" class="col-sm-12 control-label">Precio del Servicio</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="precioServicio" id="precioServicio" placeholder="Precio del Servicio">
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicio</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio">
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_fin" class="col-sm-12 control-label">Hora inicio</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="hora_inicio" id="hora_inicio" placeholder="Hora Inicio">
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_fin" class="col-sm-12 control-label">Hora Final</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="hora_fin" id="hora_fin" placeholder="Hora Final">
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_fin" class="col-sm-12 control-label">Metodo de Pago</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" list="tipoPago" name="metodoPago" id="metodoPago" placeholder="Metodo de Pago">
        <datalist class="select2" id="tipoPago" >
          <?php
            if($tipoPago->num_rows >0){
              while($fila = mysqli_fetch_assoc($tipoPago)){
                  echo "<option value='{$fila['IdMetodoPago']}'>{$fila['TipoMetodoPago']}</option>";
              }
            }
          ?>
        </datalist>
      </div>
    </div>


  <div class="col-md-12" id="grupoRadio">
  
  <input type="radio" name="color_evento" id="orange" value="#FF5722" checked>
  <label for="orange" class="circu" style="background-color: #FF5722;"> </label>

  <input type="radio" name="color_evento" id="amber" value="#FFC107">  
  <label for="amber" class="circu" style="background-color: #FFC107;"> </label>

  <input type="radio" name="color_evento" id="lime" value="#8BC34A">  
  <label for="lime" class="circu" style="background-color: #8BC34A;"> </label>

  <input type="radio" name="color_evento" id="teal" value="#009688">  
  <label for="teal" class="circu" style="background-color: #009688;"> </label>

  <input type="radio" name="color_evento" id="blue" value="#2196F3">  
  <label for="blue" class="circu" style="background-color: #2196F3;"> </label>

  <input type="radio" name="color_evento" id="indigo" value="#9c27b0">  
  <label for="indigo" class="circu" style="background-color: #9c27b0;"> </label>

</div>
		
	   <div class="modal-footer">
      	<button type="submit" class="btn btn-success">Guardar Evento</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
    	</div>
	</form>
      
    </div>
  </div>
</div>