var seccion_faq = function(){
	return {
		activar:function(){
			formulario_faq = new formulario_modal();
			formulario_faq.on_click_btn_abrir('btn_abrir', 'ajax', 'get_arr_reg_faq', 'faq_id', 'mdl_registro', 'frm_inventario');
			formulario_faq.on_hide_modal(["faq_id"]);
		}
	}
}();

