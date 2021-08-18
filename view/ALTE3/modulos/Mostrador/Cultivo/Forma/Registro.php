<!-- Registro de cultivo -->
				<form name="frm_cat" role="form" method="post" action="<?php echo define_controlador('guardar', 'cultivo'); ?>">
					<?php echo $controlador_obj->frm_al3->cmpOculto('cultivo_id', $controlador_obj->getCampoValor('cultivo_id')); ?>
					<?php echo $controlador_obj->frm_al3->cmpOculto('cat_usuario_id', $controlador_obj->getCampoValor('cat_usuario_id')); ?>
					<?php echo $controlador_obj->getHTMLCamposOcultosBase(); ?>
					
					<h4><?php echo $controlador_obj->getDatoVistaValor('tit_forma'); ?></h4>
					<div class="row">
						<div class="col-md-4"><?php echo $controlador_obj->frm_al3->cmpSelectDeTbl('cat_cultivo_id', 'cat_cultivo', 'cat_cultivo_id', 'descripcion', '', 'Variedad'); ?></div>
					</div>
					<div class="row">
						<div class="col-md-4"><?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('semilla_origen', 'semilla_origen', 'Origen de la semilla'); ?></div>
						<div class="col-md-4"><?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('produc_metodo', 'produc_metodo', 'Forma de producción'); ?></div>
						<div class="col-md-4"><?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agroqui_uso', 'agroqui_uso', 'Uso de agroquímicos'); ?></div>
						<div class="col-md-6">
							<label>Certificaciones</label>
							<?php
							echo $controlador_obj->frm_al3->cmpCheckbox('certifica_1', 'Donec nec nisi sit amet lorem bibendum mattis vel tincidunt justo');
							echo $controlador_obj->frm_al3->cmpCheckbox('certifica_2', 'Sed aliquet risus eget libero maximus cursus');
							echo $controlador_obj->frm_al3->cmpCheckbox('certifica_3', 'Suspendisse in libero sollicitudin, laoreet sem eget');
							echo $controlador_obj->frm_al3->cmpCheckbox('certifica_4', 'Aenean malesuada tellus consectetur dui eleifend fringilla');
							?>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="btn-group float-right">
								<?php if($controlador_obj->tienePermiso('ae-cultivo')){?>
								<button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Guardar</button>
								<?php }?>
							</div>
						</div>
					</div>
				</form>


