<?php echo $controlador_obj->getHTMLIntroduccion(); ?>
<h4>SECCIÓN I. Identificación del productor(a)</h4>
<?php echo $controlador_obj->getHTMLInfoLink('info_sec_ident_p', 'Acerca de', 'En esta sección se le pide identificarse. La información se utiliza para poder referenciar toda la información que provea a un punto o zona geográfica para su sector en específico. Sus datos son protegidos de acuerdo con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares. El fin único es contar con la información técnica para la estimación de las emisiones de compuestos y gases de efecto invernadero, por lo que el tratamiento final de la información garantiza el anonimato.'); ?>
<label>1. Sectores a los que se dedica</label>
<p class="small">Marque los sectores aplicables a su unidad de producción.</p>
<div class="row pl-3">
	<div class="col-md-4">
		<div class="form-group">
			<?php
			echo $controlador_obj->frm_al3->cmpCheckbox('prod_sector1', 'Agricultura');
			echo $controlador_obj->frm_al3->cmpCheckbox('prod_sector2', 'Ganadería');
			echo $controlador_obj->frm_al3->cmpCheckbox('prod_sector3', 'Pesca');
			echo $controlador_obj->frm_al3->cmpCheckbox('prod_sector4', 'Acuacultura');
			echo $controlador_obj->frm_al3->validacionSinCmp('div_an_prod_sector');
			?>
		</div>
	</div>
</div>
<label>2. Por favor diga su identidad de género y su edad</label>
<div class="row pl-3">
	<div class="col-md-3">
		<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('prod_i_genero', 'i_genero', 'Identidad de género');?>
	</div>
	<div class="col-md-2">
		<?php echo $controlador_obj->frm_al3->cmpNum('prod_edad', 0, 'Edad'); ?>
	</div>
</div>

<label>3. Clave de identificación del productor</label>
<p class="small">Por favor indique si es productor independiente o si responde al cuestionario como una organización de productores. Según corresponda, por favor indique su clave CURP o RFC.</p>
<div class="row pl-3">
	<div class="col-md-4"><?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('prod_tipo', 'prod_tipo', 'Tipo de productor');?></div>
	<div class="col-md-4">
		<div id="div_prod_curp">
			<?php echo $controlador_obj->frm_al3->cmpTexto('prod_curp', 'CURP'); ?>
		</div>
		<div id="div_prod_rfc">
			<?php echo $controlador_obj->frm_al3->cmpTexto('prod_rfc', 'RFC'); ?>
		</div>
	</div>
	<div class="col-md-4" id="div_prod_integ">
		<?php echo $controlador_obj->frm_al3->cmpNum('prod_integrantes', 0, '¿Cuántos integrantes tiene su organización?'); ?>
	</div>
</div>
<div class="row pl-3" id="div_prod_rnpa">
	<div class="col-md-4">
		<?php echo $controlador_obj->frm_al3->cmpTexto('prod_rnpa', 'RNPA (Solo para sectores Pesca y Acuacultura)'); ?>
	</div>
</div>
<div class="row pl-3">
	<div class="col-md-12">
		<?php echo $controlador_obj->getHTMLInfoLink('info_nota_id_prod', 'Información respecto al llenado de cuestionario por tipo de productor', 'En caso de tratarse de una persona física, moral o grupo de personas (como organización), el cuestionario siempre deberá ser respondido en términos de una unidad de producción. En caso de que la organización esté compuesta por varias unidades de producción, deben considerarse todas las prácticas que ocurren en la misma. Si no se conoce la información de todas las unidades de producción que conformen la organización, se solicita llenar el cuestionario como productor individual y no como organización.'); ?>
	</div>
</div>
<label>4. Ubicación de la unidad de producción</label>
<div class="row pl-3">
	<div class="col-md-2">
		<?php echo $controlador_obj->frm_al3->cmpSelectDeTbl('prod_edo', 'cat_estado', 'cat_estado_id', 'descripcion', '', 'Estado', array("con_select2"=>true)) ?>
	</div>
	<div class="col-md-4">
		<?php echo $controlador_obj->frm_al3->cmpSelectDeTbl('prod_mpo', 'cat_municipio', 'cat_municipio_id', 'descripcion', $controlador_obj->getDatoVistaValor('and_mpo'), 'Municipio', array("con_select2"=>true)) ?>
		<div id="div_spinner_mpo" class="spinner-border spinner-border-sm" style="display: none"></div>
	</div>
	<div class="col-md-6">
		<?php echo $controlador_obj->frm_al3->cmpSelectDeTbl('prod_loc', 'cat_localidad', 'cat_localidad_id', 'descripcion', $controlador_obj->getDatoVistaValor('and_loc'), 'Localidad', array("con_select2"=>true)) ?>
		<div id="div_spinner_loc" class="spinner-border spinner-border-sm" style="display: none"></div>
	</div>
</div>
<div class="row pl-3">
	<div class="col-md-12">
		<label>Escriba las coordenadas ubicadas en el centro de su unidad de producción</label>
		<div class="row pl-3">
			<div class="col-md-4">
				<?php echo $controlador_obj->frm_al3->cmpNumCoord('prod_geo_latitud', 'Latitud');?>
			</div>
			<div class="col-md-4">
				<?php echo $controlador_obj->frm_al3->cmpNumCoord('prod_geo_longitud', 'Longitud');?>
			</div>
		</div>
		<div class="row pl-3">
			<div class="col-md-12">
				<label>De contar con el polígono del área de su unidad de producción, favor de adjuntar el archivo</label>
				<?php //echo $controlador_obj->frm_al3->cmpOculto('prod_geo_adjunto_id', $controlador_obj->getCampoValor('prod_geo_adjunto_id'));?>
				<div id="div_adjunta_cont">
					<?php echo $controlador_obj->getHTMLAdjunto(); ?>
				</div>
				
			</div>
		</div>
	</div>	
</div>
