<table id="tbl_consulta" class="table table-bordered">
	<thead>
		<tr>
			<th scope="col">Opciones</th>
			<th scope="col">Foto</th>
			<th scope="col">Año</th>
			<th scope="col">Marca</th>
			<th scope="col">Modelo</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($controlador_obj->getArrTabla() as $arr_tbl_det){ ?>
		<tr>
			<td>
				<?php echo $controlador_obj->getHTMLBtnAbrir($arr_tbl_det['inventario_id']); ?>
				<?php echo $controlador_obj->getHTMLBtnBorrar($arr_tbl_det['inventario_id']); ?>
			</td>
			<td><img src="<?php echo $arr_tbl_det['ruta_archivo'].$arr_tbl_det['nom_arc_sist']; ?>" class="img-thumbnail" style="max-height:100px; max-width:100%"></td>
			<td><?php echo $arr_tbl_det['veh_anio']; ?></td>
			<td><?php echo $arr_tbl_det['veh_marca_desc']; ?></td>
			<td><?php echo $arr_tbl_det['veh_modelo_desc']; ?></td>
		</tr>
		<?php }?>
	</tbody>
</table>