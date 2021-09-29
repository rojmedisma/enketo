/*
Vista v_rev_slider
Con la tabla rev_slider 
LEFT JOIN en `adjunto` al primer registro encontrado ordenado por `fecha` y `hora`
*/
DROP VIEW IF EXISTS v_rev_slider;
CREATE VIEW `v_rev_slider` AS
SELECT
`rev_slider`.*,
`adj_r_slider`.`adjunto_id`,
`adj_r_slider`.`adjunto_tipo`,
`adj_r_slider`.`ruta_raiz`,
`adj_r_slider`.`ruta_archivo`,
`adj_r_slider`.`nom_arc_real`,
`adj_r_slider`.`nom_arc_sist`,
`adj_r_slider`.`fecha`,
`adj_r_slider`.`hora`
FROM `rev_slider`
LEFT JOIN `adjunto` AS `adj_r_slider` ON(
	`adj_r_slider`.`rev_slider_id` = `rev_slider`.`rev_slider_id` 
	AND `adj_r_slider`.`adjunto_id` = (
		SELECT `adjunto_id` FROM `adjunto` WHERE `borrar` IS NULL AND `rev_slider_id` = `adj_r_slider`.`rev_slider_id` ORDER BY `adjunto`.`fecha` ASC, `adjunto`.`hora` ASC LIMIT 1
	)
)

/*
Vista v_inventario
Con la tabla inventario
LEFT JOIN en `adjunto` al primer registro encontrado ordenado por `fecha` y `hora`
*/

DROP VIEW IF EXISTS v_inventario;
CREATE VIEW `v_inventario` AS
SELECT
`inventario`.*,
IF(ISNULL(`inventario`.`veh_precio_descuento`), `inventario`.`veh_precio`, `inventario`.`veh_precio_descuento`) AS `veh_precio_real`,
`adj_inventario`.`adjunto_id`,
`adj_inventario`.`adjunto_tipo`,
`adj_inventario`.`cat_usuario_id`,
`adj_inventario`.`ruta_raiz`,
`adj_inventario`.`ruta_archivo`,
`adj_inventario`.`nom_arc_real`,
`adj_inventario`.`nom_arc_sist`,
`adj_inventario`.`fecha` AS `adj_fecha`,
`adj_inventario`.`hora` AS `adj_hora`,
`adj_inventario`.`orden` AS `adj_orden`
FROM `inventario`
LEFT JOIN `adjunto` AS `adj_inventario` ON(
	`adj_inventario`.`inventario_id` = `inventario`.`inventario_id` AND `adj_inventario`.`adjunto_tipo` LIKE 'f_princ' AND `adj_inventario`.`borrar` IS NULL
)

/*
Vista v_cat_veh_modelo
*/
DROP VIEW IF EXISTS v_cat_veh_modelo;
CREATE VIEW `v_cat_veh_modelo` AS
SELECT
`cat_veh_modelo`.*,
`cat_veh_marca`.`descripcion` AS `cat_veh_marca_desc`
FROM `cat_veh_modelo`
LEFT JOIN `cat_veh_marca` ON(`cat_veh_modelo`.`cat_veh_marca_id` = `cat_veh_marca`.`cat_veh_marca_id`)