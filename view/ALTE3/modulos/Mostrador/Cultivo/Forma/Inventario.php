<div class="row">
	<div class="col-md-12 mb-3">
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#mdl_inventario">Alta registro de inventario</button>
	</div>
	<div class="col-sm-12 col-md-6">
		<div class="table-responsive">
			<table class="table table-sm">
				<thead>
					<tr>
						<th>Fecha disponibilidad</th>
						<th>Cantidad</th>
						<th>Unidad de medida</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($controlador_obj->getArrTabla() as $arr_tbl_det): ?>
					<tr>
						<td><?php echo $arr_tbl_det['fecha_disponibilidad']?></td>
						<td><?php echo $arr_tbl_det['cantidad']?></td>
						<td><?php echo $arr_tbl_det['cantidad_um_desc']?></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="modal fade" id="mdl_inventario">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Registro de inventario</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="frm_inventario" role="form" method="post" action="<?php echo define_controlador('guardar', 'cult_inventario') ?>" enctype="multipart/form-data">
				<?php echo $controlador_obj->frm_al3->cmpOculto('cultivo_id', $controlador_obj->getDatoVistaValor('cultivo_id')); ?>
				<?php echo $controlador_obj->getHTMLCamposOcultosBase(); ?>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<?php echo $controlador_obj->frm_al3->cmpFecha('fecha_disponibilidad', 'Fecha en que estará disponible para venta'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<?php echo $controlador_obj->frm_al3->cmpNum('cantidad', 2, 'Cantidad'); ?>
						</div>
						<div class="col-md-6">
							<?php echo $controlador_obj->frm_al3->cmpSelectDeSubCat('cantidad_um', 'cantidad_um', 'Origen de la semilla'); ?>
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