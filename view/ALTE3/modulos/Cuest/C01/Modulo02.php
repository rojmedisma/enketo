	<h4>SECCIÓN II. Caracterización de las prácticas productivas</h4>
<h4 class="text-success">Sector Agricultura</h4>
<?php echo $controlador_obj->getHTMLInfoLink('info_sec_2_cpp', 'Acerca de', 'Para cada uno de los sectores aplicables a su caso, a continuación, se le pide responder sobre las características de su unidad de producción. Las respuestas se utilizarán para estimar el nivel de emisiones de gases de efecto invernadero que contribuyen al cambio climático con fines de diagnóstico. Se le pide que responda con la verdad.'); ?>
<h5 class="text-info">Caracterización – actividad agrícola</h5>
<div class="row pl-3">
	<div class="col-md-12">
		<label>1. Por favor marque qué tipos de agricultura realiza y en cada caso indique la superficie.</label>
		<p class="small">Marque todas las opciones que apliquen.</p>
		<div class="row pl-3">
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p1r1', 'Convencional');?>
				<div class="row pl-3" id="div_agr_p1r1_sub">
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p1r1_1', 'Temporal');?>
						<div class="row pl-3" id="div_agr_p1r1_1_sub">
							<div class="col-md-2">
								<?php echo $controlador_obj->frm_al3->cmpNum('agr_p1r1_1_has', 2, 'Hectáreas');?>
							</div>
							<div class="col-md-6">
								<label>2. Para esta superficie, qué forma de producción emplea</label>
								<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Información" data-id_info="#div_info_agr_p2"><i class="fas fa-info"></i></button>
								<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p2r1_1', 'agr_p2');?>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p1r1_2', 'Riego');?>
						<div class="row pl-3" id="div_agr_p1r1_2_sub">
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p1r1_2_1', 'Por gravedad');?>
								<div class="row pl-3" id="div_agr_p1r1_2_1_sub">
									<div class="col-md-2">
										<?php echo $controlador_obj->frm_al3->cmpNum('agr_p1r1_2_1_has', 2, 'Hectáreas');?>
									</div>
									<div class="col-md-6">
										<label>2. Para esta superficie, qué forma de producción emplea</label>
										<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Información" data-id_info="#div_info_agr_p2"><i class="fas fa-info"></i></button>
										<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p2r1_2_1', 'agr_p2');?>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p1r1_2_2', 'Superficial');?>
								<div class="row pl-3" id="div_agr_p1r1_2_2_sub">
									<div class="col-md-2">
										<?php echo $controlador_obj->frm_al3->cmpNum('agr_p1r1_2_2_has', 2, 'Hectáreas');?>
									</div>
									<div class="col-md-6">
										<label>2. Para esta superficie, qué forma de producción emplea</label>
										<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Información" data-id_info="#div_info_agr_p2"><i class="fas fa-info"></i></button>
										<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p2r1_2_2', 'agr_p2');?>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p1r1_2_3', 'Presurizado');?>
								<div class="row pl-3" id="div_agr_p1r1_2_3_sub">
									<div class="col-md-2">
										<?php echo $controlador_obj->frm_al3->cmpNum('agr_p1r1_2_3_has', 2, 'Hectáreas');?>
									</div>
									<div class="col-md-6">
										<label>2. Para esta superficie, qué forma de producción emplea</label>
										<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Información" data-id_info="#div_info_agr_p2"><i class="fas fa-info"></i></button>
										<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p2r1_2_3', 'agr_p2');?>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p1r1_2_N'); ?>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p1r1_N'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p1r2', 'Protegida');?>
				<div class="row pl-3" id="div_agr_p1r2_sub">
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p1r2_1', 'Con invernadero');?>
						<div class="row pl-3" id="div_agr_p1r2_1_sub">
							<div class="col-md-2">
								<?php echo $controlador_obj->frm_al3->cmpNum('agr_p1r2_1_has', 2, 'Hectáreas');?>
							</div>
							<div class="col-md-6">
								<label>2. Para esta superficie, qué forma de producción emplea</label>
								<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Información" data-id_info="#div_info_agr_p2"><i class="fas fa-info"></i></button>
								<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p2r2_1', 'agr_p2');?>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p1r2_2', 'Con micro y macro túneles');?>
						<div class="row pl-3" id="div_agr_p1r2_2_sub">
							<div class="col-md-2">
								<?php echo $controlador_obj->frm_al3->cmpNum('agr_p1r2_2_has', 2, 'Hectáreas');?>
							</div>
							<div class="col-md-6">
								<label>2. Para esta superficie, qué forma de producción emplea</label>
								<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Información" data-id_info="#div_info_agr_p2"><i class="fas fa-info"></i></button>
								<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p2r2_2', 'agr_p2');?>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p1r2_3', 'Con casas malla sombra');?>
						<div class="row pl-3" id="div_agr_p1r2_3_sub">
							<div class="col-md-2">
								<?php echo $controlador_obj->frm_al3->cmpNum('agr_p1r2_3_has', 2, 'Hectáreas');?>
							</div>
							<div class="col-md-6">
								<label>2. Para esta superficie, qué forma de producción emplea</label>
								<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Información" data-id_info="#div_info_agr_p2"><i class="fas fa-info"></i></button>
								<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p2r2_3', 'agr_p2');?>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p1r2_N'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p1rN'); ?>
			</div>
		</div>
	</div>
