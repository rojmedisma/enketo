<div class="card card-default card-outline">
	<div class="card-header">
		<div class="d-flex justify-content-between">
			<h3 class="card-title"><?php echo $controlador_obj->getDatoVistaValor('cat_cuestionario_desc'); ?></h3>
		</div>
	</div>
	<div class="card-body">
		<form name="frm_cuest" role="form" method="post" action="<?php echo define_controlador('cuestforma', 'actualizar'); ?>">
			<?php echo $controlador_obj->getHTMLCamposOcultosCuest(); ?>
			<div class="row">
				<div class="col-md-12">
					<?php echo $controlador_obj->getHTMLBotonesMenu(); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Cuestionario Id:</label><spam class="pl-2"><?php echo $controlador_obj->getCuestionarioId(); ?></spam>
				</div>
				<div class="col-md-8">
					<label>Estatus:</label><spam class="pl-2"><?php echo $controlador_obj->getCampoValor('estatus_cuest_desc'); ?></spam>
				</div>
			</div>
			<?php echo $controlador_obj->getHTMLValidacionesLista(); ?>
			<?php include_once $controlador_obj->getSubRutaVista(); ?>
			<div class="row">
				<div class="col-md-12">
					<?php echo $controlador_obj->getHTMLBotonesMenu(); ?>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- /.card -->
