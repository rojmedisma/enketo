<div class="row">
	<div class="col-12 col-md-6">
		<table id="tbl_consulta" class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">Opciones</th>
					<th scope="col">Id</th>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($controlador_obj->getArrTabla() as $arr_tbl_det){ ?>
				<tr>
					<td>
						<?php echo $controlador_obj->getHTMLBtnAbrir($arr_tbl_det['cat_veh_modelo_id']); ?>
						<?php echo $controlador_obj->getHTMLBtnBorrar($arr_tbl_det['cat_veh_modelo_id']); ?>
					</td>
					<td><?php echo $arr_tbl_det['cat_veh_modelo_id']?></td>
					<td><?php echo $arr_tbl_det['cat_veh_marca_desc']?></td>
					<td><?php echo $arr_tbl_det['descripcion']?></td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>
		