</div>
<div class="row pl-3">
	<div class="col-md-12">
		<label>3. Por favor seleccione los tipos de cultivos que produce por año y diga en qué cantidad.</label>
		<p class="small">Marque todas las opciones que apliquen</p>
		<div class="row pl-3">
			<div class="col-md-6"><label>Tipo de cultivo</label></div>
			<div class="col-md-2"><label>Cantidad (toneladas)</label></div>
			<div class="col-md-2"><label>Superficie (hectáreas)</label></div>
		</div>
		<?php foreach($controlador_obj->getArrCmpLlave('tipo_cultivo') as $i=>$llave_val){?>
		<div class="row pl-3">
			<div class="col-md-6"><?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p3r'.$i.'_cultivo', $llave_val);?></div>
			<div class="col-md-2" id="<?php echo 'div_agr_p3r'.$i.'_cantidad' ?>"><?php echo $controlador_obj->frm_al3->cmpNum('agr_p3r'.$i.'_cantidad', 2);?></div>
			<div class="col-md-2" id="<?php echo 'div_agr_p3r'.$i.'_sup' ?>"><?php echo $controlador_obj->frm_al3->cmpNum('agr_p3r'.$i.'_sup', 2);?></div>
		</div>
			<?php if($i==7 || $i==16){?>
			<div class="row pl-3">
				<div class="col-md-6"><?php echo $controlador_obj->frm_al3->cmpTexto('agr_p3r'.$i.'_cultivo_esp', 'Especificar') ?></div>
			</div>
			<?php }?>
		<?php }?>
		<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p3'); ?>
	</div>
</div>
<div class="row pl-3">
	<div class="col-md-12">
		<label>4. Por favor indique las principales especies o nombres de árboles en su unidad de producción, su número, el diámetro del tronco a una altura de 1.5m y, si es posible, la altura promedio o los años que tiene cada especie en su predio.</label>
		<p class="small">Solo para el caso de forma  de producción agroforestal.</p>
		<div class="row pl-3">
			<div class="col-md-4"><label>Especies</label></div>
			<div class="col-md-1"><label>Número de árboles</label></div>
			<div class="col-md-1"><label>Diámetro</label></div>
			<div class="col-md-2"><label>Unidad de medida</label></div>
			<div class="col-md-1"><label>Altura o edad</label></div>
			<div class="col-md-2"><label>Unidad de medida</label></div>
		</div>
		<?php for($i=1; $i<=6; $i++){?>
		<?php if($i==6){?>
		<div class="row pl-3">
			<div class="col-md-4">Otros: ¿cuáles?</div>
		</div>
		<?php }?>
		<div class="row pl-3">
			<div class="col-md-4"><?php echo $controlador_obj->frm_al3->cmpTexto('agr_p4r'.$i.'_especie'); ?></div>
			<div class="col-md-1"><?php echo $controlador_obj->frm_al3->cmpNum('agr_p4r'.$i.'_num', 0); ?></div>
			<div class="col-md-1"><?php echo $controlador_obj->frm_al3->cmpNum('agr_p4r'.$i.'_diam', 2); ?></div>
			<div class="col-md-2"><p>Centímetros</p></div>
			<div class="col-md-1"><?php echo $controlador_obj->frm_al3->cmpNum('agr_p4r'.$i.'_altu', 2); ?></div>
			<div class="col-md-2"><?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p4r'.$i.'_um', 'agr_p4_um');?></div>
		</div>
		<?php }?>
	</div>
