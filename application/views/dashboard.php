<?php $this->load->view('header'); ?>
	
	<!-- Main body -->
	<div class="app-main-body clearfix">
		<div class="large-2 columns app-sidebar-main">
			<div class="row dash-app">
				<div class="large-4 columns">
					<img class="th" src="<?=base_url('assets/img/thumbs');?>/<?=$this->session->userdata('u_photo');?>" height="70" width="70" />
				</div>
				<div class="large-6 columns dash-app-profile">
					<h6 style="color: #EEE; font-weight: 600; font-size: 14px;"><?=$this->session->userdata('u_nombre');?> <?=$this->session->userdata('u_apep');?></h6>
					<h6 class="subheader" style="font-size: 12px;"><?=$this->session->userdata('u_username');?> <span><i style="color: #59A336;" class="fi-link"></i> En linea</span></h6>
				</div>
			</div>
			<div class="row">
				<div class="large-10 column">
					<ul class="side-nav">
						<li class="active"><a href="#"><i class="fi-home icon-menu-nav"></i> Dashboard</a></li>
						<li><a href="#"><i class="fi-database icon-menu-nav"></i> Proyectos</a></li>
						<li><a href="#"><i class="fi-web icon-menu-nav"></i> Organizaciones</a></li>
						<li><a href="#"><i class="fi-page-multiple icon-menu-nav"></i> Reportes</a></li>
						<li><a href="#"><i class="fi-mail icon-menu-nav"></i> Mensajes</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="large-8 columns app-content-main"></div>
	</div>
	<!-- End Main body -->

<?php $this->load->view('footer'); ?>