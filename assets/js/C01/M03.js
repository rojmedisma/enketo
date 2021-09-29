/**
 * Función IIFE para el módulo actual
 * @type 
 */
var Modulo = function(){
	function para_pec_p2(){
		pec_p2rN_especie_sel();
		
	}
	function pec_p2rN_especie_sel(){
		//Bovinos, Bovinos leche, Ovinos, Porcinos, Aves de corral, Caprinos
		for (var i = 1; i <= 6; i++) {
			on_change_pec_p2_especie('pec_p2r'+i+'_especie', ['#div_pec_p2r'+i+'_especie_sub']);
		}
		//Conejos, Pavos, Patos, Gansos, Pilíferos, Mulas y Asnos, Equinos, Ciervos, Otro
		for (var i = 7; i <= 15; i++){
			on_change_pec_p2_especie_7_15('pec_p2r'+i+'_especie', ['#div_pec_p2r'+i+'_especie_sub']);
		}
	}
	function on_change_pec_p2_especie(v_cmp_chk, a_selector, v_limpiar_campos=true, v_con_evento_change=false){
		mostrarSecciones($("input[name='"+v_cmp_chk+"']").is(':checked'), a_selector, v_limpiar_campos, v_con_evento_change);
		mostrar_pec_p2_hato();
		$("input[name='"+v_cmp_chk+"']").on('change', function(){
			mostrarSecciones($(this).is(':checked'), a_selector, v_limpiar_campos, v_con_evento_change);
			mostrar_pec_p2_hato();
			quitar_alerta_de_div("#div_an_pec_p2");
		});
	}
	
	function on_change_pec_p2_especie_7_15(v_cmp_chk, a_selector, v_limpiar_campos=true, v_con_evento_change=false){
		mostrarSecciones($("input[name='"+v_cmp_chk+"']").is(':checked'), a_selector, v_limpiar_campos, v_con_evento_change);
		$("input[name='"+v_cmp_chk+"']").on('change', function(){
			mostrarSecciones($(this).is(':checked'), a_selector, v_limpiar_campos, v_con_evento_change);
			quitar_alerta_de_div("#div_an_pec_p2");
		});
	}
	
	
	function mostrar_pec_p2_hato(){
		
		//Bovinos
		for (var j = 1; j <= 7; j++) {
			on_change_pec_p2rN_M_hato('pec_p2r1_'+j+'_hato', ['#fg_pec_p2r1_'+j+'_cabe', '#fg_pec_p2r1_'+j+'_peso', '#fg_pec_p2r1_'+j+'_prod'], "#div_an_pec_p2r1_hato");
		}
		//Bovinos leche
		for (var j = 1; j <= 2; j++) {
			on_change_pec_p2rN_M_hato('pec_p2r2_'+j+'_hato', ['#fg_pec_p2r2_'+j+'_cabe', '#fg_pec_p2r2_'+j+'_peso', '#fg_pec_p2r2_'+j+'_prod', '#fg_pec_p2r2_'+j+'_prod_d'], "#div_an_pec_p2r2_hato");
		}
		//Ovinos
		for (var j = 1; j <= 5; j++) {
			on_change_pec_p2rN_M_hato('pec_p2r3_'+j+'_hato', ['#fg_pec_p2r3_'+j+'_cabe', '#fg_pec_p2r3_'+j+'_peso', '#fg_pec_p2r3_'+j+'_prod'], "#div_an_pec_p2r3_hato");
		}
		//Porcinos
		for (var j = 1; j <= 7; j++) {
			on_change_pec_p2rN_M_hato('pec_p2r4_'+j+'_hato', ['#fg_pec_p2r4_'+j+'_cabe', '#fg_pec_p2r4_'+j+'_peso', '#fg_pec_p2r4_'+j+'_prod'], "#div_an_pec_p2r4_hato");
		}
		//Aves de corral
		for (var j = 1; j <= 2; j++) {
			on_change_pec_p2rN_M_hato('pec_p2r5_'+j+'_hato', ['#fg_pec_p2r5_'+j+'_cabe', '#fg_pec_p2r5_'+j+'_peso', '#fg_pec_p2r5_'+j+'_prod'], "#div_an_pec_p2r5_hato");
		}
		//Caprinos
		for (var j = 1; j <= 6; j++) {
			on_change_pec_p2rN_M_hato('pec_p2r6_'+j+'_hato', ['#fg_pec_p2r6_'+j+'_cabe', '#fg_pec_p2r6_'+j+'_peso', '#fg_pec_p2r6_'+j+'_prod'], "#div_an_pec_p2r6_hato");
		}
		
	}
	
	
	
	function on_change_pec_p2rN_M_hato(v_cmp_chk, a_selector, v_nom_div_alerta){
		limpiarCamposDentroDe(!$("input[name='"+v_cmp_chk+"']").is(':checked'), a_selector);
		$("input[name='"+v_cmp_chk+"']").on('change', function(){
			limpiarCamposDentroDe(!$(this).is(':checked'), a_selector);
			quitar_alerta_de_div(v_nom_div_alerta);
		});
	}
	
	
	
	function para_pec_p3(){
		var a_fg_pec_p3N6_t_ene = [];
		var x = 0;
		for (var i = 1; i <= 9; i++) {
			a_fg_pec_p3N6_t_ene[x++] = '#fg_pec_p3r'+i+'_t_ene';
			a_fg_pec_p3N6_t_ene[x++] = '#fg_pec_p3r'+i+'_cant';
			a_fg_pec_p3N6_t_ene[x++] = '#fg_pec_p3r'+i+'_sup';
		}
		//Se debe de llamar primero esta función antes, de lo contrario el resto de código deja de funcionar
		on_change_chk_sel_bloquear('pec_p3r10_t_ene', a_fg_pec_p3N6_t_ene);
		
		for (var i = 1; i <= 9; i++) {
			on_change_chk_sel_desbloquear('pec_p3r'+i+'_t_ene', ['#fg_pec_p3r'+i+'_cant','#fg_pec_p3r'+i+'_sup'], true, false, '#div_an_pec_p3');
		}
		
	}
	
	function para_pec_p4(){
		for (var i = 1; i <= 12; i++) {
			on_change_pec_p4('pec_p4r'+i);
		}
		on_change_chk_sel_mostrar('pec_p4r13', ['#fg_pec_p4r13_esp'], true, false, '#div_an_pec_p4');
	}
	function on_change_pec_p4(v_cmp_chk){
		mostrar_pec_p5();
		mostrar_pec_p6();
		mostrar_pec_p7();
		mostrar_pec_p8();
		mostrar_pec_p9();
		mostrar_pec_p10();
		$("input[name='"+v_cmp_chk+"']").on('change', function(){
			mostrar_pec_p5();
			mostrar_pec_p6();
			mostrar_pec_p7();
			para_pec_p6();
			para_pec_p7();
			mostrar_pec_p8();
			mostrar_pec_p9();
			mostrar_pec_p10();
			para_pec_p10();
			quitar_alerta_de_div("#div_an_pec_p4");
		});
	}
	function mostrar_pec_p5(){
		var v_pec_p4r1 = ($("input[name='pec_p4r1']").is(':checked'))? true : false;
		var v_pec_p4r2 = ($("input[name='pec_p4r2']").is(':checked'))? true : false;
		var ver_pec_p5 = (v_pec_p4r1 || v_pec_p4r2);
		var ver_pec_p5_sec_A = (v_pec_p4r1);
		var ver_pec_p5_sec_B = (v_pec_p4r2);
		
		mostrarSecciones(ver_pec_p5, ['#div_pec_p5']);
		mostrarSecciones(ver_pec_p5_sec_A, ['#div_pec_p5_sec_A']);
		mostrarSecciones(ver_pec_p5_sec_B, ['#div_pec_p5_sec_B']);
		
	}
	function mostrar_pec_p6(){
		var v_pec_pec_p4r3 = ($("input[name='pec_p4r3']").is(':checked'))? true : false;
		var v_pec_pec_p4r4 = ($("input[name='pec_p4r4']").is(':checked'))? true : false;
		var v_pec_pec_p4r5 = ($("input[name='pec_p4r5']").is(':checked'))? true : false;
		
		var ver_pec_p6 = (v_pec_pec_p4r3 || v_pec_pec_p4r4 || v_pec_pec_p4r5);
		
		mostrarSecciones(ver_pec_p6, ['#div_pec_p6_tit']);	//Títulos de la pregunta
		mostrarSecciones(v_pec_pec_p4r3, ['#div_pec_p6r1']);	//Vacas doble propósito
		mostrarSecciones(v_pec_pec_p4r4, ['#div_pec_p6r2']);	//Vacas adultas
		mostrarSecciones(v_pec_pec_p4r5, ['#div_pec_p6r3']);	//Ovejas adultas lecheras
		
	}
	function mostrar_pec_p7(){
		var v_pec_p4r6 = ($("input[name='pec_p4r6']").is(':checked'))? true : false;
		var v_pec_p4r7 = ($("input[name='pec_p4r7']").is(':checked'))? true : false;
		var v_pec_p4r8 = ($("input[name='pec_p4r8']").is(':checked'))? true : false;
		var v_pec_p4r9 = ($("input[name='pec_p4r9']").is(':checked'))? true : false;
		var v_pec_p4r10 = ($("input[name='pec_p4r10']").is(':checked'))? true : false;
		
		var ver_pec_p7 = (v_pec_p4r6 || v_pec_p4r7 || v_pec_p4r8 || v_pec_p4r9 || v_pec_p4r10);
		
		mostrarSecciones(ver_pec_p7, ['#div_pec_p7_tit']);	//Títulos de la pregunta
		mostrarSecciones(v_pec_p4r6, ['#div_pec_p7r1']);	//Vacas para cría para carne
		mostrarSecciones(v_pec_p4r7, ['#div_pec_p7r2']);	//Vacas doble propósito
		mostrarSecciones(v_pec_p4r8, ['#div_pec_p7r3']);	//Vacas adultas
		mostrarSecciones(v_pec_p4r9, ['#div_pec_p7r4']);	//Ovejas adultas para producción de crías
		mostrarSecciones(v_pec_p4r10, ['#div_pec_p7r5']);	//Ovejas adultas para producción de crías y de lana
	}
	function mostrar_pec_p8(){
		//Terneros antes del destete
		var v_pec_p4r11 = ($("input[name='pec_p4r11']").is(':checked'))? true : false;
		
		mostrarSecciones(v_pec_p4r11, ['#div_pec_p8']);
	}
	function mostrar_pec_p9(){
		//Ovejas adultas para producción de crías y de lana o pelo
		var v_pec_p4r11 = ($("input[name='pec_p4r11']").is(':checked'))? true : false;
		mostrarSecciones(v_pec_p4r11, ['#div_pec_p9']);
	}
	
	function mostrar_pec_p10(){
		//Bueyes para fuerza de tiro
		var v_pec_p4r12 = ($("input[name='pec_p4r12']").is(':checked'))? true : false;
		
		mostrarSecciones(v_pec_p4r12, ['#div_pec_p10_tit', '#div_pec_p10r4']);
		
		mostrarSecciones(v_pec_p4r12, ['#div_pec_p10r1']);	//Bueyes para fuerza de tiro
		mostrarSecciones(v_pec_p4r12, ['#div_pec_p10r2']);	//Mulas y Asnos
		mostrarSecciones(v_pec_p4r12, ['#div_pec_p10r3']);	//Equinos
		
	}
	function para_pec_p5(){
		for (var i = 1; i <= 4; i++) {
			on_change_chk_sel_mostrar('pec_p5r'+i+'_donde', ['#div_pec_p5r'+i+'_donde_sub'], true, false, '#div_an_pec_p5_a');
		}
		for (var i = 4; i <= 6; i++) {
			on_change_chk_sel_mostrar('pec_p5r'+i, [], true, false, '#div_an_pec_p5_b');	//Sólo para ocultar el mensaje de alerta
		}
		for (var i = 1; i <= 6; i++) {
			on_change_chk_sel_mostrar('pec_p5r5_'+i, [], true, false, '#div_an_pec_p5r5');	//Sólo para ocultar el mensaje de alerta
		}
		on_change_chk_sel_mostrar('pec_p5r5_6', ['#fg_pec_p5r5_6_esp'], true, false, '#div_an_pec_p5r5');
		on_change_chk_sel_mostrar('pec_p5r5', ['#div_pec_p5r5_sub']);
	}
	function para_pec_p6(){
		for (var i = 1; i <= 3; i++) {
			on_change_chk_sel_desbloquear('pec_p6r'+i+'_espe', ['#fg_pec_p6r'+i+'_prod'], true, false, '#div_an_pec_p6');
		}
	}
	function para_pec_p7(){
		for (var i = 1; i <= 5; i++) {
			if(i<=3){
				on_change_chk_sel_desbloquear('pec_p7r'+i+'_espe', ['#fg_pec_p7r'+i+'_porc'], true, false, '#div_an_pec_p7');
			}else{
				on_change_chk_sel_desbloquear('pec_p7r'+i+'_espe', ['#fg_pec_p7r'+i+'_porc','#fg_pec_p7r'+i+'_crias'], true, false, '#div_an_pec_p7');
			}
		}
	}
	function para_pec_p10(){
		var a_fg_pec_p10r1 = [];
		var x = 0;
		for (var i = 1; i <= 3; i++) {
			a_fg_pec_p10r1[x++] = '#fg_pec_p10r'+i+'_espe';
			a_fg_pec_p10r1[x++] = '#fg_pec_p10r'+i+'_h_dia';
			a_fg_pec_p10r1[x++] = '#fg_pec_p10r'+i+'_d_anio';
		}
		//Se debe de llamar primero esta función antes, de lo contrario el resto de código deja de funcionar
		on_change_chk_sel_bloquear('pec_p10r4_espe', a_fg_pec_p10r1);
		
		for (var i = 1; i <= 3; i++) {
			on_change_chk_sel_desbloquear('pec_p10r'+i+'_espe', ['#fg_pec_p10r'+i+'_h_dia', '#fg_pec_p10r'+i+'_d_anio'], true, false, '#div_an_pec_p10');
		}
		on_change_chk_sel_desbloquear('pec_p10r4_espe', [], true, false, '#div_an_pec_p10');
	}
	function para_pec_p11(){
		for (var i = 1; i <= 12; i++) {
			on_change_pec_p11("pec_p11r"+i, ["#div_pec_p11r"+i+"_sub"]);
			quitar_alerta_en_p11('pec_p11r'+i+'_porc');
		}
		
	}
	function quitar_alerta_en_p11(v_cmp_num){
		$("input[name='"+v_cmp_num+"']").on('click', function(){
			quitar_alerta_de_div('#div_an_pec_p11_tot');
		});
	}
	function on_change_pec_p11(v_cmp_chk, a_selector, v_limpiar_campos=true, v_con_evento_change=false){
		mostrarSecciones($("input[name='"+v_cmp_chk+"']").is(':checked'), a_selector, v_limpiar_campos, v_con_evento_change);
		mostrar_pec_p11_p();
		$("input[name='"+v_cmp_chk+"']").on('change', function(){
			mostrarSecciones($(this).is(':checked'), a_selector, v_limpiar_campos, v_con_evento_change);
			mostrar_pec_p11_p();
			quitar_alerta_de_div('#div_an_pec_p11');
		});
	}
	function mostrar_pec_p11_p(){
		var x=0;
		var a_p11_cmp_sum = [];
		a_p11_cmp_sum[x++] = ['pec_p11r1_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r2_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r3_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r4_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r5_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r6_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r7_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r8_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r9_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r10_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r11_porc'];
		a_p11_cmp_sum[x++] = ['pec_p11r12_porc'];
		
		a_p11_cmp_sum.forEach(function(v_cmp_id_nom){
			on_change_cmp_suma(v_cmp_id_nom, a_p11_cmp_sum, 'pec_p11_tot', 'div_pec_p11_tot');
		});
		
	}
	return {
		activar:function(){
			para_pec_p2();
			para_pec_p3();
			para_pec_p4();
			para_pec_p5();
			para_pec_p6();
			para_pec_p7();
			para_pec_p10();
			para_pec_p11();
		}
	};
}();

