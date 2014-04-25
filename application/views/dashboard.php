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
							<li class="current"><a href="#">Dashboard</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<div class="panel">
							<h5 style="padding-bottom: 10px">Proyectos en Curso</h5>
							<div class="row">
								<div class="large-2 columns"><div class="panel callout"></div></div>
								<div class="large-2 columns"><div class="panel callout"></div></div>
								<div class="large-2 columns"><div class="panel callout"></div></div>
								<div class="large-2 columns"><div class="panel callout"></div></div>
								<div class="large-2 columns"><div class="panel callout"></div></div>
							</div>
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

<?php $this->load->view('footer'); ?>