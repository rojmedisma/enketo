<?php
/**
 * Clase AjaxControl
 *
 * @author Ismael Rojas
 */
class AjaxControl extends ControladorBase{
	public function imprime_veh_modelo() {
		$cat_veh_marca_id = (isset($_REQUEST["cat_veh_marca_id"]))? $_REQUEST["cat_veh_marca_id"] : "";
		$opt_veh_modelo = "";
		if($cat_veh_marca_id!=""){
			$cat_veh_marca = new CatVehMarca();
			$cat_veh_marca->setAndOptSel($cat_veh_marca_id);
			$and_veh_modelo = $cat_veh_marca->getAndOptSel();
			
			
			$cat_veh_modelo = new CatN('cat_veh_modelo');
			$cat_veh_modelo->setHTMLOpcCat($and_veh_modelo);
			$opt_veh_modelo = $cat_veh_modelo->getHTMLOpcCat();
		}
		echo $opt_veh_modelo;
	}
	public function get_arr_reg_faq() {
		$faq_id = (isset($_REQUEST["faq_id"]))? intval($_REQUEST["faq_id"]) : 0;
		
		$faq = new FAQ();
		$faq->setArrReg($faq_id);
		$arr_reg_faq = $faq->getArrReg();
		echo json_encode($arr_reg_faq);
	}
}
