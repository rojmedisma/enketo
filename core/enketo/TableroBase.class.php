<?php
/**
 * Clase core TableroBase
 * Es una extensión para todos los controladores que contienen acciones que serán desplegadas dentro del tablero
 *
 * @author Ismael Rojas
 */
class TableroBase extends ControladorBase{
	protected object $permiso;
	/**
	 * Función propia del proyecto siap_igei
	 * Constructor para el funcionamiento de las opciones del tablero
	 */
	protected function __constructTablero(){
		$this->setArrRegUsuario();	//Se crea el arreglo con el detalle de datos del usuario
		$this->setConMenuLateralFijo(true);
		//Se define el arreglo de permisos
		$this->permiso = new Permiso();
		$this->permiso->setArrPermisos();
		$this->setArrPermisos($this->permiso->getArrPermisos());
		//Si el usuario está firmado y no tiene el permiso de acceso, se muestra el error
		if(!empty($this->permiso->getArrPermisos()) &&  !$this->tienePermiso('acceso')){
			$this->redireccionaErrorAccion('sin_permisos', array('tit_accion'=>'Acceso al sistema'));
		}
		
	}
	/**
	 * Para el menú lateral fijo, llama las funciones que crean las entradas de menú
	 * NOTA: En las funciones que son acciones, siempre se debe llamar al final, debido a que requiere de todos los valores previamente calculados en la función acción
	 */
	protected function setArrHTMLTagLiNavItem() {
		$this->setArrHTMLTagLiNavItemTablero();
		$this->setArrHTMLTagLiNavItemCuest();
		$this->setArrHTMLTagLiNavItemMuestra();
		$this->setArrHTMLTagLiNavItemCat();
		$this->setArrHTMLTagLiNavItemConf();
	}
	/**
	 * Opciones del menú lateral fijo izquierdo para el Tablero
	 */
	protected function setArrHTMLTagLiNavItemTablero(){
		$arr_li_nav_item = array();
		
		$alte3_html = new ALTE3HTML();
		$alte3_html->setHTMLLiNavItem(CONTROLADOR_DEFECTO, ACCION_DEFECTO, '<i class="nav-icon fas fa-home"></i>&nbsp;<p>Inicio</p>', 
			($this->getControlador()==CONTROLADOR_DEFECTO && $this->getAccion() == ACCION_DEFECTO)? array('a_class'=>'nav-link active') : array()
		);
		$arr_li_nav_item[] = $alte3_html->getHTMLContenido();
		
		$this->arr_html_tag['li_ni_sb_tablero'] = $arr_li_nav_item;
	}
	/**
	 * Opciones de consulta de registros de tipo catálogo del menú lateral fijo izquierdo para el Tablero
	 */
	protected function setArrHTMLTagLiNavItemCat(){
		$cat_usuario_id = (isset($_REQUEST['cat_usuario_id']))? intval($_REQUEST['cat_usuario_id']) : 0;
		$cat_grupo_id = (isset($_REQUEST['cat_grupo_id']))? intval($_REQUEST['cat_grupo_id']) : 0;
		$alte3_html = new ALTE3HTML();
		
		$tag_lnic_cat_usuario = '';
		if($this->tienePermiso('al-usuario')){
			$alte3_html->setArrHTMLTagLiNavItemCat('cat_usuario_id', $cat_usuario_id, $this->getControlador(), $this->getAccion(), 'catvistagen', 'cat_usuario', 'catfrmgen', 'cat_usuario', $this->es_nuevo, 'fas fa-user', 'Usuarios');
			$tag_lnic_cat_usuario = $alte3_html->getHTMLContenido();
		}
		$tag_lnic_cat_grupo = '';
		if($this->tienePermiso('al-grupo')){
			$alte3_html->setArrHTMLTagLiNavItemCat('cat_grupo_id', $cat_grupo_id, $this->getControlador(), $this->getAccion(), 'catvistagen', 'cat_grupo', 'catfrmgpo', 'cat_grupo', $this->es_nuevo, 'fas fa-users', 'Grupos');
			$tag_lnic_cat_grupo = $alte3_html->getHTMLContenido();
		}
		$arr_html_tag = array();
		if($this->tienePermiso('al-usuario') || $this->tienePermiso('al-grupo')){
			$arr_html_tag = array(
				'<li class="nav-header">CATÁLOGOS</li>',
				$tag_lnic_cat_usuario,
				$tag_lnic_cat_grupo
			);
		}
		$this->arr_html_tag['li_ni_sb_cat'] = $arr_html_tag;
	}
	/**
	 * Opciones del menú lateral fijo izquierdo para el Tablero. Muestra las opciones vista consulta del cuestionario
	 */
	protected function setArrHTMLTagLiNavItemCuest(){
		$cat_cuestionario_id = (isset($_REQUEST['cat_cuestionario_id']))? intval($_REQUEST['cat_cuestionario_id']) : "";
		
		$arr_li_nav_item = array();
		if($cat_cuestionario_id){
			$alte3_html = new ALTE3HTML();
			$arr_li_nav_item[] = $alte3_html->getHTMLContenido();
			$arr_li_nav_item[] = '<li class="nav-header">CUESTIONARIO</li>';
			$alte3_html->setHTMLLiNavItemExt('cuestvista', 'inicio', false, 
					array("cat_cuestionario_id"=>$cat_cuestionario_id), 
					false, 
					'<i class="nav-icon fas fa-list-alt"></i>&nbsp;<p>Consulta</p>', 
					($this->getControlador()=='cuestvista' && $this->getAccion() == 'inicio')? array('a_class'=>'nav-link active') : array()
			);

			$arr_li_nav_item[] = $alte3_html->getHTMLContenido();
		}
		
		$this->arr_html_tag['li_ni_sb_cuest'] = $arr_li_nav_item;
	}
	/**
	 * Opciones del menú lateral fijo izquierdo para el Tablero. Muestra las opciones para la sección MUESTRA
	 */
	protected function setArrHTMLTagLiNavItemMuestra(){
		$cat_cuestionario_id = (isset($_REQUEST['cat_cuestionario_id']))? intval($_REQUEST['cat_cuestionario_id']) : "";
		
		$arr_li_nav_item = array();
		if($cat_cuestionario_id && $this->tienePermiso('ae-muestra')){
			$alte3_html = new ALTE3HTML();
			$arr_li_nav_item[] = $alte3_html->getHTMLContenido();
			$arr_li_nav_item[] = '<li class="nav-header">MUESTRA</li>';
			$alte3_html->setHTMLLiNavItemExt('muestra', 'inicio', false, 
					array("cat_cuestionario_id"=>$cat_cuestionario_id), 
					false, 
					'<i class="nav-icon fas fa-list-alt"></i>&nbsp;<p>Consulta</p>', 
					($this->getControlador()=='muestra' && ($this->getAccion() == 'inicio' || $this->getAccion() == 'validar'))? array('a_class'=>'nav-link active') : array()
			);

			$arr_li_nav_item[] = $alte3_html->getHTMLContenido();
			
			
		}
		
		$this->arr_html_tag['li_ni_sb_muestra'] = $arr_li_nav_item;
	}
	
