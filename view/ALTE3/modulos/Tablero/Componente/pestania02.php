<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<h3 class="card-title">Registro de FAQ</h3>
			</div>
			<div class="col-md-6">
				
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12 mb-3">
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#mdl_registro">Alta registro</button>
			</div>
			<div class="col-sm-12 col-md-12">
				<div class="table-responsive">
					<table class="table table-sm">
						<colgroup>
							<col style="width:160px">
						</colgroup>
						<thead>
							<tr>
								<th scope="col">Opciones</th>
								<th scope="col">Pregunta</th>
								<th scope="col">Respuesta</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($controlador_obj->getArrTabla() as $arr_tbl_det): ?>
							<tr>
								<td>
									<button type="button" class="btn btn-info btn-sm btn_abrir" data-faq_id="<?=$arr_tbl_det['faq_id']?>" ><i class="fas fa-pencil-alt"></i> Abrir</button>
									<?= $controlador_obj->getHTMLBtnBorrarFAQ($arr_tbl_det['faq_id']) ?>
								</td>
								<td><?= $arr_tbl_det['pregunta']?></td>
								<td><?= nl2br($arr_tbl_det['respuesta'])?></td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="mdl_registro">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Registro</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="frm_inventario" role="form" method="post" action="<?php echo define_controlador('guardar', 'faq') ?>" enctype="multipart/form-data">
				<?php echo $controlador_obj->frm_al3->cmpOculto("faq_id", $controlador_obj->getCampoValor("faq_id")); ?>
				<?php echo $controlador_obj->getHTMLCamposOcultosBase(); ?>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<?php echo $controlador_obj->frm_al3->cmpTexto('pregunta', 'Pregunta'); ?>
						</div>
						<div class="col-md-12">
							<?php echo $controlador_obj->frm_al3->cmpTextArea('respuesta', 'Respuesta'); ?>
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