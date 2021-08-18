<?php
/**
 * Clase CultivoControl
 *
 * @author Ismael Rojas
 */
class CultivoControl extends TableroBase{
	public object $frm_al3;
	private int $cultivo_id;
	private array $arr_reg_adjunto;
	public function __construct() {
		parent::__constructTablero();
		$this->cultivo_id = (isset($_REQUEST['cultivo_id']))? intval($_REQUEST['cultivo_id']) : 0;
		
		$this->es_nuevo = ($this->cultivo_id)? false : true;
		
		
		$this->setUsarLibForma(true);
		$this->defineVista("Mostrador.php");
	}
	public function inicio() {
		$cat_usuario_id = (isset($_REQUEST['cat_usuario_id']))? intval($_REQUEST['cat_usuario_id']) : 0;
		$this->setPaginaDistintivos();
		$this->setArrDatoVistaValor('tit_forma', 'Registro de variedad de maiz');
		
		if($this->cultivo_id){
			$cultivo = new Cultivo();
			$cultivo->setArrReg($this->cultivo_id);
			$this->arr_cmps_frm = $cultivo->getArrReg();
		}else{
			if(!$cat_usuario_id){
				$this->redireccionaError('Argumento cat_usuario_id vacío', 'Se requiere el argumento cat_usuario_id para ingresar a la sección de inventario');
			}
			$this->arr_cmps_frm = array(
				'cat_usuario_id'=>$cat_usuario_id,
			);
		}
		
		$this->frm_al3 = new FormularioALTE3($this->arr_cmps_frm);
	}
	public function inventario() {
		if(!$this->cultivo_id){
			$this->redireccionaError('Argumento cultivo_id vacío', 'Se requiere el argumento cultivo_id para ingresar a la sección de inventario');
		}
		
		$this->setPaginaDistintivos();
		$this->setArrDatoVistaValor('tit_forma', 'Inventario');
		$this->setArrDatoVistaValor('cultivo_id', $this->cultivo_id);
		
		$cult_inventario = new CultInventario();
		$cult_inventario->setArrTbl(" AND `cultivo_id` = '".$this->cultivo_id."' ORDER BY `fecha_disponibilidad` ASC ");
		$this->arr_tabla = $cult_inventario->getArrTbl();
		
		$this->frm_al3 = new FormularioALTE3(array());
	}
	public function fotos() {
		$this->setPaginaDistintivos();
		$this->usar_lib_fie_input = true;	//Se activa el llamado a la librería para el uso de campos adjuntos
		$this->setArrDatoVistaValor('tit_forma', 'Fotos');
		$this->setArrDatoVistaValor('cultivo_id', $this->cultivo_id);
		
		//Arreglo de registros de adjunto
		$adjunto = new Adjunto();
		$and_adj = " AND `cultivo_id` = '".$this->cultivo_id."' ";
		$adjunto->setArrTblAdj($and_adj);
		$this->arr_reg_adjunto = $adjunto->getArrTbl();
		
	}
	public function getPestaniaActiva($pestania) {
		if($this->getAccion() == $pestania){
			return ' active';
		}else{
			return '';
		}
	}
	public function getCultivoId() {
		return $this->cultivo_id;
	}
	public function arrRegAdjunto() {
		return $this->arr_reg_adjunto;
	}
}
