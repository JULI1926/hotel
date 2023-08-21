<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_formulario.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<header>
		<span id="button-menu" class="fa fa-bars"></span>

		<nav class="navegacion">
			<ul class="menu">
				<!-- TITULAR -->
				<li class="title-menu">Todas las categorias</li>
				<!-- TITULAR -->

				<li><a href="#"><span class="fa fa-home icon-menu"></span>Inicio</a></li>

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
	<?php
		include 'php/conexion_bd.php';
		// Verificar conexión
		if ($conexion->connect_error) {
			die("Conexión fallida: " . $conexion->connect_error);
		}else{
			$nombre = "";
			$apellidos = "";
			$pais = "";
			$departamento = "";
			$ciudad = "";
		}

		if (isset($_POST['crear_huesped_cedula_huesped'])) {
			$cedula = $_POST['crear_huesped_cedula_huesped'];

			// Consulta para obtener los datos del huésped según la cédula
			$sql = "SELECT id_usuario,nombre, apellidos, pais, departamento, ciudad FROM huesped WHERE cedula = '$cedula'";
			$result = $conexion->query($sql);

			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();				
				$nombre = $row['nombre'];
				$apellidos = $row['apellidos'];
				$pais = $row['pais'];
				$departamento = $row['departamento'];
				$ciudad = $row['ciudad'];
			} else {
				// No se encontraron resultados
				$nombre = "";
				$apellidos = "";
				$pais = "";
				$departamento = "";
				$ciudad = "";
			}			
		}		
		$conexion->close();
	?>
	<form action="menu.php" method="POST">
        <h1>Consulta del huésped</h1>
        <!-- ...En el futuro Radio buton consulta con numero de ticket... -->
        <input type="number" name="crear_huesped_cedula_huesped" placeholder="Cedula">
        <input type="submit" value="Consultar">
    </form> 
    <form>
		<h1>Cliente</h1>        
        Nombre:<input type="text" name="crear_huesped_nombre_huesped" value="<?php echo $nombre; ?>" readonly>
		Apellidos:<input type="text" name="crear_huesped_apellidos_huesped" value="<?php echo $apellidos; ?>" readonly>
        Pais:<input type="text" name="crear_huesped_pais_huesped" value="<?php echo $pais; ?>" readonly>
        Departamento:<input type="text" name="crear_huesped_departamento_huesped" value="<?php echo $departamento; ?>" readonly>
        Ciudad:<input type="text" name="crear_huesped_ciudad_huesped" value="<?php echo $ciudad; ?>" readonly>
    </form>
	<form class="tabla_reserva">
    	<h1>Reservas</h1>
		<table class="tabla" border="1">
			<tr>
				<th>Ticket</th>            
				<th>Fecha Inicio</th>
				<th>Fecha Fin</th>
				<th>Habitación Número</th>
				<th>Estado Reserva</th>
			</tr>
			<?php
			include 'php/conexion_bd.php';
			// Verificar conexión
			if ($conexion->connect_error) {
				die("Conexión fallida: " . $conexion->connect_error);
			}

			if (isset($_POST['crear_huesped_cedula_huesped'])) {
				$cedula = $_POST['crear_huesped_cedula_huesped'];

				// Consulta para obtener los datos del huésped según la cédula
				$sql = "select
				reserva.id_reserva, reserva.fecha_inicio, reserva.fecha_fin,reserva.habitacion_numero,reserva.estado_reserva
				from huesped
				inner join reserva on huesped.id_huesped = reserva.id_huesped
				";
				$result = $conexion->query($sql);
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["id_reserva"] . "</td>";					
					echo "<td>" . $row["fecha_inicio"] . "</td>";
					echo "<td>" . $row["fecha_fin"] . "</td>";
					echo "<td>" . $row["habitacion_numero"] . "</td>";
					echo "<td>" . $row["estado_reserva"] . "</td>";
					echo "</tr>";
				}				
			}
			$conexion->close();
        ?>
    </table>		
    </form>	
	<form class="tabla_pedido">
    	<h1>Pedidos</h1>
		<table class="tabla" border="1">
			<tr>
				<th>Habitacion número</th>            
				<th>Fecha pedido</th>
				<th>Descripción</th>
				<th>Costo</th>
				<th>Estado pedido</th>				
			</tr>
			<?php
			include 'php/conexion_bd.php';
			// Verificar conexión
			if ($conexion->connect_error) {
				die("Conexión fallida: " . $conexion->connect_error);
			}
			if (isset($_POST['crear_huesped_cedula_huesped'])) {
				$cedula = $_POST['crear_huesped_cedula_huesped'];
				// Consulta para obtener los datos del huésped según la cédula
				$sql = "select
				pedidos.habitacion_numero, pedidos.fecha_pedido, pedidos.descripcion,pedidos.costo,pedidos.estado_pedido
				from huesped
				inner join pedidos on huesped.id_huesped=pedidos.id_huesped
				";
				$result = $conexion->query($sql);
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["habitacion_numero"] . "</td>";					
					echo "<td>" . $row["fecha_pedido"] . "</td>";
					echo "<td>" . $row["descripcion"] . "</td>";
					echo "<td>" . $row["costo"] . "</td>";
					echo "<td>" . $row["estado_pedido"] . "</td>";					
					echo "</tr>";
				}				
			}
			$conexion->close();
        ?>
    </table>		
    </form>
	<form action="php/pago_facturacion.php" class="tabla_pedido" method="POST">
    	<h1>Facturación</h1>
		<table class="tabla" border="1">
			<tr>
				<th>Habitacion número</th>            
				<th>Fecha pedido</th>
				<th>Descripción</th>
				<th>Costo</th>
				<th>Estado pedido</th>
			</tr>
			<?php
			include 'php/conexion_bd.php';
			$total=0 ;
			// Verificar conexión
			if ($conexion->connect_error) {
				die("Conexión fallida: " . $conexion->connect_error);
			}
			if (isset($_POST['crear_huesped_cedula_huesped'])) {
				$cedula = $_POST['crear_huesped_cedula_huesped'];
				// Consulta para obtener los datos del huésped según la cédula
				$sql = "select
				pedidos.habitacion_numero, pedidos.fecha_pedido, pedidos.descripcion,pedidos.costo,pedidos.estado_pedido
				from huesped
				inner join pedidos on huesped.id_huesped=pedidos.id_huesped
				where estado_pedido ='Pendiente';
				";
				$result = $conexion->query($sql);
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["habitacion_numero"] . "</td>";					
					echo "<td>" . $row["fecha_pedido"] . "</td>";
					echo "<td>" . $row["descripcion"] . "</td>";
					echo "<td>" . $row["costo"] . "</td>";
					echo "<td>" . $row["estado_pedido"] . "</td>";					
					echo "</tr>";
					$total+=$row["costo"];			
				}				
			}			
			$conexion->close();
        ?>
    </table>		
	Total:<input type="text" value="<?php echo '$'.$total; ?>" readonly>
	<input type="submit" value="Realizar Pago"
</body>
</html>