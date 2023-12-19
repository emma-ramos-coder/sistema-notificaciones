<?php require("layout/header.php"); ?>
<h1 class="text-center">Nueva Notificación</h1>
<form action="" method="">
	<div class="col-md-6 mx-auto  border rounded-3 p-4 shadow">
		<div class="mb-3">
			<label for="titulo" class="form-label">Titulo: </label>
			<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de la Notificación">                        
		</div>
		<div class="mb-3">
			<label for="contenido" class="form-label">Contenido: </label>
			<textarea class="form-control" id="contenido" name="contenido" placeholder="Contenido de la notificación" rows="3"></textarea>			
		</div>
		<div class="mb-3">
			<label for="titulo" class="form-label">Destinatario: </label>
			<input type="text" class="form-control" id="destinatario" name="destinatario" placeholder="Destinatario de la Notificación">                        
		</div>		
		<div class="mb-3 row">
			<div class="col">
				<label for="fecha_creacion" class="form-label">Fecha de Creación:</label>
				<input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion">                        
			</div>
			<div class="col">
				<label for="fecha_inicio_publicacion" class="form-label mr-2">Fecha de inicio de publicación:</label>
				<input type="date" class="form-control" id="fecha_inicio_publicacion" name="fecha_inicio_publicacion">                        
			</div>
			<div class="col">
			
				<label for="fecha_fin_publicacion" class="form-label">Fecha de fin de publicación:</label>
				<input type="date" class="form-control" id="fecha_fin_publicacion" name="fecha_fin_publicacion">                        
			</div>			
		</div>
		<div class="mb-3 row">
			<div class="col">
				<label for="estado" class="form-label">Estado: </label>
				<select class="form-select" aria-label="Default select example" id="estado" name="estado">
					<option selected disabled>--Seleccione un estado--</option>
					<option value="activo">Activo</option>
					<option value="inactivo">Inactivo</option>
					<option value="pendiente">Pendiente de Publicación</option>
				</select>			
			</div>
			<div class="col">
				<label for="nombre" class="form-label">Categoría: </label>
				<select class="form-select" name="categoria_id">
					<option selected disabled>--Selecciona una Categoría--</option>        
						<?php
						require("controlador/CategoriaController.php");
						$categoriaController = new CategoriaController();
						$categorias = $categoriaController->listarA();						
						foreach ($categorias as $key => $value) 
							foreach ($value as $va) { 
								echo "<option value='".$va['id']."'>".$va['nombre']."</option>";                
							}
						?>
				</select>
			</div>	
		</div>	
		<div class="mb-3">
			<label for="imagen_portada" class="form-label">Imagen de Portada:</label>
			<input type="file" class="form-control" id="imagen_portada" name="imagen_portada">                        
		</div>		
		<button type="submit" class="btn btn-primary">Guardar</button>
		<a href="indexPublicacion.php" class="btn btn-danger m-2">Cancelar</a>
		<input type="hidden" name="m" value="guardar">		
	</div>
</form>
<?php require("layout/footer.php"); ?>