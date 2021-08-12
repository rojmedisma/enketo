<label>Ubicación</label>
<div class="row pl-3">
	<div class="col-md-6 col-lg-3">
		<?php echo $controlador_obj->frm_al3->cmpSelectDeTbl('prod_edo', 'cat_estado', 'cat_estado_id', 'descripcion', '', 'Estado', array("con_select2"=>true)) ?>
	</div>
	<div class="col-md-6 col-lg-4">
		<?php echo $controlador_obj->frm_al3->cmpSelectDeTbl('prod_mpo', 'cat_municipio', 'cat_municipio_id', 'descripcion', $controlador_obj->getDatoVistaValor('and_mpo'), 'Municipio', array("con_select2"=>true)) ?>
		<div id="div_spinner_mpo" class="spinner-border spinner-border-sm" style="display: none"></div>
	</div>
	<div class="col-md-12 col-lg-5">
		<?php echo $controlador_obj->frm_al3->cmpSelectDeTbl('prod_loc', 'cat_localidad', 'cat_localidad_id', 'descripcion', $controlador_obj->getDatoVistaValor('and_loc'), 'Localidad', array("con_select2"=>true)) ?>
		<div id="div_spinner_loc" class="spinner-border spinner-border-sm" style="display: none"></div>
	</div>
</div>
<h4>A. Información general</h4>
<div class="row pl-3">
	<div class="col-md-12 col-lg-6">
		<?php echo $controlador_obj->frm_al3->cmpTexto('prod_nombre', 'Nombre completo') ?>
	</div>
	<div class="col-md-12 col-lg-4">
		<?php echo $controlador_obj->frm_al3->cmpTexto('prod_telefono', 'Teléfono') ?>
	</div>
</div>
<h4>B. Maíz para vender</h4>
<div class="row pl-3">
	<div class="col-md-6 col-lg-6">
		<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('maiz_tot_variedades', 'maiz_tot_variedades', '¿Cuál es la cantidad de variedades de maíz que maneja?') ?>
	</div>
	<div class="col-12" id="div_vari_1">
		<label>Variedad 1</label>
		<div class="row pl-3">
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpNum('vari_1_cantidad', 2, 'Cantidad') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('vari_1_fecha', 'Fecha') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('vari_1_milpa', 'Milpa (sembrado con otro especie)') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('vari_1_agroquimicos', 'Agroquímicos') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('vari_1_transporte', 'Transporte') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('vari_1_semilla_origen', 'Origen de la semilla') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpNum('vari_1_precio', 2, 'Precio') ?>
			</div>
		</div>
	</div>
	<div class="col-12" id="div_vari_2">
		<label>Variedad 2</label>
		<div class="row pl-3">
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpNum('vari_1_cantidad', 2, 'Cantidad') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('vari_1_fecha', 'Fecha') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('vari_1_milpa', 'Milpa (sembrado con otro especie)') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('vari_1_agroquimicos', 'Agroquímicos') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('vari_1_transporte', 'Transporte') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('vari_1_semilla_origen', 'Origen de la semilla') ?>
			</div>
			<div class="col-md-6 col-lg-3">
				<?php echo $controlador_obj->frm_al3->cmpNum('vari_1_precio', 2, 'Precio') ?>
			</div>
		</div>
	</div>
</div>