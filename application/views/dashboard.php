<?php $this->load->view('header'); ?>
	
	<!-- Main body -->
	<div class="app-main-body clearfix">
		<div class="large-2 columns app-sidebar-main dash-fix-sidebar">
			<div class="row" style="margin-bottom: 70px;">
				<div class="large-10">
					<a href="#" class="app-logo-dash-menu">Apnote</a>
				</div>
			</div>
			<div class="large-10">
				<aside class="left-off-canvas-menu dash-fix-canvas">
					<ul class="off-canvas-list">
						<li><label><i class="fi-layout dash-icon-label"></i> Dashboard</label></li>
						<li><label><i class="fi-torso-business dash-icon-label"></i> Organización</label></li>
						<li><a href="#">Equipo de Trabajo/Usuarios</a></li>
						<li><a href="#">Mis Organizaciones</a></li>
						<li><label><i class="fi-projection-screen dash-icon-label"></i> Proyectos</label></li>
						<li><a href="#">Gestión de Proyectos</a></li>
						<li><a href="#">Avances en Proyectos</a></li>
						<li><label><i class="fi-clipboard-notes dash-icon-label"></i> Reportes</label></li>
					</ul>
				</aside>
			</div>
		</div>
		<div class="large-8 columns app-content-main"></div>
	</div>
	<!-- End Main body -->

<?php $this->load->view('footer'); ?>