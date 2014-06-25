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
							<li><a href="<?=base_url('organizaciones');?>">Organizaciones</a></li>
							<li class="current"><a href="#">Equipo de Trabajo <span style="font-weight: bold;"><?=$porg['c_rfc'];?></span></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<!-- Reservado para alerta de Actualizacion -->
						<?php if(isset($validation['validacion'])): ?>
								<?php echo $validation['validacion']; ?>
						<?php elseif(isset($query['result'])): ?>
							<div class="alert-box success radius" data-alert>
								Usuario Agregado Correctamente al equipo de trabajo.
								<a href="#" class="close">&times;</a>
							</div>
						<?php endif; ?> 
					</div>
				</div>
				<div class="row" id="add-user-te">
					<div class="large-10 columns">
						<div class="row">
							<div class="large-10 column">
								<h5 class="subheader">Agregar usuario al equipo</h5>
							</div>
						</div>
						<div class="panel">
							<?php echo form_open(base_url('organizaciones').'/updateUsers/'.$porg['c_rfc']); ?>
								<div class="row">
									<div class="large-4 columns">
										<input type="text" name="t_email" placeholder="Correo Electrónico">
										<i class="fi-mail app-icon-input-edit"></i>
									</div>
									<div class="large-6 columns">
										<input type="text" name="t_username" placeholder="Nombre de Usuario">
										<i class="fi-torso app-icon-input-edit"></i>
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns">
										<input type="text" name="t_name" placeholder="Nombre">
										<i class="fi-align-left app-icon-input-edit"></i>
									</div>
									<div class="large-3 columns">
										<input type="text" name="t_apep" placeholder="Apellido Materno">
										<i class="fi-align-left app-icon-input-edit"></i>
									</div>
									<div class="large-3 columns">
										<input type="text" name="t_apem" placeholder="Apellido Paterno">
										<i class="fi-align-left app-icon-input-edit"></i>
									</div>
								</div>					
								<!-- <div class="row">
									<div class="large-7 columns">
										<input type="password" name="t_pass" placeholder="Contraseña">
										<i class="fi-lock app-icon-input-edit"></i>
									</div>
									<div class="large-3 columns">
										<input type="button" id="rpwd" class="large-10 button success tiny radius" value="Generar Contraseña">
									</div>
								</div> -->
								<div class="row">
									<div class="large-7 columns">
										<input type="submit" class="button radius small large-10" value="Registrar Usuario al Equipo de Trabajo">
									</div>
									<div class="large-3 columns"><input type="button" id="cancel-team" class="button radius small large-10" value="Cancelar" ></div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Equipo de Trabajo <a href="#" id="reg-user-t" class="button radius tiny right" style="position: absolute; right: 15px; top: -8px;"><i></i> Añadir Usuario de Equipo de Trabajo</a></h5>
						<?php if(!empty($team)): ?>
							<table class="large-10">
								<thead>
									<tr>
										<th>Nombre de Usuario</th>
										<th>Nombre</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Correo Electrónico</th>
										<th style="text-align: center;">Opciones</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($team as $row): ?>
									<tr>
										<td><?=$row['user'];?></td>
										<td><?=$row['nombre'];?></td>
										<td><?=$row['apep'];?></td>
										<td><?=$row['apem'];?></td>
										<td><?=$row['email']?></td>
										<td style="text-align: center; font-size: 20px;"><a href="<?=base_url('organizaciones/deleteTUser');?>/<?=$row['user'];?>/<?=$this->uri->segment(3);?>" class="btn-delete"><i class="fi-trash"></i></a> <a href="<?=base_url('organizaciones/profileTeam');?>/<?=$row['user'];?>" data-reveal-id="modal-demo" data-reveal-ajax="true"><i class="fi-torso"></i></a></td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						<?php else: ?>
						<div class="panel callout">
							<p class="text-center" style="line-height: inherit !important;"><i class="fi-torsos-all" style="font-size: 50px;color: #AAAAAA;"></i></p>
							<h6 style="color: #AAAAAA;" class="text-center">Aún no tiene usuarios asignados a esta organización.</h6>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Mis Organizaciones </h5>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<?php if(!empty($datos)){ ?>
						<table class="large-10">
							<thead>
								<tr>
									<th>RFC Compañia</th>
									<th>Nombre</th>
									<th>Descripción</th>
									<th>Telefono</th>
									<th style="text-align:center;">TEAM</th>
									<th width="80">Opciones</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($datos as $row){?>
									<tr>
										<td><?=$row['c_rfc'];?></td>
										<td><?=$row['c_name'];?></td>
										<td><?=$row['c_descri'];?></td>
										<td><?=$row['c_phone'];?></td>
										<td style="text-align: center;font-size: 20px;"><a href="<?=base_url('organizaciones/team');?>/<?=$row['c_rfc'];?>"><i class="fi-eye"></i></a></td>
										<td style="text-align: center; font-size: 20px;"><a href="<?=base_url('organizaciones/delete');?>/<?=$row['c_rfc'];?>" class="btn-delete"><i class="fi-trash"></i></a> <a href="<?=base_url('organizaciones/edit');?>/<?=$row['c_rfc'];?>"><i class="fi-pencil"></i></a></td>
									</tr>
								<?php }?>
							</tbody>
						</table>
						<?php }else {?>
						<div class="panel callout">
							<p class="text-center" style="line-height: inherit !important;"><i class="fi-annotate" style="font-size: 50px;color: #AAAAAA;"></i></p>
							<h6 style="color: #AAAAAA;" class="text-center">Aún no tienes organizaciones asignadas a tu cuenta.</h6>
						</div>
						<?php	} ?>
					</div>
				</div>
				<br />
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
	<div id="app-add-org" class="reveal-modal small" data-reveal>
		<div class="row" id="app-error-msg-org" style="padding-top: 20px;">
			<div class="app-error-data-org panel radius" style="margin-right: 60px;"></div>
			<div class="row" style="margin-right: 45px;">
				<div class="large-10 column">
					<a href="#" class="close-error-msg-org button small radius large-10">Regresar al Formulario</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-10 column">
				<h5 class="subheader error-title" style="padding-top: 20px;padding-bottom: 10px;">Agrega una Organización a tu cuenta.</h5>
			</div>
		</div>
		<form id="add-form-org">
			<div class="row">
				<div class="large-4 columns">
					<label>
						<input type="text" name="rfc" placeholder="RFC Compañía" class="radius" />
					</label>
				</div>
				<div class="large-6 columns">
					<label>
						<input type="text" name="name" placeholder="Nombre de la Compañía" class="radius" />
					</label>
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns">
					<label>
						<input type="text" name="phone" placeholder="Telefono" class="radius" />
					</label>
				</div>
				<div class="large-7 columns">
					<label>
						<input type="text" name="descripcion" placeholder="Descripción" class="radius" />
					</label>
				</div>
			</div>
			<div class="row">
				<div class="large-10 column">
					<input type="submit" class="button radius small large-10" value="Añadir Compañía" />
				</div>
			</div>
		</form>
		<a href="#" class="close-reveal-modal">&#215;</a>
	</div>
	<div class="reveal-modal small" id="modal-demo" data-reveal>
		<a href="close-reveal-modal">&#215;</a>
	</div>
	<!-- End Modal Main body -->

<?php $this->load->view('footer'); ?>