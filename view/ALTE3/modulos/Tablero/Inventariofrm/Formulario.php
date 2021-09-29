<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"><?php echo $controlador_obj->getDatoVistaValor('tit_forma'); ?></h3>
			</div>
			<form name="frm_cat" role="form" method="post" action="<?php echo define_controlador('guardar', 'inventario'); ?>">
				<?php echo $controlador_obj->frm_al3->cmpOculto('inventario_id', $controlador_obj->getCampoValor('inventario_id')); ?>
				<?php echo $controlador_obj->frm_al3->cmpOculto('inhabilitar', ''); ?>
				<?php echo $controlador_obj->getHTMLCamposOcultosBase(); ?>
				<div class="card-body">
					<h4>Identificación</h4>
					<div class="row">
						<div class="col-md-2"><?php echo $controlador_obj->frm_al3->cmpNum('veh_anio', 0, "Año/Year"); ?></div>
						<div class="col-md-3">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeTbl('veh_marca', 'cat_veh_marca', 'cat_veh_marca_id', 'descripcion', '', 'Marca/Make'); ?>
							<a href="<?= define_controlador("catfrmgen", "cat_veh_marca"); ?>">Agregar opción para Marca</a>
								
						</div>
						<div class="col-md-3">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeTbl('veh_modelo', 'cat_veh_modelo', 'cat_veh_modelo_id', 'descripcion', $controlador_obj->getDatoVistaValor('and_veh_modelo'), 'Modelo/Model'); ?>
							<a href="<?= define_controlador("catfrmgen", "cat_veh_modelo"); ?>">Agregar opción para Modelo</a>
						</div>
						<div class="col-md-4"><?php echo $controlador_obj->frm_al3->cmpTexto('veh_modelo_det', "Más Detalle"); ?></div>
					</div>
					<h4>Propiedades</h4>
					<div class="row">
						<div class="col-md-4"><?php echo $controlador_obj->frm_al3->cmpTexto('veh_consejo', "Consejo o dato práctico"); ?></div>
					</div>
					<div class="row">
						<div class="col-md-3"><?php echo $controlador_obj->frm_al3->cmpNum('veh_precio', 2, "Precio regular"); ?></div>
						<div class="col-md-3"><?php echo $controlador_obj->frm_al3->cmpNum('veh_precio_descuento', 2, "Precio con descuento"); ?></div>
					</div>
					<div class="row">
						<div class="col-md-3"><?php echo $controlador_obj->frm_al3->cmpNum('veh_millas', 0, "Millas/Mileage"); ?></div>
						<div class="col-md-3"><?php echo $controlador_obj->frm_al3->cmpTexto('veh_motor', "Motor/Engine"); ?></div>
						<div class="col-md-3"><?php echo $controlador_obj->frm_al3->cmpTexto('veh_color_interior', "Color interior/Interior Color"); ?></div>
						<div class="col-md-3"><?php echo $controlador_obj->frm_al3->cmpTexto('veh_color_exterior', "Color exterior/Exterior Color"); ?></div>
						
					</div>
					<div class="row">
						<div class="col-md-3"><?php echo $controlador_obj->frm_al3->cmpTexto('veh_transmision', "Transmisión/Transmission"); ?></div>
						<div class="col-md-3"><?php echo $controlador_obj->frm_al3->cmpTexto('veh_traccion', "Tracción/Drivetrain"); ?></div>
						<div class="col-md-3"><?php echo $controlador_obj->frm_al3->cmpTexto('veh_combustible', "Combustible/Fuel"); ?></div>
					</div>
					<h4>Pestaña: Descripción/Description</h4>
					<div class="row">
						<div class="col-md-12">
							<?php echo $controlador_obj->frm_al3->cmpTextArea('veh_descripcion'); ?>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="btn-group float-right">
						<?php if($controlador_obj->tienePermiso('ae-inventario')){?>
						<button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Guardar</button>
						<?php }?>
					</div>
				</div>
			</form>
		</div>
	</div>	
</div>
<!-- Modal -->
<div class="modal fade" id="mdl_reg_marca">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Agregar opción para: Marca</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="frm_mdl_reg_marca" role="form" method="post" action="<?php echo define_controlador('guardar', 'cat_veh_marca') ?>" enctype="multipart/form-data">
				<?php echo $controlador_obj->getHTMLCamposOcultosBase(); ?>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<?php echo $controlador_obj->frm_al3->cmpTexto('veh_reg_desc', 'Agregar marca'); ?>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary" id="btn_adjuntar">Guardar</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>