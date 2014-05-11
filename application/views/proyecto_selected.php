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
							<li><a href="<?=base_url('proyectos');?>">Proyectos</a></li>
							<li class="current"><a href="<?=base_url();?>">Proyectos en <strong><?php echo $orgpro; ?></strong></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader">Proyectos <a href="#" id="btn-open-pro" class="button radius tiny right" style="position: absolute; right: 15px; top: -8px;"><i></i> Añadir Nuevo Proyecto</a></h5>
					</div>
				</div>
				<div class="row" id="panel-form-id">
					<div class="large-10 column">
						<div class="panel">
							<form>
								<div class="row">
									<div class="large-5 columns">
										<input type="text" name="p_name" placeholder="Nombre del Proyecto">
										<i class="fi-database app-icon-input-edit"></i>
										<input type="text" value="<?=$orgpro;?>" disabled>
									</div>
									<div class="large-5 columns">
										<textarea rows="10" name="p_des" placeholder="Descripción de Proyecto"></textarea>
									</div>
								</div>
							</form>
						</div>
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
										<td style="text-align: center; font-size: 20px;"><a href="<?=base_url('organizaciones/delete');?>/<?=$row['c_rfc'];?>" class="btn-delete"><i class="fi-trash"></i></a> <a href="<?=base_url('organizaciones/edit');?>/<?=$row['c_rfc'];?>"><i class="fi-pencil"></i></a></td>
									</tr>
								<?php }?>
							</tbody>
						</table>
						<?php }else {?>
						<div class="panel callout">
							<p class="text-center" style="line-height: inherit !important;"><i class="fi-annotate" style="font-size: 50px;color: #AAAAAA;"></i></p>
							<h6 style="color: #AAAAAA;" class="text-center">Usted no tiene proyectos en esta Organización.</h6>
						</div>
						<?php	} ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Main body -->
	
	<!-- End Modal Main body -->

<?php $this->load->view('footer'); ?>