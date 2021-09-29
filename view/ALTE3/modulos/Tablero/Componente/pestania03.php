<div class="card card-info card-tabs">
	<div class="card-header p-0 pt-1">
		<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
			<?php foreach($controlador_obj->getArrTblRevSlider() as $rev_slider_id => $arr_det): ?>
			<li class="nav-item">
				<a class="nav-link<?=$controlador_obj->esSliderActivo($rev_slider_id) ?>" id="tab_rev_slider_<?=$rev_slider_id ?>_tab" href="<?= define_controlador('componentes', 'pestania03', false, array("rev_slider_id"=>$rev_slider_id)) ?>" role="tab" aria-controls="tab_rev_slider_<?=$rev_slider_id ?>" aria-selected="true">Slider <?=$rev_slider_id ?></a>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content" id="custom-tabs-one-tabContent">
			<div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel">
				<!-- Imagen -->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Imagen</h3>
					</div>
					<div class="card-body">
						<p class="small">Dimensión de imagen mínima recomendada: 1920x900</p>
						<?php if(count($controlador_obj->getArrTblAdjuntoRevSlider())):?>
							<div class="row">
								<?php foreach($controlador_obj->getArrTblAdjuntoRevSlider() as $arr_det):?>
									<div class="col-md-10">
										<img src="<?php echo $arr_det['ruta_archivo'].$arr_det['nom_arc_sist']; ?>" class="img-thumbnail"  style="max-height:300px; max-width:100%">
									</div>
									<div class="col-md-2">
										<form name="frm_borrar_adj" role="form" method="post" action="<?php echo define_controlador('adjuntofoto', 'borrar'); ?>">
											<input type="hidden" name="gale_cmp_id_nom" value="rev_slider_id">
											<input type="hidden" name="gale_cmp_id_val" value="<?php echo $controlador_obj->getCampoValor('rev_slider_id');?>">
											<input type="hidden" name="adjunto_id" value="<?php echo $arr_det['adjunto_id']; ?>">
											<?php echo $controlador_obj->getHTMLCamposOcultosBase(); ?>
											<button type="submit" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
										</form>
									</div>
								<?php endforeach;?>
							</div>
						<?php else:?>
							<form name="frm_adj_rev_slider" role="form" method="post" action="<?php echo define_controlador('adjuntofoto', 'adjuntar'); ?>" enctype="multipart/form-data">
								<input type="hidden" name="gale_cmp_id_nom" value="rev_slider_id">
								<input type="hidden" name="gale_cmp_id_val" value="<?php echo $controlador_obj->getCampoValor('rev_slider_id');?>">
								<input type="hidden" name="adjunto_tipo" value="rev_slider">
								<?php echo $controlador_obj->getHTMLCamposOcultosBase(); ?>
								<div class="form-group">
									<label for="archivo_subir">Subir imagen</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="archivo_subir"  name="archivo_subir">
											<label class="custom-file-label" for="archivo_subir">Seleccionar archivo</label>
										</div>
										<div class="input-group-append">
											<button type="submit" class="btn btn-info btn-flat"><i class="fas fa-file-upload"></i> Subir</button>
										</div>
									</div>
								</div>
							</form>	
						<?php endif;?>						
					</div>
				</div>
				<!-- Formulario -->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Textos</h3>
					</div>
					<form name="frm_rev_slider" role="form" method="post" action="<?= define_controlador('guardar', 'rev_slider'); ?>">
						<?= $controlador_obj->frm_al3->cmpOculto('rev_slider_id', $controlador_obj->getCampoValor('rev_slider_id')); ?>
						<?= $controlador_obj->getHTMLCamposOcultosBase(); ?>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<?=$controlador_obj->frm_al3->cmpTexto('titulo', 'Título'); ?>
								</div>
								<div class="col-md-6">
									<?=$controlador_obj->frm_al3->cmpTexto('descripcion', 'Sub-título'); ?>
								</div>	
								<div class="col-md-12">
									<label>Botón</label>
									<div class="row ml-3">
										<div class="col-md-6">
											<?=$controlador_obj->frm_al3->cmpTexto('btn_valor', 'Título'); ?>
										</div>
										<div class="col-md-6">
											<?= $controlador_obj->frm_al3->cmpSelectDeTbl('sitio_seccion_cve', 'sitio_seccion', 'sitio_seccion_cve', 'descripcion', '', 'Sección'); ?>
										</div>
									</div>
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
				</div>
					
			</div>
		</div>
	</div>
</div>

