<div class="container">
	<div class="card">
		<div class="card-header">
			Datos Personales
		</div>
		<div class="card-body">
			<form action="" name="form_datos_p" id="form_datos_p">
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label>FOTO</label><br>
							<input type="file" name="txt_foto">
						</div>
						<div class="col-md-6">
							<label>NOMBRE</label><br>
							<input type="text" id="txt_nombre" name="txt_nombre" class="form-control" placeholder="Nombre" readonly>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<label>CORREO ELECTRONICO</label><br>
							<input type="email" id="txt_correo" name="txt_correo" class="form-control" placeholder="Correo">
						</div>
						<div class="col-md-6">
							<label>FECHA NACIMIENTO</label><br>
							<input type="date" class="form-control" name="txt_fecha_nacimiento">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<label>TIPO DE DOCUMENTO</label><br>
							<select id="txt_tipo_documento" name="txt_tipo_documento" class="form-control">
								<option value="casado">Tarjeta de identidad</option>
								<option value="soltero">Cédula de ciudadanía</option>
								<option value="union_libre">Cédula de extranjero</option>
							</select>
						</div>
						<div class="col-md-6">
							<label>IDENTIFICACIÓN</label><br>
							<input type="number" id="txt_identificacion" name="txt_identificacion" class="form-control" placeholder="Identificacion">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<label>DIRECCIÓN</label><br>
							<input type="text" id="txt_direccion" name="txt_direccion" class="form-control" placeholder="Dirección">	
						</div>
						<div class="col-md-6">
							<label>CIUDAD</label><br>
							<select id="txt_ciudad" name="txt_ciudad" class="form-control">
								<option value="11001">Bogotá</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<label>ESTADO CIVIL</label><br>
							<select id="txt_estado_civil" name="txt_estado_civil" class="form-control">
								<option value="casado">Casado</option>
								<option value="soltero">Soltero</option>
								<option value="union_libre">Unión Libre</option>
								<option value="viudo">Viudo</option>
							</select>
						</div>
						<div class="col-md-6">
							<label>GÉNERO</label><br>
							<select id="txt_genero" name="txt_genero" class="form-control">
								<option value="casado">Masculino</option>
								<option value="soltero">Femenino</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<label>TELÉFONO</label><br>
							<input type="text" id="txt_telefono" name="txt_telefono" class="form-control" placeholder="Teléfono">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-3">
							<button class="btn btn-primary" name="btn_guardar_datos" id="btn_guardar_datos">Actualizar Datos</button>
						</div>
					</div>
					<br>
				</div>
			</form>
		</div>
	</div>
</div>
