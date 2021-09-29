<?php
/**
 * Controlador CatFrmGenControl
 * Se utiliza para desplegar los distintos formularios usados dentro de la aplicación, excepto los formularios para los cuestionarios y el catálog de grupos
 *
 * @author Ismael Rojas
 */
class CatfrmgenControl extends TableroBase{
	public object $frm_al3;
	private int $cat_usuario_id;
	public function __construct() {
		parent::__constructTablero();
		$this->setUsarLibForma(true);
		$this->setPaginaDistintivos();
		$this->defineVista("Tablero.php");
	}
	/**
	 * Acción para desplegar el formulario de Catálogo de Usuarios
	 */
	public function cat_usuario() {
		$this->setUsarLibVista(true);
		$cat_usuario_id = (isset($_REQUEST['cat_usuario_id']))? intval($_REQUEST['cat_usuario_id']) : 0;
		$this->cat_usuario_id = $cat_usuario_id;
		$this->setArrDatoVistaValor('tit_forma', 'Catálogo de usuarios');
		if($cat_usuario_id){
			$this->cargarFrmUsuario();
			$this->setArrVistaGrupo();
			$this->es_nuevo = false;
		}
		$this->frm_al3 = new FormularioALTE3($this->arr_cmps_frm);
		parent::setArrHTMLTagLiNavItem();	//Se crean los items del tablero
	}
	public function cat_veh_marca() {
		$cat_veh_marca_id = (isset($_REQUEST['cat_veh_marca_id']))? intval($_REQUEST['cat_veh_marca_id']) : 0;
		$this->setArrDatoVistaValor('tit_forma', 'Catálogo de Marcas de vehículos');
		if($cat_veh_marca_id){
			$cat_veh_marca = new CatN('cat_veh_marca');
			$cat_veh_marca->setArrReg($cat_veh_marca_id);
			$this->arr_cmps_frm = $cat_veh_marca->getArrReg();
			$this->es_nuevo = false;
		}
		$this->frm_al3 = new FormularioALTE3($this->arr_cmps_frm);
		parent::setArrHTMLTagLiNavItem();	//Se crean los items del tablero
	}
	public function cat_veh_modelo() {
		$cat_veh_modelo_id = (isset($_REQUEST['cat_veh_modelo_id']))? intval($_REQUEST['cat_veh_modelo_id']) : 0;
		$this->setArrDatoVistaValor('tit_forma', 'Catálogo de modelos de vehículos');
		if($cat_veh_modelo_id){
			$cat_veh_modelo = new CatN('cat_veh_modelo');
			$cat_veh_modelo->setArrReg($cat_veh_modelo_id);
			$this->arr_cmps_frm = $cat_veh_modelo->getArrReg();
			$this->es_nuevo = false;
		}
		$this->frm_al3 = new FormularioALTE3($this->arr_cmps_frm);
		$this->frm_al3->setConSelect2(true);
		parent::setArrHTMLTagLiNavItem();	//Se crean los items del tablero
	}
	/**
	 * Genera la información necesario para desplegar en el formulario de Catálogo de usuarios, como el arreglo arr_cmps_frm
	 * @param int $cat_usuario_id
	 */
	private function cargarFrmUsuario() {
		$cat_usuario_id = $this->cat_usuario_id;
		$cat_usuario = new CatUsuario();
		$cat_usuario->setArrReg($cat_usuario_id);
		$this->arr_cmps_frm = $cat_usuario->getArrReg();
		//Se crea sentencia AND para el campo cat_estado_id
		$and_estado = ($this->getCampoValor('cat_estado_id'))? " AND `cat_estado_id` LIKE '".$this->getCampoValor('cat_estado_id')."' ORDER BY `cat_municipio`.`descripcion` ASC" : " AND FALSE ";
		//Se manda la sentencia AND de cat_estado_id mediante el arreglo arr_datos_vista
		$this->setArrDatoVistaValor('and_estado', $and_estado);
	}
	/**
	 * Se genera arreglo con el contenido del el query join de las tablas: grupo, cat_grupo y cat_permiso
	 */
	private function setArrVistaGrupo(){
		$cat_grupo_id = intval($this->getCampoValor('cat_grupo_id'));
		if($cat_grupo_id){
			$grupo = new Grupo();
			$grupo->setArrViGrupoDeCatGpoId($cat_grupo_id);
			$this->arr_tabla = $grupo->getArrViGrupo();
		}
	}
}
