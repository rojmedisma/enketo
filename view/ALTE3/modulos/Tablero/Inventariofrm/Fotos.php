<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Foto de portada</h3>
			</div>
			<div class="card-body">
				<form name="frm_adj_princ" role="form" method="post" action="<?php echo define_controlador('adjuntofoto', 'adjuntar'); ?>" enctype="multipart/form-data">
					<input type="hidden" name="gale_cmp_id_nom" value="inventario_id">
					<input type="hidden" name="gale_cmp_id_val" value="<?php echo $controlador_obj->getCampoValor('inventario_id');?>">
					<input type="hidden" name="adjunto_tipo" value="f_princ">
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
				<div class="row mb-3">
					<?php foreach($controlador_obj->getArrRegAdjuntoPrinc() as $arr_reg_adj){?>
					<div class="col-md-10 text-center">
						<img src="<?php echo $arr_reg_adj['ruta_archivo'].$arr_reg_adj['nom_arc_sist']; ?>" class="img-thumbnail"  style="max-height:300px; max-width:100%">
					</div>
					<div class="col-md-2 text-center">
						<form name="frm_borrar_princ" role="form" method="post" action="<?php echo define_controlador('adjuntofoto', 'borrar'); ?>">
							<input type="hidden" name="gale_cmp_id_nom" value="inventario_id">
							<input type="hidden" name="gale_cmp_id_val" value="<?php echo $controlador_obj->getCampoValor('inventario_id');?>">
							<input type="hidden" name="adjunto_id" value="<?php echo $arr_reg_adj['adjunto_id']; ?>">
							<?php echo $controlador_obj->getHTMLCamposOcultosBase(); ?>
							<button type="submit" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
						</form>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Fotos complementarias</h3>
			</div>
			<div class="card-body">
				<form name="frm_adj_sec" role="form" method="post" action="<?php echo define_controlador('adjuntofoto', 'adjuntar'); ?>" enctype="multipart/form-data">
					<input type="hidden" name="gale_cmp_id_nom" value="inventario_id">
					<input type="hidden" name="gale_cmp_id_val" value="<?php echo $controlador_obj->getCampoValor('inventario_id');?>">
					<input type="hidden" name="adjunto_tipo" value="f_sec">
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
				<div class="row mb-3">
					<?php foreach($controlador_obj->getArrRegAdjuntoSec() as $arr_reg_adj){?>
					<div class="col-md-10 text-center">
						<img src="<?php echo $arr_reg_adj['ruta_archivo'].$arr_reg_adj['nom_arc_sist']; ?>" class="img-thumbnail"  style="max-height:300px; max-width:100%">
					</div>
					<div class="col-md-2 text-center">
						<form name="frm_borrar_sec" role="form" method="post" action="<?php echo define_controlador('adjuntofoto', 'borrar'); ?>">
							<input type="hidden" name="gale_cmp_id_nom" value="inventario_id">
							<input type="hidden" name="gale_cmp_id_val" value="<?php echo $controlador_obj->getCampoValor('inventario_id');?>">
							<input type="hidden" name="adjunto_id" value="<?php echo $arr_reg_adj['adjunto_id']; ?>">
							<?php echo $controlador_obj->getHTMLCamposOcultosBase(); ?>
							<button type="submit" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
						</form>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
