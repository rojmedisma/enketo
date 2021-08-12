<?php
/**
 * Descripción de ValidaC[N]
 * La clase ValidaC[N] es donde se definen las reglas de validación del cuestionario con clave N.
 * Las reglas de validación se dividen por los módulos que contiene el cuestionario, existiendo una función/método por cada clase.
 * En esta caso, esta clase es exclusiva para el cuestionario para Productores del proyecto SIAP, con cat_cuestionario_id = 1
 * 
 * 
 * @author Ismael Rojas
 */
class ValidaC01 extends ModeloValidaBase{
	public function __construct($arr_cmps_frm) {
		parent::__construct($arr_cmps_frm);
	}
	/**
	 * Definición de reglas para el módulo cat_cuest_modulo_id = 1 del cuestionario cat_cuestionario_id = 1
	 */
	protected function setArrReglasM01() {
		//extract($this->arr_cmps_frm, EXTR_PREFIX_ALL, 'e');
		$arr_reglas_val = array();
		
		$arr_reglas_val['prod_edo'] = array('regla'=>'requerido', 'tit_preg'=>'Pregunta 4');
		$arr_reglas_val['prod_mpo'] = array('regla'=>'requerido', 'tit_preg'=>'Pregunta 4');
		$arr_reglas_val['prod_loc'] = array('regla'=>'requerido', 'tit_preg'=>'Pregunta 4');
		
		//$arr_reglas_val['prod_geo_latitud'] = array('regla'=>'requerido');
		//$arr_reglas_val['prod_geo_longitud'] = array('regla'=>'requerido');
		
		$this->arr_reglas_val = $arr_reglas_val;
	}
	
}
