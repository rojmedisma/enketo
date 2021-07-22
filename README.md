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
