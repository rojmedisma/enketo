<h4>Sección B</h4>
<h4 class="text-success">Sección con preguntas más extensas y complejas</h4>
<?php echo $controlador_obj->getHTMLInfoLink('info_sec_2_cpp', 'Acerca de', 'En esta sección podrán ver más ejemplos de preguntas. La funcionalidad es muy similar a la descrita y explicada en las secciones  Principal y Sección A. La principal diferencia es que se hace con opciones de pregunta más extensas y complejas'); ?>
<div class="row pl-3">
	<div class="col-md-12">
		<label>1. Habilitación de preguntas y sub-secciones.</label>
		<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Mostrar preguntas ocultas" data-id_info="#div_info_pec_p2"><i class="fas fa-info"></i></button>
		<?php for($i=1; $i<=6; $i++){?>
		<div class="row pl-3">
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p2r'.$i.'_especie', $controlador_obj->getCmpLlaveVal('pec_especie_g1', $i));?>
				<div id="<?php echo 'div_pec_p2r'.$i.'_especie_sub'; ?>">
					<div class="row pl-3">
						<div class="col-md-7">
							<label>Para la especie 1</label>
							<div class="row">
								<div class="col-md-8">
									<label>Productos</label>
								</div>
								<div class="col-md-4">
									<label>Col 1. numérica</label>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<label>Col 2. numérica</label>
						</div>
						<div class="col-md-3">
							<label>Opciones</label>
						</div>
					</div>
					<?php foreach($controlador_obj->getArrCmpLlave('pec_hato_e'.$i) as $j=>$llave_val){?>
					<div class="row pl-3">
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-8">
									<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p2r'.$i.'_'.$j.'_hato', $llave_val);?>
								</div>
								<div class="col-md-4">
									<?php echo $controlador_obj->frm_al3->cmpNum('pec_p2r'.$i.'_'.$j.'_cabe', 2);?>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<?php echo $controlador_obj->frm_al3->cmpNum('pec_p2r'.$i.'_'.$j.'_peso', 2);?>
						</div>
						<div class="col-md-3">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p2r'.$i.'_'.$j.'_prod', 'pec_p2_e'.$i) ?>
							<?php if($i==2){
								echo $controlador_obj->frm_al3->cmpNum('pec_p2r'.$i.'_'.$j.'_prod_d', 0, 'Días de ordeña al año');
							}
							?>
						</div>
					</div>
					<?php }?>
					<div class="row pl-3">
						<div class="col-md-12">
							<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p2r'.$i.'_hato'); ?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<?php }?>
		<?php for($i=7; $i<=15; $i++){?>
		<div class="row pl-3">
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p2r'.$i.'_especie', $controlador_obj->getCmpLlaveVal('pec_especie_g2', $i));?>
				<div id="<?php echo 'div_pec_p2r'.$i.'_especie_sub'; ?>">
					<div class="row pl-3">
						<div class="col-md-3">
						<?php 
						if($i==15){
							echo $controlador_obj->frm_al3->cmpTexto('pec_p2r15_especie_esp', 'Especificar');
						}
						?>
						</div>
					</div>
					<div class="row pl-3">
						<div class="col-md-2">
							<label>Dato numérico 1</label>
						</div>
						<div class="col-md-2">
							<label>Dato numérico 2</label>
						</div>
						<div class="col-md-3">
							<label>Opciones</label>
						</div>
					</div>
					<div class="row pl-3">
						<div class="col-md-2">
							<?php echo $controlador_obj->frm_al3->cmpNum('pec_p2r'.$i.'_cabe', 2);?>
						</div>
						<div class="col-md-2">
							<?php echo $controlador_obj->frm_al3->cmpNum('pec_p2r'.$i.'_peso', 2);?>
						</div>
						<div class="col-md-3">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p2r'.$i.'_prod', 'pec_p2_e7_15') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
		<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p2'); ?>
	</div>
</div>
<div class="row pl-3">
	<div class="col-md-12">
		<label>2. Habilitación de renglones</label>
		<div class="row pl-3">
			<div class="col-md-4">
				<label>Aplica renglón</label>
			</div>
			<div class="col-md-1">
				<label>Cantidad</label>
			</div>
			<div class="col-md-2">
				<label>Unidad de medida</label>
			</div>
			<div class="col-md-1">
				<label>Cantidad</label>
			</div>
			<div class="col-md-2">
				<label>Unidad de medida</label>
			</div>
		</div>
		<?php for($i=1; $i<=10; $i++){?>
		<div class="row pl-3">
			<div class="col-md-4">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p3r'.$i.'_t_ene', $controlador_obj->getCmpLlaveVal('pec_t_ene', $i));?>
			</div>
			<?php if($i!=10){?>
			<div class="col-md-1">
				<?php echo $controlador_obj->frm_al3->cmpNum('pec_p3r'.$i.'_cant', 2);?>
			</div>
			<div class="col-md-2">
				<?php echo $controlador_obj->getCmpLlaveVal('pec_p3_um', $i); ?>
			</div>
			<div class="col-md-1">
				<?php echo $controlador_obj->frm_al3->cmpNum('pec_p3r'.$i.'_sup', 2);?>
			</div>
			<div class="col-md-2">
				<p>Hectáreas</p>
			</div>
			<?php }?>
		</div>
		<?php }?>
		<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p3'); ?>
	</div>
</div>
<div class="row pl-3">
	<div class="col-md-12">
		<label>3. Pregunta sencilla con opciones múltiples</label>
		<p class="small">Al seleccionar la última opción, se despliega un campo para especificar</p>
		<?php for($i=1; $i<=13; $i++){?>
		<div class="row pl-3">
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p4r'.$i, $controlador_obj->getCmpLlaveVal('pec_p4', $i));?>
			</div>
		</div>
		<?php }?>
		<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p4'); ?>
		<div class="row pl-3">
			<div class="col-md-3">
				<?php echo $controlador_obj->frm_al3->cmpTexto('pec_p4r13_esp', 'Especificar'); ?>
			</div>
		</div>
	</div>
</div>
<div class="row pl-3" id="div_pec_p5">
	<div class="col-md-12">
		<label>4. Campo checkbox que despliega de sub-preguntas</label>
		<div class="row pl-3" id="div_pec_p5_sec_A">
			<div class="col-md-12">
				<label>Primera sección</label>
			</div>
			<?php for($i=1; $i<=4; $i++){?>
			<div class="col-md-12" >
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p5r'.$i.'_donde', $controlador_obj->getCmpLlaveVal('pec_p5_donde', $i));?>
				<div id="<?php echo 'div_pec_p5r'.$i.'_donde_sub'; ?>">
					<?php if($i==4){?>
					<div class="row pl-3">
						<div class="col-md-6">
							<?php echo $controlador_obj->frm_al3->cmpTexto('pec_p5r'.$i.'_donde_esp', 'Especificar'); ?>
						</div>
					</div>
					<?php }?>
					<div class="row pl-3">
						<div class="col-md-6">
							<label>Campos de tipo select 1 y 2</label>
							<div class="row">
								<div class="col-md-6">
									<label>Seleccionar</label>
								</div>
								<div class="col-md-6">
									<label>Seleccionar</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<label>Campo select 3</label>
						</div>
					</div>
					<div class="row pl-3">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p5r'.$i.'_lluvia', 'pec_p5_lluv') ?>
								</div>
								<div class="col-md-6">
									<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p5r'.$i.'_secas', 'pec_p5_sec') ?>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p5r'.$i.'_dieta', 'pec_p5_diet') ?>
						</div>
					</div>
				</div>	
			</div>
			<?php }?>
			<div class="col-md-12" >
				<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p5_a'); ?>
			</div>
		</div><!-- /#div_pec_p5_sec_A -->
		<div class="row pl-3" id="div_pec_p5_sec_B">
			<div class="col-md-12">
				<label>Segunda sección</label>
				<div class="row pl-3">
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p5r4', 'Fusce vulputate quam quis augue ultrices, dictum viverra elit consequat.');?>
					</div>
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p5r5', 'Nunc porta lacus sed sapien mollis, id commodo dui tempus.');?>
						<div class="row pl-3" id="div_pec_p5r5_sub">
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p5r5_1', 'Ut a mi id lacus condimentum tempor ut vel lorem.');?>
							</div>
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p5r5_2', 'Morbi sed libero nec arcu dapibus maximus non a erat.');?>
							</div>
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p5r5_3', 'Sed ut felis ut velit hendrerit tempor eu et velit.');?>
							</div>
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p5r5_4', 'In malesuada justo ut eros iaculis fringilla.');?>
							</div>
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p5r5_5', 'Maecenas suscipit purus a aliquam tempus.');?>
							</div>
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p5r5_6', 'Otro');?>
							</div>
							<div class="col-md-4">
								<?php echo $controlador_obj->frm_al3->cmpTexto('pec_p5r5_6_esp', 'Especificar'); ?>
							</div>
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p5r5'); ?>
							</div>
							<div class="col-md-12">
								<div class="row pl-3">
									<div class="col-md-6">
										<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p5r5_3_1', 'pec_p5r5_3_1', 'Campo select') ?>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p5r6', 'Pellentesque et augue dignissim, placerat velit laoreet, rhoncus tellus.');?>
					</div>
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p5_b'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row pl-3" id="div_pec_p6">
	<div class="col-md-12">
		<div id="div_pec_p6_tit">
			<label>5. Desbloqueo de opción</label>
			<div class="row pl-3">
				<div class="col-md-3">
					<label></label>
				</div>
				<div class="col-md-2">
					<label>Dato numérico</label>
				</div>
			</div>
		</div>
		<?php for($i=1; $i<=3; $i++){?>
		<div class="row pl-3" id="<?php echo 'div_pec_p6r'.$i; ?>">
			<div class="col-md-3">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p6r'.$i.'_espe', $controlador_obj->getCmpLlaveVal('pec_p6_espe', $i));?>
			</div>
			<div class="col-md-2">
				<?php echo $controlador_obj->frm_al3->cmpNum('pec_p6r'.$i.'_prod', 2) ?>
			</div>
		</div>
		<?php }?>
		<div class="row pl-3">
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p6'); ?>
			</div>
		</div>
	</div>
