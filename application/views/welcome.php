<?php $this->load->view('header'); ?>

		<!-- Main body -->
		<div class="app-main-body clearfix">
			<div class="small-4 medium-4 large-2 columns app-sidebar-main">
				<div class="row">
					<div class="large-10 column">
						<a href="#" class="app-logotype">Apnote</a>
					</div>
				</div>
				<div class="row app-info-main">
					<div class="large-10 column">
						<video autoplay loop id="bgVideo" style="width: 720px;position: relative; left: -170px;">
							<source src="<?=base_url('assets/img/variousways.mp4');?>" type="video/mp4">
						</video>
					</div>
				</div>
				<div class="row app-form-main">
					<div class="large-10 column">
						<form>
							<div class="row">
								<i class="fi-torso app-icon-input"></i>
								<input class="radius" type="text" placeholder="Usuario o Correo Electrónico" />
							</div>
							<div class="row">
								<i class="fi-lock app-icon-input"></i>
								<input class="radius" type="password" placeholder="Contraseña" />
							</div>
							<div class="row">
								<input type="submit" class="button radius small expand" value="Iniciar Sesión" />
							</div>
							<div class="row">
								<p class="app-message">¿No estas registrado? <a href="#">Crear una cuenta ahora</a></p>
							</div>
						</form>
					</div>
				</div>
				<div class="row app-footer-main">
					<div class="large-2 columns">
						<a href="#" class="app-info-button"><i class="fi-info"></i></a>
					</div>
					<div class="large-8 columns">
						<p class="app-message app-copyright">Copyright &copy; <?=date('Y');?> by Apnote, Devs.</p>
					</div>
				</div>
			</div>
			<div class="small-6 medium-6 large-8 columns app-content-main">sadasd</div>
		</div>
		<!-- End Main body -->

<?php $this->load->view('footer'); ?>