<?php if($controlador_obj->getAccion()=='pestania02'):?>
<script src="/<?php echo DIR_LOCAL; ?>/assets/js/wallawalla/componentes/faq.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		seccion_faq.activar();
		
	});
</script>
<?php else:?>
<script type="text/javascript">
	$(document).ready(function(){
		bsCustomFileInput.init();
	});
</script>
<?php endif;?>