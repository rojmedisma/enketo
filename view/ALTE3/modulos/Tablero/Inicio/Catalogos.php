<?php if($controlador_obj->tienePermiso('al-inventario')): ?>
	<a href="<?php echo define_controlador('catvistagen', 'inventario')?>" class="btn btn-app">
		<i class="fas fa-car"></i> Inventario
	</a>
<?php endif;?>
<?php if($controlador_obj->tienePermiso('al-cmpte')): ?>
	<a href="<?php echo define_controlador('componentes', 'pestania01')?>" class="btn btn-app">
		<i class="fas fa-puzzle-piece"></i> Componentes
	</a>
<?php endif;?>
<?php if($controlador_obj->tienePermiso('al-marca')): ?>
	<a href="<?php echo define_controlador('catvistagen', 'cat_veh_marca')?>" class="btn btn-app">
		<i class="fas fa-cube"></i> Marcas
	</a>
<?php endif;?>
<?php if($controlador_obj->tienePermiso('al-modelo')): ?>
	<a href="<?php echo define_controlador('catvistagen', 'cat_veh_modelo')?>" class="btn btn-app">
		<i class="fas fa-cubes"></i> Modelos
	</a>
<?php endif;?>

<?php if($controlador_obj->tienePermiso('al-usuario')): ?>
	<a href="<?php echo define_controlador('catvistagen', 'cat_usuario')?>" class="btn btn-app">
		<i class="fas fa-user"></i> Usuarios
	</a>
<?php endif;?>
<?php if($controlador_obj->tienePermiso('al-grupo')): ?>
	<a href="<?php echo define_controlador('catvistagen', 'cat_grupo')?>" class="btn btn-app">
		<i class="fas fa-users"></i> Grupos
	</a>
<?php endif;?>
