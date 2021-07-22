<?php if($controlador_obj->tienePermiso('al-log')){?>
<a href="<?php echo define_controlador('catvistagen', 'log')?>" class="btn btn-app">
	<i class="fas fa-clipboard-check"></i> Registros de log
</a>
<?php }?>