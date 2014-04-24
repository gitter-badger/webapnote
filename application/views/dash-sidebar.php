		<?php 
			function evalActive($uri){
				if(strstr($_SERVER['REQUEST_URI'], $uri)){echo 'class="active"';}
			}
		?>
		<div class="large-2 columns app-sidebar-main">
			<div class="row dash-app">
				<div class="large-4 columns">
					<img class="th" src="<?=base_url('assets/img/thumbs');?>/<?=$this->session->userdata('u_photo');?>" height="70" width="70" />
				</div>
				<div class="large-6 columns dash-app-profile">
					<h6 style="color: #EEE; font-weight: 600; font-size: 14px;"><?=$this->session->userdata('u_nombre');?> <?=$this->session->userdata('u_apep');?></h6>
					<h6 class="subheader" style="font-size: 12px;"><?=$this->session->userdata('u_username');?></h6>
					<h6 class="subheader" style="font-size: 12px;"><span><i style="color: #59A336;" class="fi-burst"></i> Conectado</span></h6>
				</div>
			</div>
			<div class="row">
				<div class="large-10 column">
					<ul class="side-nav">
						<li <?php evalActive('dashboard'); ?>><a href="dashboard"><i class="fi-home icon-menu-nav"></i> Dashboard</a></li>
						<li <?php evalActive('notificaciones'); ?>><a href="#"><i class="fi-comment icon-menu-nav"></i> Notificaciones <span class="badge-icon rounded right">5</span></a></li>
						<li <?php evalActive('proyectos'); ?>><a href="#"><i class="fi-database icon-menu-nav"></i> Proyectos</a></li>
						<li <?php evalActive('organizaciones'); ?>><a href="#"><i class="fi-web icon-menu-nav"></i> Organizaciones</a></li>
						<li <?php evalActive('reportes'); ?>><a href="#"><i class="fi-page-multiple icon-menu-nav"></i> Reportes</a></li>
						<li <?php evalActive('inbox'); ?>><a href="#"><i class="fi-mail icon-menu-nav"></i> Mensajes Privados <span class="badge-icon rounded right">30</span></a></li>
					</ul>
				</div>
			</div>
		</div>