</div>
<h5 class="text-info">Energía en actividades agrícolas</h5>
<div class="row pl-3">
	<div class="col-md-12">
		<label>5. Por favor marque qué tipos de energía usa para la producción. En cada caso indique qué cantidad consume durante el año y en qué superficie de su unidad de producción.</label>
		<p class="small">Marque todas las opciones que apliquen.</p>
		<div class="row pl-3">
			<div class="col-md-4"><label>Tipo de energía</label></div>
			<div class="col-md-2"><label>Unidades</label></div>
			<div class="col-md-2"><label>Unidad de Medida</label></div>
			<div class="col-md-2"><label>Superficie donde se usa</label></div>
			<div class="col-md-2"><label>Unidad de Medida</label></div>
		</div>
		<?php foreach($controlador_obj->getArrCmpLlave('agr_p5rN_tipo') as $i=>$llave_val){?>
		<div class="row pl-3">
			<div class="col-md-4"><?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p5r'.$i.'_tipo', $llave_val);?></div>
			<div class="col-md-2" id="<?php echo 'div_agr_p5r'.$i.'_cantidad' ?>"><?php echo $controlador_obj->frm_al3->cmpNum('agr_p5r'.$i.'_cantidad', 2);?></div>
			<div class="col-md-2"><?php echo $controlador_obj->getCmpLlaveVal('agr_p5rN_um', $i); ?></div>
			<div class="col-md-2" id="<?php echo 'div_agr_p5r'.$i.'_sup' ?>"><?php echo $controlador_obj->frm_al3->cmpNum('agr_p5r'.$i.'_sup', 2);?></div>
			<div class="col-md-2"><p>Hectáreas</p></div>
		</div>
		<?php }?>
		<div class="row pl-3">
			<div class="col-md-6"><?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p5r10_tipo', 'No usa energía');?></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
		</div>
		<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p5'); ?>
	</div>
</div>

<div class="row pl-3">
	<div class="col-md-12">
		<label>6. ¿En qué actividades o equipos consume energía para su producción agrícola?</label>
		<p class="small">Por favor seleccione todas las que apliquen de la siguiente lista</p>
		<?php 
		foreach($controlador_obj->getArrCmpLlave('agr_p6') as $i=>$llave_val){
			echo $controlador_obj->frm_al3->cmpCheckbox('agr_p6r'.$i, $llave_val);
		}
		echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p6');
		?>
		<div class="row pl-3">
			<div class="col-md-6"><?php echo $controlador_obj->frm_al3->cmpTexto('agr_p6r13_esp', 'Especificar') ?></div>
		</div>
	</div>