	/**
	 * Opciones del menú lateral fijo izquierdo para el Tablero. Muestra las opciones de la sección ADMINISTRAR
	 */
	protected function setArrHTMLTagLiNavItemConf(){
		$arr_li_nav_item = array();
		$alte3_html = new ALTE3HTML();
		
		$arr_tag_item_manual_usu = array();
		$arr_tag_item_manual_usu[] = '<li class="nav-item">';
		$arr_tag_item_manual_usu[] = '	<a href="/'.DIR_LOCAL.'/assets/doc/Manual_usuario.pdf" target="new" class="nav-link">';
		$arr_tag_item_manual_usu[] = '		<i class="nav-icon fas fa-file-pdf"></i>&nbsp;<p>Manual de usuario</p>';
		$arr_tag_item_manual_usu[] = '	</a>';
		$arr_tag_item_manual_usu[] = '</li>';
		$tag_item_manual_usu = tag_string($arr_tag_item_manual_usu);
		
		$tag_item_indic = "";
		if($this->tienePermiso('al-indicadores')){
			$alte3_html->setHTMLLiNavItem('catfrmgen', 'indicadores', '<i class="nav-icon fas fa-layer-group"></i>&nbsp;<p>Indicadores</p>', 
				($this->getControlador()=='catfrmgen' && $this->getAccion() == 'indicadores')? array('a_class'=>'nav-link active') : array()
			);
			$tag_item_indic = $alte3_html->getHTMLContenido();
		}
		
		
		
		
		$tag_item_log = "";
		if($this->tienePermiso('al-log')){
			$alte3_html->setHTMLLiNavItem('catvistagen', 'log', '<i class="nav-icon fas fa-clipboard-check"></i>&nbsp;<p>Registros de log</p>', 
				($this->getControlador()=='catvistagen' && $this->getAccion() == 'log')? array('a_class'=>'nav-link active') : array()
			);
			$tag_item_log = $alte3_html->getHTMLContenido();
		}
		
		$tag_item_cod_fte = "";
		if($this->tienePermiso('ver-doc-cod')){
			$arr_tag_cod_fte = array();
			$arr_tag_cod_fte[] = '<li class="nav-item">';
			$arr_tag_cod_fte[] = '	<a href="/'.DIR_DOC_COD.'/html/index.html" target="new" class="nav-link">';
			$arr_tag_cod_fte[] = '		<i class="nav-icon fas fa-code"></i>&nbsp;<p>Documentación</p>';
			$arr_tag_cod_fte[] = '	</a>';
			$arr_tag_cod_fte[] = '</li>';
			$tag_item_cod_fte = tag_string($arr_tag_cod_fte);
		}
		
		
		
		$arr_li_nav_item = array();
		$arr_li_nav_item = array(
			'<li class="nav-header">MÁS OPCIONES</li>',
			$tag_item_indic,
			$tag_item_log,
			$tag_item_manual_usu,
			$tag_item_cod_fte
		);
		
		$this->arr_html_tag['li_ni_sb_conf'] = $arr_li_nav_item;
		
		
	}
}
