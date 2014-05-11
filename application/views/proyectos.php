<?php $this->load->view('header'); ?>
	
	<!-- Main body -->
	<div class="app-main-body clearfix">

		<?php $this->load->view('dash-sidebar');?>

		<div class="large-8 columns app-content-main app-content">
			<div id="options-menu-dash-app">
				<div class="row">
					<div class="large-4 columns">
						<form>
							<input type="text" name="search" placeholder="¿Buscabas algo?" class="radius" style="padding-left: 35px;" />
							<i class="fi-magnifying-glass app-icon-search"></i>
						</form>
					</div>
					<div class="large-3 columns"></div>
					<div class="large-3 columns">
						<a href="#" data-options="align: left" data-dropdown="app-menu-options" class="app-icon-widget right"><i class="fi-widget"></i></a>
					</div>
				</div>
				<div class="row" style="margin-top: 20px;">
					<div class="large-10 column">
						<ul class="breadcrumbs">
							<li><a href="<?=base_url('dashboard');?>">Dashboard</a></li>
							<li class="current"><a href="<?=base_url('proyectos');?>">Proyectos</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Proyectos </h5>
						<div class="form-select large-5 options-sel">
							<select id="org-options" name="org">
								<?php foreach($organizaciones as $row): ?>
									<option value="0">Selecciona una Organización</option>
									<option value="<?=$row['c_rfc'];?>"><?=$row['c_name'];?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<div id="content-proyecto" class="panel callout">
							<p class="text-center" style="line-height: inherit !important;"><i class="fi-annotate" style="font-size: 50px;color: #AAAAAA;"></i></p>
							<h6 style="color: #AAAAAA;" class="text-center">Para comenzar selecciona una Organización</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu Tooltips Dropdowns -->
	<ul id="app-menu-options" style="border-radius: 5px !important; -webkit-border-radius: 5px !important; -moz-border-radius: 5px !important;" class="small f-dropdown" data-dropdown-content>
		<li><a href="#"><img style="margin-top: -3px;" src="<?=base_url('assets/img/thumbs');?>/<?=$this->session->userdata('u_photo');?>" height="15" width="15" /> Mi Cuenta</a></li>
		<li><a href="#"><i class="fi-torso" style="padding-right: 5px;"></i> Editar Perfil</a></li>
		<li><a href="#"><i class="fi-widget" style="padding-right: 5px;"></i> Configuración de la Cuenta</a></li>
		<li class="divider-li"></li>
		<li class="default-li"><a href="<?=base_url('dashboard/logout');?>"><i class="fi-power" style="padding-right: 5px;"></i> Cerrar Sesión</a></li>
	</ul>
	<!-- End Main body -->
	<!-- Modal Main body -->
	
	<!-- End Modal Main body -->

<?php $this->load->view('footer'); ?>