</div>
<div class="row pl-3" id="div_pec_p7">
	<div class="col-md-12">
		<div id="div_pec_p7_tit">
			<label>6. Despliegue de opciones que dependen de lo seleccionado en la pregunta 1</label>
			<div class="row pl-3">
				<div class="col-md-3">
					<label>Opciones</label>
				</div>
				<div class="col-md-2">
					<label>Porcentaje</label>
				</div>
				<div class="col-md-2">
					<label>Cantidad</label>
				</div>
			</div>
		</div>
		<?php for($i=1; $i<=5; $i++){?>
		<div class="row pl-3" id="<?php echo 'div_pec_p7r'.$i; ?>">
			<div class="col-md-3">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p7r'.$i.'_espe', $controlador_obj->getCmpLlaveVal('pec_p7_espe', $i));?>
			</div>
			<div class="col-md-1">
				<?php echo $controlador_obj->frm_al3->cmpNum('pec_p7r'.$i.'_porc', 0) ?>
			</div>
			<div class="col-md-1">
				<p>%</p>
			</div>
			<?php if($i>=4){?>
			<div class="col-md-2">
				<?php echo $controlador_obj->frm_al3->cmpNum('pec_p7r'.$i.'_crias', 0) ?>
			</div>
			<?php }?>
		</div>
		<?php }?>
		<div class="row pl-3">
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p7'); ?>
			</div>
		</div>
	</div>
