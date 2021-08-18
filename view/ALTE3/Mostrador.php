<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include_once 'modulos/EnHead.php'; ?>
	</head>
	<body class="hold-transition layout-top-nav">
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
				<?php include_once 'modulos/EnMainHeader.php';?>
			</nav>
			<!-- /.navbar -->
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<?php include_once 'modulos/EnContentHeader.php'; ?>
				</div>
				<!-- /.content-header -->
				<!-- Main content -->
				<div class="content">
					<div class="container">
						<?php
						switch (strtolower($controlador_obj->getControlador())){
							case 'mostrador':		include_once 'modulos/Mostrador/Inicio.php';		break;
							case 'cuestforma':		include_once 'modulos/Mostrador/Cuest/Forma.php';	break;
							case 'cultivo':			include_once 'modulos/Mostrador/Cultivo/Forma.php';	break;
							case 'catvistagen':		include_once 'modulos/Mostrador/CatVistaGen.php';	break;
						}
						?>
					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<!-- /.control-sidebar -->
			<!-- Main Footer -->
			<footer class="main-footer">
				<?php include_once 'modulos/EnFooter.php'; ?>
			</footer>
			<?php
				//Se despliega footer de desarrollador
				if($controlador_obj->tienePermiso('desarrollador')){
					include_once 'modulos/FooterDesarrollador.php';
				}
			?>
		</div>
		<!-- ./wrapper -->
		<?php 
		include_once 'modulos/Scripts.php';
		switch (strtolower($controlador_obj->getControlador())){
			case 'cuestvista':	include_once 'modulos/ScriptCuestVista.php';			break;
			case 'cuestforma':	echo $controlador_obj->getHTMLScriptCuest();			break;
			case 'cultivo':		include_once 'modulos/Mostrador/ScriptCultivos.php';	break;
		}
		?>
	</body>
</html>