<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_formulario.css">
    <link rel="stylesheet" type="text/css" href="css/estilo_formulario.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
    <form action="php/registro_facturacion.php" method="POST" >
    	<h1>Factura</h1>
        <input type="number" name="crear_facturacion_id_huesped" placeholder="id huesped">
    	<input type="number" name="crear_facturacion_habitacion" placeholder="habitación">
    	<input type="date" name="crear_facturacion_Fecha_de_facturacion" placeholder="fecha">
    	<input type="number" name="crear_facturacion_Total_de_servicios" placeholder="Total">
        <input type="text" name="crear_facturacion_Estado_de_pago" placeholder="Estado de pago">
        <input type="submit" placeholder="consultar"> 
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

<!--
CREATE TABLE facturacion (
    id_factura INT PRIMARY KEY AUTO_INCREMENT,
    id_huesped INT,
    habitacion_numero INT,
    fecha_factura DATE,
    total_servicios DECIMAL(10, 2),
    estado_pago VARCHAR(20),
    FOREIGN KEY (id_huesped) REFERENCES huesped(id_huesped)
);-->