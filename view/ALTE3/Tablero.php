<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'modulos/EnHead.php'; ?>
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<?php include_once 'modulos/Tablero/EnMainHeader.php'; ?>
			</nav>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-<?php echo COLOR_ACENTUAR; ?> elevation-4">
				<?php include_once 'modulos/Tablero/EnMainSidebar.php'; ?>
			</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<?php include_once 'modulos/EnContentHeader.php'; ?>
				</section>
				<!-- Main content -->
				<section class="content">
					<div class="container-fluid">
						<?php
						switch (strtolower($controlador_obj->getControlador())){
							case 'tablero':			include_once 'modulos/Tablero/Inicio.php';	break;
							case 'catvistagen':		include_once 'modulos/Tablero/CatVistaGen.php';	break;
							case 'inventariofrm':	include_once 'modulos/Tablero/Inventariofrm.php';	break;
							case 'catfrmgen':
								switch (strtolower($controlador_obj->getAccion())){
									case 'cat_usuario': include_once 'modulos/Tablero/CatFrmGen/CatUsuario.php';	break;
									case 'log': include_once 'modulos/Tablero/CatFrmGen/Log.php';	break;
									case 'indicadores': include_once 'modulos/Tablero/CatFrmGen/Indicadores.php';	break;
									case 'cat_veh_marca': include_once 'modulos/Tablero/CatFrmGen/wallawalla/CatVehMarca.php';	break;
									case 'cat_veh_modelo': include_once 'modulos/Tablero/CatFrmGen/wallawalla/CatVehModelo.php';	break;
								}
								break;
							case 'catfrmgpo':
							case 'cat_grupo': 
								include_once 'modulos/Tablero/CatFrmGen/CatGrupo.php';	break;
							case 'componentes':
								include_once 'modulos/Tablero/Componentes.php';	break;
								break;
							
										
						}
						?>
					</div>
				</section>
				<!-- /.content -->
			</div>
			<?php include_once 'modulos/ModalInfo.php';?>
			<?php include_once 'modulos/ModalAyuda.php';?>
			<?php include_once 'modulos/ModalAdjunto.php';?>
			<?php include_once 'modulos/ModalBienvenida.php';?>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				<?php include_once 'modulos/EnFooter.php'; ?>
			</footer>
			<?php
				//Se despliega footer de desarrollador
				if($controlador_obj->tienePermiso('desarrollador')){
					include_once 'modulos/FooterDesarrollador.php';
				}
			?>
			<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->
		
		<?php
		include_once 'modulos/Scripts.php';
		switch (strtolower($controlador_obj->getControlador())){
			case 'inventariofrm':
				include_once 'modulos/ScriptInventario.php';	break;
			case 'catvistagen':	
				include_once 'modulos/ScriptCatVistaGen.php';	break;
			case 'catfrmgen':
				switch (strtolower($controlador_obj->getAccion())){
					case 'cat_usuario': include_once 'modulos/ScriptCatUsr.php';	break;
				}
				break;
			case 'catfrmgpo':
				case 'cat_usuario': include_once 'modulos/ScriptCatGpo.php';	break;
			case 'componentes':
				include_once 'modulos/Tablero/Componente/Scripts.php';	break;
		}
		?>
	</body>
</html>