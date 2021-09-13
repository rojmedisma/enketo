<?php
/**
 * Clase FAQ
 *
 * @author Ismael Rojas
 */
class FAQ extends ModeloBase{
	public function __construct(){
		parent::__construct();
		$this->tbl_nom = "faq";
		$this->cmp_id_nom = $this->tbl_nom."_id";
	}
}
