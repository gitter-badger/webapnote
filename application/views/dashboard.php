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
							<li class="current"><a href="#">Dashboard</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader" style="padding-bottom: 10px">Proyectos en Curso</h5>
						<div class="panel">
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
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader" style="padding-bottom: 10px">Proyectos Disponibles</h5>
						<div class="panel">
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
				<div class="row">
					<div class="large-3 columns">
						<h6 class="subheader">Usuarios más activos</h6>
						<div class="panel callout">
							
						</div>
					</div>
					<div class="large-3 columns">
						<h6 class="subheader">Productividad</h6>
						<div class="panel">

						</div>
					</div>
					<div class="large-4 columns">
						<h6 class="subheader">Mensajes <small>Inbox</small></h6>
						<div class="panel">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('dropdown'); ?>

<?php $this->load->view('footer'); ?>