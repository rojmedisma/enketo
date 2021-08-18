<div class="row">
	<div class="col-12">
		<div class="card card-info card-tabs">
			<div class="card-header p-0 pt-1">
				<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link <?php echo $controlador_obj->getPestaniaActiva('inicio')?>" href="<?php echo define_controlador('cultivo', 'inicio', false, array("cultivo_id"=>$controlador_obj->getCultivoId()))?>" role="tab">Registro</a>
					</li>
					<?php if(!$controlador_obj->getEsNuevo()):?>
					<li class="nav-item">
						<a class="nav-link <?php echo $controlador_obj->getPestaniaActiva('inventario')?>" href="<?php echo define_controlador('cultivo', 'inventario', false, array("cultivo_id"=>$controlador_obj->getCultivoId()))?>" role="tab">Inventario</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo $controlador_obj->getPestaniaActiva('fotos')?>" href="<?php echo define_controlador('cultivo', 'fotos', false, array("cultivo_id"=>$controlador_obj->getCultivoId()))?>" role="tab">Fotos</a>
					</li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="card-body">
				<?php
				switch ($controlador_obj->getAccion()):
					case 'inicio':	include_once 'Forma/Registro.php';	break;
					case 'inventario':	include_once 'Forma/Inventario.php';	break;
					case 'fotos':	include_once 'Forma/Fotos.php';	break;
				endswitch;
				?>
			</div>
		</div>
		
	</div>
</div>