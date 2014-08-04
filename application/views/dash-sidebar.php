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
					<h6 class="subheader" style="font-size: 12px;"><span style="color: #ADADAD;"><i style="color: #F48584;padding-right: 5px;text-shadow: 0 0 4px #FFBFBE;" class="fi-record"></i> Conectado</span></h6>
				</div>
			</div>
			<div class="row">
				<div class="large-10 column">
					<ul class="side-nav">
						<li <?php evalActive('dashboard'); ?>><a href="<?=base_url('dashboard');?>"><i class="fi-home icon-menu-nav"></i> Dashboard</a></li>
						<li <?php evalActive('proyectos');?>><a href="<?=base_url('proyectos');?>"><i class="fi-database icon-menu-nav"></i> Proyectos</a></li>
						<li <?php evalActive('organizaciones');?>><a href="<?=base_url('organizaciones');?>"><i class="fi-web icon-menu-nav"></i> Organizaciones</a></li>
						<li <?php evalActive('reportes');?>><a href="<?=base_url('reportes');?>"><i class="fi-page-multiple icon-menu-nav"></i> Reportes</a></li>
						<li <?php evalActive('inbox');?>><a href="<?=base_url('inbox');?>"><i class="fi-mail icon-menu-nav"></i> Inbox <span class="badge-icon rounded right">30</span></a></li>
					</ul>
				</div>
			</div>
		</div>