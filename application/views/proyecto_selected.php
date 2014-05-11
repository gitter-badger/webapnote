
				<div class="row">
					<div class="large-10 column">
						<h5 class="subheader"> <a href="#" id="ad-proyecto" class="button radius tiny right" style="position: absolute; right: 15px; top: -8px;"><i></i> Añadir Nuevo Proyecto</a></h5>
					</div>
				</div>
				<br /><br />
				<div class="row" id="panel-form-proyecto">
					<div class="large-10 column">
						<div class="panel">
							<form>

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
								<?php foreach($organizaciones as $row){?>
									<tr>
										<td><?=$row['c_rfc'];?></td>
										<td><?=$row['c_name'];?></td>
										<td><?=$row['c_descri'];?></td>
										<td><?=$row['c_phone'];?></td>
										<td style="text-align: center;font-size: 20px;"><a href=""><i class="fi-eye"></i></a></td>
										<td style="text-align: center; font-size: 20px;"><a href="" class="btn-delete"><i class="fi-trash"></i></a> <a href=""><i class="fi-pencil"></i></a></td>
									</tr>
								<?php }?>
							</tbody>
						</table>
						<?php }else {?>
						<div class="panel secondary">
							<p class="text-center" style="line-height: inherit !important;"><i class="fi-annotate" style="font-size: 50px;color: #AAAAAA;"></i></p>
							<h6 style="color: #AAAAAA;" class="text-center">No tienes proyectos en esta organización.</h6>
						</div>
						<?php	} ?>
					</div>
				</div>
