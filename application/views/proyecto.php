<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
</head>
<body>
	<div class="row">
		<h5 class="subheader text-center" style="margin-bottom: 30px;font-weight: 700; text-transform: uppercase;">Información de Proyecto</h5>
		<div class="large-6 columns">
			<ul class="inline-list">
				<li>
					<label><b>Nombre del Proyecto</b></label>
					<p><?=$infoProyecto['proy_name'];?></p>
				</li>
				<li>
					<label><b>Descripción</b></label>
					<p class="text-justify"><?=$infoProyecto['proy_descri'];?></p>
				</li>
				<li>
					<label><b>Fecha de Creación</b></label>
					<p><?=$infoProyecto['fecha_creado'];?></p>
				</li>
				<li>
					<label><b>Estado del Proyecto</b></label>
					<p>
						<?php 
							if($infoProyecto['estado'] == '0000-00-00 00:00:00'){
								echo "En Espera";
							}else{
								echo "En Curso";
							}
						?>
					</p>
				</li>
				<li>
					<label><b>Responsable</b></label>
					<p><?php echo $infoProyecto['res_name'].''.$infoProyecto['res_apep'].''.$infoProyecto['res_apem'];?></p>
				</li>
				<li>
					<label><b>Categoría</b></label>
					<p><?=$infoProyecto['proy_categoria'];?></p>
				</li>
			</ul>	
		</div>
		<div class="large-4 columns">
			<label class="text-center"><b>Actividades/Tareas</b></label>
			<br />
			<form>
				<div class="row collapse postfix-round">
					<div class="large-7 columns">
						<input type="text" placeholder="Buscar Actividad" />
					</div>
					<div class="large-3 columns">
						<input type="submit" class="button postfix"/>
					</div>
				</div>
				<div class="row collapse" style="top: -21px;">
					<select>
						<option>Selecciona una opción</option>
					</select>
				</div>
			</form>
			<ul class="nav-side" style="margin-top: -30px">
				<li><span class="secondary radius label large-10">Item 1 <a href="#">&#215;</a></span></li>
				<li><span class="secondary radius label large-10">Item 1 <a href="#">&#215;</a></span></li>
				<li><span class="secondary radius label large-10">Item 1 <a href="#">&#215;</a></span></li>
				<li><span class="secondary radius label large-10">Item 1 <a href="#">&#215;</a></span></li>
				<li><span class="secondary radius label large-10">Item 1 <a href="#">&#215;</a></span></li>		
			</ul>
		</div>
	</div>
	<a href="#" class="close-reveal-modal">&#215;</a>
</body>
</html>