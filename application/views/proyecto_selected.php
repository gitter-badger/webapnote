<?php $this->load->view('header'); ?>
	
	<!-- Main body -->
	<div class="app-main-body clearfix">

		<?php $this->load->view('dash-sidebar');?>

		<div class="large-8 columns app-content-main app-content">
			<div id="options-menu-dash-app">
				
				<?php $this->load->view('bartop'); ?>

				<div class="row" style="margin-top: 20px;">
					<div class="large-10 column">
						<ul class="breadcrumbs">
							<li><a href="<?=base_url('dashboard');?>">Dashboard</a></li>
							<li><a href="<?=base_url('proyectos');?>">Proyectos</a></li>
							<li class="current"><a href="<?=base_url();?>">Proyectos en <strong><?php echo $orgpro; ?></strong></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Proyectos en <?=$orgpro;?> <a href="#" id="btn-open-pro" class="button radius tiny right" style="position: absolute; right: 15px; top: -8px;"><i></i>Crear Nuevo Proyecto</a></h5>
					</div>
				</div>
				<div class="row" id="panel-form-id">
					<div class="large-10 column">
						<div class="panel">
							<?php echo form_open(base_url('proyectos').'/add/'.$orgpro); ?>
								<div class="row">
									<div class="large-10 column">
										<label><b>Nombre del Proyecto</b></label>
										<input type="text" name="pname" placeholder="Introduce el nombre del nuevo proyecto">
										<i class="fi-credit-card app-icon-input-edit"></i>
									</div>
								</div>
								<div class="row">
									<div class="large-6 columns">
										<label><b>Categoría</b></label>
										<br />
										<select name="category" id="cat">
											<option>Selecciona una opción</option>
											<?php foreach($categorias as $row): ?>
											<option value="<?=$row['id_category']?>"><?=$row['cat_name']?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="large-4 columns">
										<label><b>Responsable</b></label>
										<br />
										<select name="responsable" id="new">
											<option>Selecciona una opción</option>
										</select>
									</div>
								</div>
								<br />
								<div class="row">
									<div class="large-5 columns">
										<label><b>Conceptos</b></label>
										<div class="row collapse">
											<div class="large-7 columns">
												<input type="text" name="todo" placeholder="Comienza escribiendo un concepto...">
												<i class="fi-credit-card app-icon-input-edit" style="top: 27px !important; left: 14px !important;"></i>
											</div>
											<div class="large-3 columns">
												<input type="button" class="button postfix" style="padding-left: 0 !important;" value="Nuevo Concepto">
											</div>
										</div>
									</div>
									<div class="large-5 columns">
										<label><b>Descripción</b></label>
										<br />
										<textarea cols="10" rows="13" placeholder="Describe los requerimientos o actividades al realizar en este proyecto, también puedes comentar un poco sobre el proyecto."></textarea>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<?php if(!empty($proyectos)){ ?>
						<table class="large-10">
							<thead>
								<tr>
									<th>Nombre del Proyecto</th>
									<th>Descripción</th>
									<th>Creado en</th>
									<th>Iniciado en</th>
									<th style="text-align:center;">TEAM</th>
									<th width="80"></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($proyectos as $row){?>
									<tr>
										<td><?=$row['c_proy_name'];?></td>
										<td><?=$row['c_proy_descri'];?></td>
										<td><?=$row['c_fecha_creado'];?></td>
										<td><?=$row['c_fecha_ini'];?></td>
										<td style="text-align: center;font-size: 20px;"><a href=""><i class="fi-eye"></i></a></td>
										<td style="text-align: center; font-size: 20px;"><a href="" class="btn-delete"><i class="fi-trash"></i></a> <a href=""><i class="fi-pencil"></i></a></td>
									</tr>
								<?php }?>
							</tbody>
						</table>
						<?php }else {?>
						<div class="panel callout">
							<p class="text-center" style="line-height: inherit !important;"><i class="fi-annotate" style="font-size: 50px;color: #AAAAAA;"></i></p>
							<h6 style="color: #AAAAAA;" class="text-center">Usted no tiene proyectos en esta Organización.</h6>
						</div>
						<?php	} ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('dropdown'); ?>

<?php $this->load->view('footer'); ?>