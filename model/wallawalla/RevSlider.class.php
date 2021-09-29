<?php
/**
 * Clase RevSlider
 *
 * @author Ismael Rojas
 */
class RevSlider extends ModeloBase{
	private $and_vista;
	public function __construct(){
		parent::__construct();
		$this->tbl_nom = "rev_slider";
		$this->cmp_id_nom = "rev_slider_id";
		$this->and_vista = " AND `v_".$this->tbl_nom."`.`borrar` IS NULL ";
	}
	public function setArrTblVistaRevSlider($and="") {
		$and_tbl = $this->and_vista." ".$and;
		$str_query = "SELECT * FROM `{$this->bd->getBD()}`.`v_rev_slider` WHERE 1 ".$and_tbl;
		$this->arr_tbl = $this->bd->getArrDeQuery($str_query, $this->cmp_id_nom);
	}
}
