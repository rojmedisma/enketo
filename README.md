# Proyecto WallaWalla sección Administración

Panel de administración

# Versiones

> Código fuente/origen sacado del proyecto **siap_igei** versión **1.14.0.14**

## Versión 0.0.1.14

 - Implementación a partir del proyecto **siap_igei**


## Versión 0.1.1.15

> Cambios en el proyecto

- Implementación a partir del proyecto **siap_igei**
- Inventarios. Se creó nueva entrada dentro de catálogos en la pantalla de inicio
- Inventarios. Se creó vista de consulta.
- Clase modelo **Inventario**. Se creó.
- Clase control **BorrarControl**. Se agregó método **inventario** para borrar registro de inventario
- Clase control **AdjuntofotoControl**. Se creó a partir de la clase **Adjuntaimg** del proyecto **christ_jacob**

> Cambios en la plataforma

- Clase core **ControladorBase**. Se cambió a público el método **getArrPermisos**
- Clase control **CatvistagenControl**. Nuevo parámetro en arreglo **arr_param**
- Archivo vista **FooterDesarrollador.php**. Despliege de los arreglos arr_param y arr_permisos.
- Clase core **ModeloBase**. Se modificó el método **setGuardarReg** para meter la bandera **solo_actualizar**
- Clase core **Ayuda**. Se corrigió el evento **getUsuarioId** con la variable de sesión correcta.
- Clase modelo **ALTE3HTML**. Se modificó el método **setArrHTMLTagLiNavItemCat**

## Versión 0.2.1.16

> Cambios en el proyecto

- Componentes - Sección FAQ. Funcionalidad para modificar registros desde un


> Cambios en la plataforma

- Clase modelo **ALTE3HTML**. Se creó el método **setArrHTMLTagLiNavItem**
- Clase modelo **ALTE3HTML**. Se creó el método **tiene_valor_sub_arreglo**
- Clase controlador **GuardarControl**. Se crearon los métodos **setArrCmps** y **getArrCmps**, para reducir el código de guardar por forma
- Principal **Principal.js**. Para permitir la funcionalidad de despliegue de un formulario desde un modal, se crearon las funciones: **formulario_vaciar**, **formulario_llenar**, **ajax_mostrar_frm_modal** y la clase **formulario_modal**
- Clase controlador **AjaxControl**. Nuevo método **get_arr_reg_faq**
- Clase controlador **BorrarControl**. Nuevo métrodo **faq**

## Versión 0.3.1.17

> Cambios en el proyecto

- Query **vistas.sql**. Nuevo query para vista **v_cat_veh_modelo**
- Nueva funcionalidad de catálogos para **cat_veh_marca** y **cat_veh_modelo**
- Clase controlador **ComponentesControl**. División en pestañas: Contenido, FAQ e Imágenes
- Clase modelo **Inventario**. Nuevo método **setArrTblVistaInventario**
- Clase modelo **RevSlider**. Fue creada

> Cambios en la plataforma

- Archivo **index.php**. Llamado a la nueva carpeta de clases modelo, propios del proyecto
- Archivo **index.php**. Llamado a la nueva carpeta de clases core, propios del proyecto
- Clase core **ModeloBase**. Variable **arr_reg** se cambió a protected
- Clase core **ModeloBase**. Nueva variable **and_search**
- Clase core **ModeloBase**. Nueva variable **str_query**
- Clase core **ModeloBase**. Se asigno el query en la variable **str_query** para varias funciones
- Clase core **ModeloBase**. Nuevo método **ejecutaQryTbl**
- Clase core **ModeloBase**. Nuevo método **setQryAndSearch**
- Clase core **ModeloBase**. Nuevo método **getQryAndSearch**
- Clase core **ModeloBase**. Nuevo método **getStrQuery**
- Clases core de carpeta **enketo**. Se movieron los archivos y clases **CuestBase**, **ModeloValidaBase** y **TableroBase**
- Carpeta **enketo** en **model**. Fue creada y se ingresó el archivo **ValidaC01.class.php**
- Clase modelo **ALTE3HTML**. Se creó el método **setHTMLBtnBorrar**
- Clase modelo **ALTE3HTML**. Se creó el método **setHTMLBtnBorrarReg**
- Clase modelo **CatN**. Se creó el método **setArrTblVistaCatN**
- Clase modelo **FormularioALTE3**. Método **cmpSelectDeTbl** Ajustes en la sentencia **and_tbl_borrar**
- Clase modelo **FormularioCrizal**. Nueva clase