</div>
<h5 class="text-info">Manejo de residuos en actividades agrícolas</h5>
<div class="row pl-3">
	<div class="col-md-12">
		<label>7. Con base en los tipos de cultivos que produce, por favor diga cómo maneja los residuos que quedan después de la cosecha.</label>
		<p>Por favor considere que son los residuos de campo, de podas, por ejemplo; no considere los residuos de la fase de industrialización</p>
		<p class="small">
			Marque todas las opciones de manejo que apliquen
			<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Opciones de manejo" data-id_info="#div_info_agr_p7_n1"><i class="fas fa-info"></i></button>
		</p>
		
		<?php for($i=1; $i<=16; $i++){?>
		<div class="row pl-3" id="<?php echo 'div_agr_p7r'.$i ?>">
			<div class="col-md-12">
				<span>Para el tipo de cultivo: </span>
				<label><?php echo $controlador_obj->getCmpLlaveVal('tipo_cultivo', $i); ?></label>
				<div class="row pl-3">
					<div class="col-md-6">
						<label>Formas de manejo de los residuos de la parcela</label>
						<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Formas de manejo de los residuos de la parcela" data-id_info="#div_info_agr_p7_n2"><i class="fas fa-info"></i></button>
					</div>
					<div class="col-md-2">
						<label>Proporción del total (%)</label>
						<span class="small">Debe sumar 100%</span>
					</div>
				</div>
				<?php for($j=1; $j<=10; $j++){?>
				<div class="row pl-3">
					<div class="col-md-6"><?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p7r'.$i.'_'.$j.'_pago', $controlador_obj->getCmpLlaveVal('agr_p7_pago', $j));?></div>
					<div class="col-md-2"><?php echo $controlador_obj->frm_al3->cmpNum('agr_p7r'.$i.'_'.$j.'_prop', 0);?></div>
				</div>
				<?php }?>
				<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p7r'.$i); ?>
				<div class="row pl-3">
					<div class="col-md-6"><?php echo $controlador_obj->frm_al3->cmpTexto('agr_p7r'.$i.'_10_pago_esp', '') ?></div>
				</div>
				<div class="row pl-3">
					<div class="col-md-6 float-end" style="text-align: right;">Total</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpOculto('agr_p7r'.$i.'_tot', $controlador_obj->getCampoValor('agr_p7r'.$i.'_tot'));?>
						<div id="<?php echo 'div_agr_p7r'.$i.'_tot';?>" style="text-align: right;"><?php echo $controlador_obj->getCampoValor('agr_p7r'.$i.'_tot'); ?></div>
						<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p7r'.$i.'_tot'); ?>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
</div>
<h5 class="text-info">Uso de fertilizantes, plaguicidas, herbicidas y cal</h5>
<div class="row pl-3">
	<div class="col-md-12">
		<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p8_aplico', 'no_si', '8. ¿Aplicó fertilizantes durante el año productivo?');?>
		<div class="pl-3" id="div_agr_p8_no">
			<?php echo $controlador_obj->frm_al3->cmpTexto('agr_p8_causa', 'Por favor explique la causa') ?>
		</div>
		<div id="div_agr_p8_aplico_sub">
			<p>Por favor indique</p>
			<div class="row pl-3">
				<div class="col-md-3">
					<label>Seleccione tipo(s) de fertilizante aplicado</label>
					<span class="small">Marque todas las opciones que apliquen.</span>
					<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal_info" data-txt_tit="Tipo(s) de fertilizante" data-id_info="#div_info_agr_p8"><i class="fas fa-info"></i></button>
				</div>
				<div class="col-md-2">
					<label>Superficie donde lo aplicó (hectáreas)</label>
				</div>
				<div class="col-md-1">
					<label>Cantidad (kilogramos / hectárea)</label>
				</div>
				<div class="col-md-3">
					<label>Forma de aplicación</label>
				</div>
				<div class="col-md-3">
					<label>Momento de aplicación</label>
				</div>
			</div>
			<?php for($i=1; $i<=15; $i++){?>
			<div class="row pl-3">
				<div class="col-md-3">
					<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p8r'.$i.'_t_ferti', $controlador_obj->getCmpLlaveVal('agr_p8_t_ferti', $i));?>
				</div>
				<div class="col-md-2">
					<?php echo $controlador_obj->frm_al3->cmpNum('agr_p8r'.$i.'_sup', 2);?>
				</div>
				<div class="col-md-1">
					<?php echo $controlador_obj->frm_al3->cmpNum('agr_p8r'.$i.'_cant', 2);?>
				</div>
				<div class="col-md-3">
					<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p8r'.$i.'_f_ap', 'agr_p8_f_ap');?>
				</div>
				<div class="col-md-3">
					<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p8r'.$i.'_m_ap', 'agr_p8_m_ap');?>
				</div>
			</div>
			<?php }?>
			<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p8'); ?>
			<div class="row pl-3" id="div_agr_p8r15_t_ferti_sub">
				<div class="col-md-3">
					<?php echo $controlador_obj->frm_al3->cmpTexto('agr_p8r15_m_ap_esp', '¿Cual?') ?>
				</div>
				<div class="col-md-3">
					<label>¿Con qué concentración de N? (%)</label>
					<div class="row">
						<div class="col-md-6">
							<?php echo $controlador_obj->frm_al3->cmpNum('agr_p8r15_m_ap_frec', 0, '') ?>
						</div>
						<div class="col-md-6">
							<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p8r15_m_ap_nose', 'No sé') ?>
						</div>
					</div>
				</div>
				
			</div>
		</div><!-- /#div_agr_p8_aplico_sub -->
	</div>
</div>
<div class="row pl-3">
	<div class="col-md-12">
		<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p9_aplico', 'no_si', '9. ¿Aplicó cal a sus suelos/ cultivos durante el año productivo?');?>
		<div id="div_agr_p9_aplico_sub">
			<p>Por favor indique qué tipo, en qué superficie y qué cantidad aplicó en total, para toda su superficie o producción.</p>
			<span class="small">Marque todas las opciones que apliquen.</span>
			<div class="row pl-3">
				<div class="col-md-5">
					<label>Tipo de cal</label>
				</div>
				<div class="col-md-2">
					<label>Cantidad (kilogramos)</label>
				</div>
				<div class="col-md-2">
					<label>Superficie (hectáreas)</label>
				</div>
			</div>
			<?php for($i=1; $i<=3; $i++){?>
			<div class="row pl-3">
				<div class="col-md-5">
					<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p9r'.$i.'_t_cal', $controlador_obj->getCmpLlaveVal('agr_p9_t_cal', $i));?>
				</div>
				<div class="col-md-2">
					<?php echo $controlador_obj->frm_al3->cmpNum('agr_p9r'.$i.'_cant', 2) ?>
				</div>
				<div class="col-md-2">
					<?php echo $controlador_obj->frm_al3->cmpNum('agr_p9r'.$i.'_sup', 2) ?>
				</div>
			</div>
			<?php }?>
			<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p9'); ?>
		</div>
	</div>
</div>
<div class="row pl-3">
	<div class="col-md-12">
		<label>10. ¿Aplicó agroquímicos durante el año productivo?</label>
		<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p10_aplico', 'no_si');?>
		<div class="row pl-3" id="div_agr_p10_sub">
			<div class="col-md-12">
				<p>Por favor indique qué tipo, en qué superficie y qué cantidad aplicó en total.</p>
				<span class="small">Marque todas las opciones que apliquen.</span>
				<div class="row pl-3">
					<div class="col-md-2">
						<label>Tipo de agroquímico</label>
					</div>
					<div class="col-md-3">
						<label>Nombre(s)</label>
					</div>
					<div class="col-md-1">
						<label>Superficie donde se aplicó (hectárea)</label>
					</div>
					<div class="col-md-1">
						<label>Cantidad total aplicada</label>
					</div>
					<div class="col-md-2">
						<label>Unidad de Medida</label>
					</div>
					<div class="col-md-1">
						<label>Número de veces</label>
					</div>
					<div class="col-md-2">
						<label>Método de aplicación</label>
					</div>
				</div>
				<?php foreach($controlador_obj->getArrCmpLlave('agr_p10_aq') as $i=>$llave_val){?>
				<div class="row pl-3">
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpCheckbox('agr_p10r'.$i.'_t_ag', $llave_val);?>
					</div>
					<div class="col-md-3">
						<?php echo $controlador_obj->frm_al3->cmpTexto('agr_p10r'.$i.'_nom') ?>
					</div>
					<div class="col-md-1">
						<?php echo $controlador_obj->frm_al3->cmpNum('agr_p10r'.$i.'_sup', 2) ?>
					</div>
					<div class="col-md-1">
						<?php echo $controlador_obj->frm_al3->cmpNum('agr_p10r'.$i.'_cant', 2) ?>
					</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p10r'.$i.'_um', 'agr_p10_um');?>
					</div>
					<div class="col-md-1">
						<?php echo $controlador_obj->frm_al3->cmpNum('agr_p10r'.$i.'_n_vez', 0) ?>
					</div>
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('agr_p10r'.$i.'_met', 'agr_p10_met');?>
					</div>
				</div>
				<?php }?>
				<div class="row pl-3">
					<div class="col-md-2">
						<?php echo $controlador_obj->frm_al3->validacionSinCmp('div_an_agr_p10'); ?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>


<div class="row pl-3">
	<div class="col-md-12">
		<?php echo $controlador_obj->frm_al3->cmpTextArea('agr_comentarios', 'Observaciones/Comentarios para la sección actual') ?>
	</div>
</div>
<!-- Elementos div contenedores de la información a mostrar en las ventanas modal informativas -->
<div id="div_info_agr_p2" style="display:none">
	<ul>
		<li>La agricultura intensiva es aquella en que se usan fertilizantes, plaguicidas y otros agroquímicos, además de combustible para tener una alta productividad.</li>
		<li>La agricultura orgánica restringe el uso de fertilizantes y plaguicidas químicos, y está regulada por la Ley de Productos Orgánicos.</li>
		<li>La agricultura agroecológica considera la diversidad y sinergia entre las plantas que se cultivan, recicla los residuos de plantas y animales y también se enfoca en valores humanos y sociales, en la cultura y las tradiciones, y en una economía circular y solidaria.</li>
		<li>La agricultura agroforestal implica la combinación de agricultura y ganadería en conjunto con el cultivo y aprovechamiento de especies forestales en un mismo terreno.</li>
	</ul>
</div>
<div id="div_info_agr_p7_n1" style="display:none">
	<p>Por ejemplo, si cultiva maíz y de los rastrojos después de la cosecha deja la mitad en campo y la otra mitad se la da de comer a sus animales, entonces selecciona las casillas:</p>
	<ul>
		<li>Se dejan en el campo para su reincorporación al suelo</li>
		<li>Alimento de animales</li>
	</ul>
	<p>Y a cada una le asigna 50%, pues la mitad (50 de 100) se utiliza en cada una de las dos formas de manejo.</p>
	<p>Es decir, suponiendo que en total tiene 100 de residuos, ¿cuánto diría que maneja en cada forma de las de la lista?</p>
</div>
<div id="div_info_agr_p7_n2" style="display:none">
	<p>Por favor considere las siguientes definiciones de los métodos de manejo:</p>
	<ul>
		<li><strong>Se dejan en campo para su reincorporación al suelo:</strong> implica que los residuos o rastrojos se quedan en el suelo después de la cosecha integrándolos a la tierra o simplemente dejándolos encima.</li>
		<li><strong>Quema a cielo abierto:</strong> se prende fuego al campo para eliminar los residuos o malezas antes de la siguiente siembra.</li>
		<li><strong>Composteo:</strong> implica que haya algún tipo de aireación y humedad hasta que los residuos se transforman en tierra o humus.</li>
		<li><strong>Alimento de animales:</strong> los residuos se dan de comer al ganado sin ningún tratamiento más allá del corte. </li>
		<li><strong>Elaboración de silo:</strong> los residuos se llevan a ensilar, disminuyendo así su degradación en presencia de aire y, en cambio, produciendo alimento para los animales en las épocas de escasez.</li>
		<li><strong>Uso en cama de animales:</strong> los residuos se llevan a los corrales para acolchar los sitios donde duermen o caminan los animales.</li>
		<li><strong>Venta:</strong> los residuos no permanecen en la unidad de producción, se venden o llevan a otro lugar donde se les da un uso.</li>
		<li><strong>Elaboración de combustible:</strong> algunos residuos pueden utilizarse en el funcionamiento de hornos o calderas, o en biodigestores, con o sin un tratamiento previo.</li>
		<li><strong>Se entierran:</strong> los residuos se ponen bajo el suelo, sin que se remuevan o vuelvan a sacar; no están en contacto constante con el aire.</li>
	</ul>
</div>
<div id="div_info_agr_p8" style="display:none">
	<p>Hay muchos tipos de fertilizantes o abonos. Aquí se ofrece una lista de algunos que son comunes. La N se refiere a nitrógeno, la P a fósforo, y la K a potasio.</p>
	<p>Si usted no sabe o no recuerda qué fertilizante aplicó, puede seleccionar la casilla de “otro” y mencionar que no sabe. Ojalá sea posible que sí recuerde cuánto aplicó.</p>
</div>
