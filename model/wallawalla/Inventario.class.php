<?php
/**
 * Clase Inventario
 *
 * @author Ismael Rojas
 */
class Inventario extends ModeloBase{
	private $and_tbl;
	private $and_vista;
	public function __construct(){
		parent::__construct();
		$this->tbl_nom = "inventario";
		$this->cmp_id_nom = "inventario_id";
		$this->and_tbl = " AND `".$this->tbl_nom."`.`borrar` IS NULL AND `".$this->tbl_nom."`.`inhabilitar` IS NULL ";
		$this->and_vista = " AND `v_".$this->tbl_nom."`.`borrar` IS NULL AND `v_".$this->tbl_nom."`.`inhabilitar` IS NULL ";
	}
	public function crearInventario() {
		$arr_cmps = array(
			'`inventario_id`'=>txt_sql(""),
			'`inhabilitar`'=>txt_sql("1"),
			'`borrar`'=>txt_sql(""),
		);
		$qry_act = "INSERT INTO `".$this->bd->getBD()."`.`inventario` (".implode(",",array_keys($arr_cmps)).") VALUES (".implode(",",array_values($arr_cmps)).");";
		$inventario_id = $this->bd->ejecutaQryInsert($qry_act);
		
		$log = new Log();
		$log->setRegLog('inventario_id', $inventario_id, 'guardar', 'Aviso', "Se creó registro de inventario en modo inhabilitado");
		return $inventario_id;
	}
	public function setArrTblVistaInventario($and="") {
		$and_tbl = $this->and_vista." ".$and;
		$str_query = "SELECT * FROM `{$this->bd->getBD()}`.`v_inventario` WHERE 1 ".$and_tbl;
		$this->arr_tbl = $this->bd->getArrDeQuery($str_query, $this->cmp_id_nom);
	}
}
