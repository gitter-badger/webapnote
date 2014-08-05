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
							<li class="current"><a href="<?=base_url('profile');?>">Mi perfil</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Mi Perfil Personal <a id="edit-profile" href="#" class="button small right radius" style="width: 107px;position:absolute; padding: 10px !important; padding-left: 35px !important; top:-5px;right: 30px;"><i class="fi-page-edit" style="position: absolute; top: 5px; left: 25px; font-size: 20px;"></i> Editar</a> <a id="save-profile" href="#" class="button success small right radius" style="display: none; position:absolute; padding: 10px !important; padding-left: 35px !important; top:-5px;right: 145px;"><i class="fi-save" style="position: absolute; top: 5px; left: 10px; font-size: 20px;"></i> Guardar Cambios</a></h5>
						<br />
						<div class="large-2 columns">
							<div id="th-profile" class="th" style="position: relative;">
								<a href="#" class="button" style="display: none; position: absolute; font-size: 9px !important; text-align: left;padding-left: 38px; bottom:-20px; background: rgba(0,0,0,0.4);"><i class="fi-camera" style="position: absolute;top: 14px; left: 12px; font-size: 24px;"></i> Update Profile Picture</a>
								<img class="" src="<?=base_url('assets/img/thumbs');?>/<?=$this->session->userdata('u_photo');?>" height="175" width="175" />
							</div>
						</div>
							<div class="large-8 columns">
								<div class="row">
									<div class="large-10 column">
										<div class="row">
											<div class="large-4 columns">
												<label><b>Nombre de Usuario</b></label>
												<input type="text" name="usern" value="<?=$this->session->userdata('u_username');?>" disabled>
												<i class="fi-torso app-icon-input-edit"></i>
											</div>
											<div class="large-6 columns">
												<label><b>Correo Eléctronico</b></label>
												<input type="text" name="uemail" value="<?=$this->session->userdata('u_email');?>" disabled>
												<i class="fi-mail app-icon-input-edit"></i>
											</div>
										</div>
										<form id="sv-profile" class="group-profile-info">
										<div class="row">
											<div class="large-10 column">
												<div class="row">
													<div class="large-4 columns" id="gp-nombre">
														<label><b>Nombre</b></label>
														<input type="text" name="uname" value="<?=$this->session->userdata('u_nombre');?>" disabled>
														<i class="fi-indent-more app-icon-input-edit"></i>
														<span class="label alert warning radius span-error hide"></span>
													</div>
													<div class="large-3 columns" id="gp-apep">
														<label><b>Apellido Paterno</b></label>
														<input type="text" name="uapep" value="<?=$this->session->userdata('u_apep');?>" disabled>
														<i class="fi-indent-more app-icon-input-edit"></i>
														<span class="label alert warning radius span-error hide"></span>
													</div>
													<div class="large-3 columns" id="gp-apem">
														<label><b>Apellido Materno</b></label>
														<input type="text" name="uapem" value="<?=$this->session->userdata('u_apem');?>" disabled>
														<i class="fi-indent-more app-icon-input-edit"></i>
														<span class="label alert warning radius span-error hide"></span>
													</div>
												</div>
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Proyectos Asignados</b></h5>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Proyectos Concluidos</b></h5>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Especialidades</b> <small>Solo puede seleccionar 3 como máximo.</small></h5>
							<div class="row" id="categ">
							<br />
								<?php 
								$i = 0;
								if(!empty($micats)):
								foreach($micats as $row): ?>
									<?php if($i == 1): ?>
										<div class="large-4 columns">
											<a href="#" class="button round large-10"><?=$row['cat_name'];?></a>
										</div>
									<?php else: ?>
										<div class="large-3 columns">
											<a href="#" class="button round large-10"><?=$row['cat_name'];?></a>
										</div>
									<?php endif; $i++; ?>
								<?php endforeach; endif;?>							
								<?php if($i <= 2 || empty($micats)):?>
								<div class="large-3 columns">
									<a href="#" data-reveal-id="addcategory" class="button round secondary" style="padding-left: 50px;"><i class="fi-plus" style="font-size: 19px; position: absolute; left: 30px; top: 12px;"></i> Agregar una nueva</a>
								</div>
								<?php endif;?>
							</div>
					</div>
				</div>					
				
			</div>
		</div>
	</div>

	<?php $this->load->view('dropdown'); ?>
	<!-- Modal Add new Category -->
	<?php if($i <= 2 || empty($micats)):?>
	<div id="addcategory" class="reveal-modal medium" data-reveal>
		<br />
		<br />
		<form id="add-category">
			<div class="row">
				<div class="large-10 column">
					<select name="categories">
						<option>Selecciona una opción</option>
						<?php foreach($categorias as $row): ?>
							<option value="<?=$row['id_category'];?>"><?=$row['cat_name'];?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="large-10 column">
					<input type="submit" class="button radius large-10" value="Agregar">
				</div>
			</div>
		</form>
		<a href="#" class="close-reveal-modal">&#215;</a>	
	</div>
	<?php endif;?>
	<!-- end modal add -->

<?php $this->load->view('footer'); ?>