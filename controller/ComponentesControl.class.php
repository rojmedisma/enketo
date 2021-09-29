<?php
/**
 * Clase ComponentesControl
 *
 * @author Ismael Rojas
 */
class ComponentesControl extends TableroBase{
	public object $frm_al3;
	public function __construct() {
		parent::__constructTablero();
		$this->setPaginaDistintivos();
		$this->setUsarLibForma(true);
		$this->defineVista("Tablero.php");
	}
	public function pestania01() {
		$componentes = new Componentes();
		$componentes->setArrRegComponentes();
		$this->arr_cmps_frm = $componentes->getArrReg();
		$this->es_nuevo = false;
		
		$this->frm_al3 = new FormularioALTE3($this->arr_cmps_frm);
		
		parent::setArrHTMLTagLiNavItem();	//Se crean los items del tablero
	}
	public function pestania02() {
		
		$faq = new FAQ();
		$faq->setArrTbl();
		$this->arr_tabla = $faq->getArrTbl();
		
		$this->frm_al3 = new FormularioALTE3(array());
		
		parent::setArrHTMLTagLiNavItem();	//Se crean los items del tablero
	}
	public function esPestaniaActiva($accion) {
		if($accion == $this->getAccion()){
			return ' active';
		}else{
			return '';
		}
	}
	public function getHTMLBtnBorrar($faq_id) {
		$alte3_html = new ALTE3HTML();
		$alte3_html->setHTMLBtnBorrar('borrar', 'faq', $this->getControlador(), $this->getAccion(), 'faq_id', $faq_id);
		return $alte3_html->getHTMLContenido();
	}
}