</div>
<div class="row pl-3" id="div_pec_p8">
	<div class="col-md-12">
		<label>7. Despliegue de pregunta dependiente de la pregunta 1</label>
		<div class="row pl-3">
			<div class="col-md-2">
				<?php echo $controlador_obj->frm_al3->cmpNum('pec_p8', 0) ?>
			</div>
			<div class="col-md-2">
				Años
			</div>
		</div>
	</div>
</div>
<div class="row pl-3" id="div_pec_p9">
	<div class="col-md-12">
		<label>8. Despliegue de pregunta dependiente de la pregunta 1</label>
		<div class="row pl-3">
			<div class="col-md-2">
				<?php echo $controlador_obj->frm_al3->cmpNum('pec_p9', 0) ?>
			</div>
			<div class="col-md-2">
				Meses
			</div>
		</div>
	</div>
</div>
<div class="row pl-3" id="div_pec_p10">
	<div class="col-md-12">
		<div id="div_pec_p10_tit">
			<label>9. Despliegue de opciones dependientes de lo seleccionado en la pregunta 1</label>
			<div class="row pl-3">
				<div class="col-md-4">
					<label></label>
				</div>
				<div class="col-md-2">
					<label>Cantidad 1</label>
				</div>
				<div class="col-md-2">
					<label>Cantidad 2</label>
				</div>
			</div>
		</div>
		<?php for($i=1; $i<=3; $i++){?>
		<div class="row pl-3" id="<?php echo 'div_pec_p10r'.$i; ?>">
			<div class="col-md-4">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p10r'.$i.'_espe', $controlador_obj->getCmpLlaveVal('pec_10_espe', $i));?>
			</div>
			<div class="col-md-2">
				<?php echo $controlador_obj->frm_al3->cmpNum('pec_p10r'.$i.'_h_dia', 0) ?>
			</div>
			<div class="col-md-2">
				<?php echo $controlador_obj->frm_al3->cmpNum('pec_p10r'.$i.'_d_anio', 0) ?>
			</div>
		</div>
		<?php }?>
		<div class="row pl-3" id="div_pec_p10r4">
			<div class="col-md-4">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p10r4_espe', $controlador_obj->getCmpLlaveVal('pec_10_espe', 4));?>
			</div>
		</div>
		<div class="row pl-3">
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p10'); ?>
			</div>
		</div>
	</div>
