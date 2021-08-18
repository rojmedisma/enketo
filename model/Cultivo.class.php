<?php
/**
 * Clase Cultivo
 *
 * @author Ismael Rojas
 */
class Cultivo extends ModeloBase{
	public function __construct(){
		parent::__construct();
		$this->tbl_nom = "cultivo";
		$this->cmp_id_nom = "cultivo_id";
	}
}
