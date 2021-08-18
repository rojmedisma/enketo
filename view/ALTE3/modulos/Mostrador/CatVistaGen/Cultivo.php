<div class="table-responsive">
	<table id="tbl_consulta" class="table table-bordered table-sm">
		<thead>
			<tr>
				<th scope="col">Opciones</th>
				<th scope="col">Nombre</th>
				<th scope="col">Origen</th>
				<th scope="col">Agroquimicos</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($controlador_obj->getArrTabla() as $arr_tbl_det){ ?>
			<tr>
				<td>
					<?php echo $controlador_obj->getHTMLBtnAbrir($arr_tbl_det['cultivo_id']); ?>
					<?php echo $controlador_obj->getHTMLBtnBorrar($arr_tbl_det['cultivo_id']); ?>
				</td>
				<td><?php echo $arr_tbl_det['cat_cultivo_id_desc']; ?></td>
				<td><?php echo $arr_tbl_det['semilla_origen_desc']; ?></td>
				<td><?php echo $arr_tbl_det['agroqui_uso_desc']; ?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>
	