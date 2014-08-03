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
							<li class="current"><a href="#">Editando <?=$porg['c_rfc'];?></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<!-- Reservado para alerta de Actualizacion -->
						<?php if(isset($validation['validacion'])): ?>
							<div class="alert-box warning radius" data-alert>
								<?php echo $validation['validacion']; ?>
								<a href="#" class="close">&times;</a>
							</div>
						<?php elseif(isset($query['result'])): ?>
							<div class="alert-box success radius" data-alert>
								Datos actualizados correctamente.
								<a href="#" class="close">&times;</a>
							</div>
						<?php endif; ?> 
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Panel de Edición</h5>
						<div class="panel">
							<?php echo form_open(base_url('organizaciones').'/update/'.$porg['c_rfc']); ?>
								<div class="row">
									<div class="large-4 columns">
										<label>RFC de Compañía</label>
										<input type="text" value="<?=$porg['c_rfc'];?>" name="erfc" disabled/>
										<i class="fi-credit-card app-icon-input-edit"></i>
									</div>
									<div class="large-6 columns">
										<label>Nombre de la Compañía</label>
										<input type="text" value="<?=$porg['c_name'];?>" name="ename" />
										<i class="fi-background-color app-icon-input-edit"></i>
									</div>
								</div>
								<div class="row">
									<div class="large-2 columns">
										<label>Teléfono</label>
										<input type="text" value="<?=$porg['c_phone'];?>" name="ephone" id="phone-edit" />
										<i class="fi-telephone app-icon-input-edit"></i>
									</div>
									<div class="large-8 columns">
										<label>Descripción</label>
										<input type="text" value="<?=$porg['c_descri'];?>" name="edes" />
										<i class="fi-indent-less app-icon-input-edit"></i>
									</div>
								</div>
								<div class="row">
									<div class="large-10 column">
										<input type="submit" class="button radius large-10 small" value="Guardar Cambios" />
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Mis Organizaciones <!--<a href="#" data-reveal-id="app-add-org" class="button radius tiny right" style="position: absolute; right: 15px; top: -8px;"><i></i> Añadir Organización</a>--></h5>
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
									<th width="80"></th>
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
										<td style="text-align: center; font-size: 20px;"><a href="#" id="del" value="<?=$row['c_rfc'];?>" class="btn-delete"><i class="fi-trash"></i></a> <a href="<?=base_url('organizaciones/edit');?>/<?=$row['c_rfc'];?>"><i class="fi-pencil"></i></a></td>
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
			</div>
		</div>
	</div>

	<!-- dropdown menu -->
	<?php $this->load->view('dropdown'); ?>

<?php $this->load->view('footer'); ?>