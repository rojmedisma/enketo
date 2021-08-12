/**
 * Función IIFE para el módulo actual
 * @type 
 */
var Modulo = function(){
	function modal_es_nuevo(){
		if (typeof v_es_nuevo !== 'undefined' && parseInt(v_es_nuevo)===1) {
			$("#mdl_bienvenido").modal("show");
		}
	}
	function de_maiz_tot_variedades(){
		var v_val = $("select[name='maiz_tot_variedades']").val();
		var v_val_i = (v_val=="")? 0 : parseInt(v_val);
		console.log(v_val_i);
		ocultarSecciones((v_val_i<1), ['#div_vari_1']);
		ocultarSecciones((v_val_i<2), ['#div_vari_2']);
	}
	function de_prod_edo(o_this){
		$("#fg_prod_mpo").hide();
		$("#div_spinner_mpo").show();
		$.ajax({
			url:"index.php?controlador=cuestcat&accion=imprime_municipios",
			data:"cat_estado_id="+o_this.val(),
			cache:false,
			dataType:"html",
			success:function(result){
				$("#prod_mpo").html(result);
				$("#prod_loc").html("");
				$("#fg_prod_mpo").show();
				$("#div_spinner_mpo").hide();
			},
			error:function(result){
				alert("Error interno. Revisar mensaje en consola web y notificar al administrador del sistema.");
				console.log(result);
			}
		});
	}
	function de_prod_mpo(o_this){
		$("#fg_prod_loc").hide();
		$("#div_spinner_loc").show();
		$.ajax({
			url:"index.php?controlador=cuestcat&accion=imprime_localidades",
			data:"cat_municipio_id="+o_this.val(),
			cache:false,
			dataType:"html",
			success:function(result){
				$("#prod_loc").html(result);
				$("#fg_prod_loc").show();
				$("#div_spinner_loc").hide();
			},
			error:function(result){
				alert("Error interno. Revisar mensaje en consola web y notificar al administrador del sistema.");
				console.log(result);
			}
		});
	}
	
	return {
		activar:function(){
			bsCustomFileInput.init();
			modal_es_nuevo();
			
			//3. Ubicación de la unidad de producción
			$("select[name='prod_edo']").on("change", function(){
				de_prod_edo($(this));
			});
			$("select[name='prod_mpo']").on("change", function(){
				de_prod_mpo($(this));
			});
			de_maiz_tot_variedades();
			$("select[name='maiz_tot_variedades']").on("change", function(){
				de_maiz_tot_variedades();
			});
		}
	};
}();