<?php
/**
 * Clase ComponentesControl
 *
 * @author Ismael Rojas
 */
class ComponentesControl extends TableroBase{
	public object $frm_al3;
	private int $rev_slider_id;
	private array $arr_tbl_rev_slider;
	private array $arr_tbl_adjunto_rev_slider;
	
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
	/**
	 * Vista:
	 *	view\ALTE3\modulos\Tablero\Componente\pestania03.php
	 */
	public function pestania03() {
		$this->usar_lib_fie_input = true;	//Se activa el llamado a la librería para el uso de campos adjuntos
		$this->rev_slider_id = (isset($_REQUEST['rev_slider_id']))? intval($_REQUEST['rev_slider_id']) : 1;
		$this->setArrTblRevSlider();
		
		$arr_tbl_rev_slider = $this->getArrTblRevSlider();
		$arr_reg_rev_slider = valorEnArreglo($arr_tbl_rev_slider, $this->rev_slider_id);
		$this->arr_cmps_frm = $arr_reg_rev_slider;
		
		$this->setArrTblAdjuntoRevSlider();
		
		$this->frm_al3 = new FormularioALTE3($this->arr_cmps_frm);
		parent::setArrHTMLTagLiNavItem();	//Se crean los items del tablero
	}
	public function esSliderActivo($rev_slider_id) {
		if($rev_slider_id == $this->rev_slider_id){
			return ' active';
		}else{
			return '';
		}
	}
	private function setArrTblRevSlider() {
		$rev_slider = new RevSlider();
		$rev_slider->setArrTbl();
		$this->arr_tbl_rev_slider = $rev_slider->getArrTbl();
	}
	public function getArrTblRevSlider() {
		return $this->arr_tbl_rev_slider;
	}
	
	private function functionName($param) {
		
	}
	
	public function getHTMLBtnBorrarFAQ($faq_id) {
		$alte3_html = new ALTE3HTML();
		$alte3_html->setHTMLBtnBorrar('borrar', 'faq', $this->getControlador(), $this->getAccion(), 'faq_id', $faq_id);
		return $alte3_html->getHTMLContenido();
	}
	private function setArrTblAdjuntoRevSlider() {
		$adjunto = new Adjunto();
		$and_adj = " AND `adjunto_tipo` LIKE 'rev_slider' AND `rev_slider_id` = '".$this->rev_slider_id."' ";
		$adjunto->setArrTblAdj($and_adj);
		$this->arr_tbl_adjunto_rev_slider = $adjunto->getArrTbl();
	}
	public function getArrTblAdjuntoRevSlider() {
		return $this->arr_tbl_adjunto_rev_slider;
	}
}
