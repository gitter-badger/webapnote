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
						<video autoplay loop id="bgVideo">
							<source src="<?=base_url('assets/img/variousways.mp4');?>" type="video/mp4">
						</video>
					</div>
				</div>
				<div class="row app-form-main">
					<div class="large-10 column">
						<form>
							<div class="row">
								<i class="fi-mail app-icon-input"></i>
								<input class="radius" type="text" placeholder="Correo Electrónico" />
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
			<div class="small-6 medium-6 large-8 columns app-content-main">
				<div class="row">
					<div class="large-4 columns">asddsa</div>
					<div class="large-6 columns">asdasd</div>
				</div>
				<div class="row app-services-main" data-equalizer>
					<div class="large-3 columns">
						<div class="panel radius text-center" data-equalizer-watch>
							<span class="icon-services"><i class="fi-clipboard-pencil"></i> <i class="fi-arrow-right"></i> <i class="fi-clipboard-notes"></i></span>
							<p class="text-justify app-info-service">Crea tus reportes apartir de anotaciones y fotografías, en cada uno de los proyectos
							en los que colaboras de una forma mucho más sencilla.</p>
						</div>
					</div>
					<div class="large-4 columns">
						<div class="panel callout radius text-center" data-equalizer-watch>
							<span class="icon-services"><i class="fi-torso-business"></i> <i class="fi-arrow-right"></i> <i class="fi-torsos-all"></i> </span>
							<p class="text-justify app-info-service">Publica tus proyectos y compartelos solo con tu equipo, con esto
							tu equipo de trabajo podrá seleccionar en que proyecto participar, haciendose responsable de culminar el proyecto.</p>
						</div>
					</div>
					<div class="large-3 columns">
						<div class="panel radius" data-equalizer-watch>
							<span class="icon-services"><i class="fi-"></i></span>
							<p class="text-justify app-info-service">Además tendrás las siguientes opciones:</p>
							<p class="text-justify app-info-service">
								<ul class="app-info-service">
									<li>Gestión de tus proyectos.</li>
									<li>Interacción entre los equipos de trabajo.</li>
									<li>Comunicación mediante Mensajes y Comentarios.</li>
								</ul>
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-9 large-centered column">
						<p class="text-center app-span-main">La primer aplicación que mejorará tu productividad en la realización de tus reportes, 
						sin demoras, ni contratiempos, usando la tecnología móvil como principal intermediario. </p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main body -->

<?php $this->load->view('footer'); ?>