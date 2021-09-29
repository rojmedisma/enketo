<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<h3 class="card-title">Formulario</h3>
			</div>
			<div class="col-md-6">
				
			</div>
		</div>
	</div>
	<form name="frm_cmptes" role="form" method="post" action="<?php echo define_controlador('guardar', 'componentes'); ?>">
		<?php echo $controlador_obj->frm_al3->cmpOculto('componentes_id', $controlador_obj->getCampoValor('componentes_id')); ?>
		<?php echo $controlador_obj->getHTMLCamposOcultosBase(); ?>
		<div class="card-body">
			<h4>Identificación del negocio</h4>
			<div class="row">
				<div class="col-md-3"><?= $controlador_obj->frm_al3->cmpCorreo('nego_correo', 'Correo'); ?></div>
				<div class="col-md-3"><?= $controlador_obj->frm_al3->cmpTexto('nego_telefono', 'Teléfono'); ?></div>
				<div class="col-md-3"><?= $controlador_obj->frm_al3->cmpTexto('nego_facebook', 'Facebook'); ?></div>
				<div class="col-md-3"><?= $controlador_obj->frm_al3->cmpTexto('nego_instagram', 'Instagram'); ?></div>
				
			</div>
			<h4>Ubicación</h4>
			<div class="row">
				<div class="col-md-6"><?= $controlador_obj->frm_al3->cmpTexto('nego_direccion', 'Dirección'); ?></div>
				<div class="col-md-12">
					<?= $controlador_obj->frm_al3->cmpTexto('nego_url_mapa', 'URL Gooogle Map'); ?>
					<p class="small">Para obtener el URL: 1. Ir google maps. 2. Ubicar la dirección. 3. Seleccionar Share 4. Seleccionar la pestaña Embed map. 5. Extraer la url del tag iframe</p>
				</div>
				
			</div>
			<h4>Sección: Noticia importante</h4>
			<div class="row">
				<div class="col-md-6"><?= $controlador_obj->frm_al3->cmpTexto('nego_noticia', 'Noticia'); ?></div>
				<div class="col-md-6"><?= $controlador_obj->frm_al3->cmpTexto('nego_noticia_tit', 'Ventana - Título'); ?></div>
				<div class="col-md-12"><?= $controlador_obj->frm_al3->cmpTextArea('nego_noticia_cont', 'Ventana - Contenido'); ?></div>
			</div>
			<h4>Sección: About Us</h4>
			<div class="row">
				<div class="col-md-12"><?= $controlador_obj->frm_al3->cmpTextArea('nego_nosotros', ''); ?></div>
			</div>
			<h4>Sección: Get Updates and Special Offers</h4>
			<div class="row">
				<div class="col-md-12"><?= $controlador_obj->frm_al3->cmpTextArea('nego_solicitud_info', 'Texto de solicitud'); ?></div>
			</div>
			<h4>Sección: Pie de página</h4>
			<div class="row">
				<div class="col-md-12"><?= $controlador_obj->frm_al3->cmpTextArea('nego_pie_txt', 'Texto en pie de página'); ?></div>
				<div class="col-md-6">
					<h5>Horarios</h5>
					<div class="row">
						<div class="col-md-6"><label>Lunes / Monday</label></div>
						<div class="col-md-6"><?= $controlador_obj->frm_al3->cmpTexto('nego_horario_lun'); ?></div>
					</div>
					<div class="row">
						<div class="col-md-6"><label>Martes / Tuesday</label></div>
						<div class="col-md-6"><?= $controlador_obj->frm_al3->cmpTexto('nego_horario_mar'); ?></div>
					</div>
					<div class="row">
						<div class="col-md-6"><label>Miércoles / Wednesday</label></div>
						<div class="col-md-6"><?= $controlador_obj->frm_al3->cmpTexto('nego_horario_mie'); ?></div>
					</div>
					<div class="row">
						<div class="col-md-6"><label>Jueves / Thursday</label></div>
						<div class="col-md-6"><?= $controlador_obj->frm_al3->cmpTexto('nego_horario_jue'); ?></div>
					</div>
					<div class="row">
						<div class="col-md-6"><label>Viernes / Friday</label></div>
						<div class="col-md-6"><?= $controlador_obj->frm_al3->cmpTexto('nego_horario_vie'); ?></div>
					</div>
					<div class="row">
						<div class="col-md-6"><label>Sábado / Saturday</label></div>
						<div class="col-md-6"><?= $controlador_obj->frm_al3->cmpTexto('nego_horario_sab'); ?></div>
					</div>
					<div class="row">
						<div class="col-md-6"><label>Domingo / Sunday</label></div>
						<div class="col-md-6"><?= $controlador_obj->frm_al3->cmpTexto('nego_horario_dom'); ?></div>
					</div>
					
				</div>
			</div>
			<h4>En Detalles del vehículo (Vehicle details), pestaña: Additional Info</h4>
			<div class="row">
				<div class="col-md-4">
					<?= $controlador_obj->frm_al3->cmpTexto('inv_inf_ad_tit', 'Título'); ?>
				</div>
				<div class="col-md-8">
					<?= $controlador_obj->frm_al3->cmpTextArea('inv_inf_ad_desc', 'Contenido'); ?>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="btn-group float-right">
				<?php if($controlador_obj->tienePermiso('ae-cmpte')){?>
				<button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Guardar</button>
				<?php }?>
			</div>
		</div>
	</form>
		
</div><!-- /.card -->