<?php
/**
 * Clase Componentes
 *
 * @author Ismael Rojas
 */
class Componentes extends ModeloBase{
	private $componentes_id;
	public function __construct(){
		parent::__construct();
		$this->tbl_nom = "componentes";
		$this->cmp_id_nom = $this->tbl_nom."_id";
		$this->componentes_id = 1;
		$this->and_tbl = "";
	}
	public function setArrRegComponentes() {
		$this->setArrReg($this->componentes_id);
	}
}
