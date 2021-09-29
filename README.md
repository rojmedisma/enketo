# Proyecto Enketo

Proyecto de encuestas a la medida

# Versiones

> Código fuente/origen sacado del proyecto **siap_igei** versión **1.14.0.14**

## Versión 0.0.1.14

> Cambios en la plataforma

- Implementación a partir del proyecto **siap_igei**

## Versión 0.0.1.15

> Cambios en la plataforma

- Clase core **ControladorBase**. Se cambió a público el método **getArrPermisos**
- Clase control **CatvistagenControl**. Nuevo parámetro en arreglo **arr_param**
- Archivo vista **FooterDesarrollador.php**. Despliege de los arreglos arr_param y arr_permisos.
- Clase core **ModeloBase**. Se modificó el método **setGuardarReg** para meter la bandera **solo_actualizar**
- Clase core **Ayuda**. Se corrigió el evento **getUsuarioId** con la variable de sesión correcta.

## Versión 0.0.1.16

> Cambios en el 

- Cuestionario C01. Ajustes a partir del **Cuestionario para productores** para crear una versión que muestre la funcionalidad del cuestionario

> Cambios en la plataforma

- Clase modelo **FormularioALTE3**. Nuevo campo para fechas **cmpFecha**

## Versión 0.1.1.17

> Cambios en el proyecto

- Archivo de javaScript **js/C01/M03.js**. Se hicieron ajustes para la nueva versión demo
- Archivo de javaScript **js/C01/FrmInventario.js**. Se hicieron ajustes para la nueva versión demo
- Clase controlador **CuestformaControl.class.php**. Se hicieron ajustes para la nueva versión demo

> Cambios en la plataforma

- Archivo **index.php**. Llamado a la nueva carpeta de clases modelo, propios del proyecto
- Archivo **index.php**. Llamado a la nueva carpeta de clases core, propios del proyecto
- Clase modelo **ALTE3HTML**. Se creó el método **setArrHTMLTagLiNavItem**
- Clase modelo **ALTE3HTML**. Se creó el método **tiene_valor_sub_arreglo**
- Clase controlador **GuardarControl**. Se crearon los métodos **setArrCmps** y **getArrCmps**, para reducir el código de guardar por forma
- Principal **Principal.js**. Para permitir la funcionalidad de despliegue de un formulario desde un modal, se crearon las funciones: **formulario_vaciar**, **formulario_llenar**, **ajax_mostrar_frm_modal** y la clase **formulario_modal**
- Clase controlador **AjaxControl**. Nuevo método **get_arr_reg_faq**
- Clase controlador **BorrarControl**. Nuevo métrodo **faq**
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