</div>
<div class="row pl-3">
	<div class="col-md-12">
		<label>10. Habilitación de columna de porcentaje</label>
		<div class="row pl-3">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<label>Ver porcentaje</label>
						<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Método de manejo" data-id_info="#div_info_pec_p11"><i class="fas fa-info"></i></button>
					</div>
					<div class="col-md-3">
						<label>Porcentaje</label>
						<p class="small">(debe sumar 100%)</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r1', 'Opción 1 (Sin campo select)');?>
				<div class="row" id="div_pec_p11r1_sub">
					<div class="col-md-3">		
					</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r1_porc', 0) ?>
					</div>
					<div class="col-md-1">
						<p>%</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r2', 'Opción 2 (Con campo select)');?>
				<div id="div_pec_p11r2_sub">
					<div class="row">
						<div class="col-md-3">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p11r2_p', 'pec_p11r2_p');?>
						</div>
						<div class="col-md-2">
							<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r2_porc', 0) ?>
						</div>
						<div class="col-md-1">
							<p>%</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r3', 'Opción 3 (Con campo select)');?>
				<div id="div_pec_p11r3_sub">
					<div class="row">
						<div class="col-md-3">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p11r3_p', 'pec_p11r3_p');?>
						</div>
						<div class="col-md-2">
							<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r3_porc', 0) ?>
						</div>
						<div class="col-md-1">
							<p>%</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r4', 'Opción 4 (Con campo select)');?>
				<div id="div_pec_p11r4_sub">
					<div class="row">
						<div class="col-md-3">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p11r4_p', 'pec_p11r4_p');?>
						</div>
						<div class="col-md-2">
							<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r4_porc', 0) ?>
						</div>
						<div class="col-md-1">
							<p>%</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r5', 'Opción 5 (Sin campo select)');?>
				<div class="row" id="div_pec_p11r5_sub">
					<div class="col-md-3">
						
					</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r5_porc', 0) ?>
					</div>
					<div class="col-md-1">
						<p>%</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r6', 'Opción 6 (Sin campo select)');?>
				<div class="row" id="div_pec_p11r6_sub">
					<div class="col-md-3">
						
					</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r6_porc', 0) ?>
					</div>
					<div class="col-md-1">
						<p>%</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r7', 'Opción 7 (Con campo select)');?>
				<div id="div_pec_p11r7_sub">
					<div class="row">
						<div class="col-md-3">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p11r7_p', 'pec_p11r7_p');?>
						</div>
						<div class="col-md-2">
							<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r7_porc', 0) ?>
						</div>
						<div class="col-md-1">
							<p>%</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r8', 'Opción 8 (Sin campo select)');?>
				<div class="row" id="div_pec_p11r8_sub">
					<div class="col-md-3">
						
					</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r8_porc', 0) ?>
					</div>
					<div class="col-md-1">
						<p>%</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r9', 'Opción 9 (Sin campo select)');?>
				<div class="row" id="div_pec_p11r9_sub">
					<div class="col-md-3">
						
					</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r9_porc', 0) ?>
					</div>
					<div class="col-md-1">
						<p>%</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r10', 'Opción 10 (Sin campo select)');?>
				<div class="row" id="div_pec_p11r10_sub">
					<div class="col-md-3">
						
					</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r10_porc', 0) ?>
					</div>
					<div class="col-md-1">
						<p>%</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r11', 'Opción 11 (Sin campo select)');?>
				<div class="row" id="div_pec_p11r11_sub">
					<div class="col-md-3">
						
					</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r11_porc', 0) ?>
					</div>
					<div class="col-md-1">
						<p>%</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('pec_p11r12', 'Opción 12 (Con campo select)');?>
				<div id="div_pec_p11r12_sub">
					<div class="row">
						<div class="col-md-3">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p11r12_p', 'pec_p11r12_p');?>
						</div>
						<div class="col-md-2">
							<?php echo $controlador_obj->frm_al3->cmpNum('pec_p11r12_porc', 0) ?>
						</div>
						<div class="col-md-1">
							<p>%</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p11'); ?>
			</div>
			<div class="col-md-12">
				<div class="row pl-3">
					<div class="col-md-3"  style="text-align: right;">
						Total
					</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpOculto('pec_p11_tot', $controlador_obj->getCampoValor('pec_p11_tot')) ?>
						<div id="<?php echo 'div_pec_p11_tot';?>" style="text-align: right;"><?php echo $controlador_obj->getCampoValor('pec_p11_tot')?></div>
						<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_pec_p11_tot'); ?>
					</div>
					<div class="col-md-1">
						<p>%</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row pl-3">
	<div class="col-md-12">
		<label>11. Pregunta sin habilitación de renglones</label>
		<div class="row pl-3">
			<div class="col-md-4"><label>Descripción</label></div>
			<div class="col-md-1"><label>Total</label></div>
			<div class="col-md-1"><label>Cantidad</label></div>
			<div class="col-md-2"><label>Unidad de medida</label></div>
			<div class="col-md-1"><label>Cantidad</label></div>
			<div class="col-md-2"><label>Unidad de medida</label></div>
		</div>
		<?php for($i=1; $i<=6; $i++){?>
		<?php if($i==6){?>
		<div class="row pl-3">
			<div class="col-md-4">Adicional</div>
		</div>
		<?php }?>
		<div class="row pl-3">
			<div class="col-md-4"><?php echo $controlador_obj->frm_al3->cmpTexto('pec_p12r'.$i.'_especie'); ?></div>
			<div class="col-md-1"><?php echo $controlador_obj->frm_al3->cmpNum('pec_p12r'.$i.'_num', 0); ?></div>
			<div class="col-md-1"><?php echo $controlador_obj->frm_al3->cmpNum('pec_p12r'.$i.'_diam', 2); ?></div>
			<div class="col-md-2"><p>Centímetros</p></div>
			<div class="col-md-1"><?php echo $controlador_obj->frm_al3->cmpNum('pec_p12r'.$i.'_altu', 2); ?></div>
			<div class="col-md-2"><?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('pec_p12r'.$i.'_um', 'pec_p12_um');?></div>
		</div>
		<?php }?>
	</div>
