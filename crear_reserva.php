<!DOCTYPE html>
<html>
<head>
	<title>Reserva</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_formulario.css">	
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
    <form  action="php/registro_reserva.php" method="POST" >
    	<h1>Reserva</h1><hr>
		<input type="number" name="crear_reserva_foranea" placeholder="Cedula">
    	<input type="date" name="crear_reserva_fecha_inicio" placeholder="Fecha de Inicio">
    	<input type="date" name="crear_reserva_fecha_fin" placeholder="Fecha de Salida">
    	<input type="text" name="crear_reserva_habitacion_numero" placeholder="Numero de Habitacion">
		<br>
		<h4 class = "Estado"><br>Estado</h4>
		<br>		
		<select name="crear_reserva_estado_reserva">
			<option value="Pendiente">Pendiente</option>
			<option value="Confirmado">Confirmado</option>
		</select>
		<input type="submit" value="Registrar Reserva">		
    </form>
</body>
<header>
		<span id="button-menu" class="fa fa-bars"></span>
		<nav class="navegacion">
			<ul class="menu">
				<!-- TITULAR -->
				<li class="title-menu">Todas las categorias</li>
				<!-- TITULAR -->
				<li><a href="menu.php"><span class="fa fa-home icon-menu"></span>Inicio</a></li>

				<li class="item-submenu" menu="1">
					<a href="#"><span class="fa fa-suitcase icon-menu"></span>Huesped</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-suitcase icon-menu"></span>Huesped</li>
						<li class="go-back">Atras</li>						
						<li><a href="crear_huesped.php">Crear</a></li>
						<li><a href="#">Consultar</a></li>
						<li><a href="#">Eliminar</a></li>
						<li><a href="#">Actualizar</a></li>
					</ul>
				</li>
				<li class="item-submenu" menu="2">
					<a href="#"><span class="fa fa-shopping-bag icon-menu"></span>Pedidos</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-shopping-bag icon-menu"></span>Pedidos</li>
						<li class="go-back">Atras</li>
						<li><a href="crear_pedidos.php">Crear</a></li>
						<li><a href="#">Consultar</a></li>
						<li><a href="#">Eliminar</a></li>
						<li><a href="#">Actualizar</a></li>
					</ul>
				</li>
				<li class="item-submenu" menu="3">
					<a href="#"><span class="fa fa-shopping-bag icon-menu"></span>Facturacion</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-shopping-bag icon-menu"></span>Facturacion</li>
						<li class="go-back">Atras</li>
						<li><a href="crear_facturacion.php">Crear</a></li>
						<li><a href="#">Consultar</a></li>
						<li><a href="#">Eliminar</a></li>
						<li><a href="#">Actualizar</a></li>
					</ul>
				</li>
				<li class="item-submenu" menu="4">
					<a href="#"><span class="fa fa-shopping-bag icon-menu"></span>Reserva</a>
					<ul class="submenu">
						<li class="title-menu"><span class="fa fa-shopping-bag icon-menu"></span>Reserva</li>
						<li class="go-back">Atras</li>
						<li><a href="crear_reserva.php">Crear</a></li>
						<li><a href="#">Consultar</a></li>
						<li><a href="#">Eliminar</a></li>
						<li><a href="#">Actualizar</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>

</html>



