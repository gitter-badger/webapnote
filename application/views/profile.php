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
				<br />
				<br />
				<div class="row">
					<div class="large-10 column">
						<div class="subheader" style="padding-left: 15px; large-10">Mi Perfil Personal <a id="edit-profile" href="#" class="button small right radius" style="position:absolute; padding: 10px !important;top:-5px;right: 15px;">Editar Perfil</a> <a id="save-profile" href="#" class="button success small right radius" style="display: none; position:absolute; padding: 10px !important;top:-5px;right: 120px;">Guardar Cambios</a></div>
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
										<form class="group-profile-info">
										<div class="row">
											<div class="large-10 column">
												<div class="row">
													<div class="large-4 columns">
														<label><b>Nombre</b></label>
														<input type="text" name="uname" value="<?=$this->session->userdata('u_nombre');?>" disabled>
														<i class="fi-indent-more app-icon-input-edit"></i>
													</div>
													<div class="large-3 columns">
														<label><b>Apellido Paterno</b></label>
														<input type="text" name="uapep" value="<?=$this->session->userdata('u_apep');?>" disabled>
														<i class="fi-indent-more app-icon-input-edit"></i>
													</div>
													<div class="large-3 columns">
														<label><b>Apellido Materno</b></label>
														<input type="text" name="uapem" value="<?=$this->session->userdata('u_apem');?>" disabled>
														<i class="fi-indent-more app-icon-input-edit"></i>
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
				
			</div>
		</div>
	</div>

	<?php $this->load->view('dropdown'); ?>

<?php $this->load->view('footer'); ?>