<!-- CABECERA -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notificaciones</title>	
	<script type="text/javascript">
		function confirmar(){
			return confirm('¿Estás seguro?, se eliminaran los datos');
		}
	</script>	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
</head>
<body>
	<div class="container-fluid p-2 mb-3">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Notificaciones</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarScroll">
				<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php">Notificaciones</a>
					</li>					
					<li class="nav-item">
					<a class="nav-link active" href="indexCategoria.php">Categoria</a>
					</li>					
				</ul>				
				</div>
			</div>
		</nav>
	</div>
	<div class="container-fluid p-2 mb-3">

<!-- CUERPO -->
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
						<!-- usando un controlador para obtener los nombres de las categorias -->
                        <?php
						/* require("controlador/CategoriaController.php");
						$categoriaController = new CategoriaController();
						$categorias = $categoriaController->listarA();						
						foreach ($categorias as $key => $value) 
							foreach ($value as $va) { 
								echo "<option value='".$va['id']."'>".$va['nombre']."</option>";                
							} */
						?>
                    <option value="1">Noticia</option>
                    <option value="2">Evento</option>
                    <option value="3">Comunicado</option>
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
<!-- PIE -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		</div>
	</body>
</html>