</div>

<div class="row pl-3">
	<div class="col-md-12">
		<?php echo $controlador_obj->frm_al3->cmpTextArea('pec_comentarios', 'Cuadro de texto') ?>
	</div>
</div>
<div id="div_info_pec_p2" style="display:none">
	<p>Quisque finibus felis non justo pulvinar tristique.</p>
</div>
<div id="div_info_pec_p11" style="display:none">
	<ul>
		<li>Nunc venenatis est eu tristique placerat.</li>
		<li>Phasellus at sapien vitae justo commodo blandit.</li>
		<li>Duis accumsan nisi quis est pharetra, quis auctor mauris consequat.</li>
		<li>
			<strong>Duis accumsan nisi quis est pharetra, quis auctor mauris consequat.</strong>
			<ul>
				<li>Donec aliquet dolor non mi faucibus gravida.</li>
				<li>Etiam viverra est vel risus rutrum, vitae consectetur massa ultricies.</li>
				<li>Donec semper eros bibendum purus blandit mattis non vitae justo.</li>
				<li>Cras lacinia nisi molestie egestas ultricies.</li>
			</ul>
		</li>
		<li>Cras non nibh at magna posuere iaculis.</li>
		<li>Nullam convallis tellus sed lectus sollicitudin, a sagittis lectus scelerisque.</li>
		<li>In tempus erat id dui rhoncus, a maximus est ornare.</li>
		<li>Cras laoreet tortor bibendum porta malesuada.</li>
		<li>Maecenas ac risus eu diam lacinia ornare quis nec diam.</li>
		<li>Cras vel risus sed magna gravida posuere.</li>
		<li>Donec vehicula erat eget enim gravida eleifend.</li>
		<li>Etiam vel elit a mauris rhoncus dapibus.</li>		
	</ul>
</div>