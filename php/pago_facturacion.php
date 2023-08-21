<?php
	include 'conexion_bd.php';
	$total=0 ;
	// Verificar conexión
	if ($conexion->connect_error) {
		die("Conexión fallida: " . $conexion->connect_error);
	}	
		$cedula = $_POST['crear_huesped_cedula_huesped'];
		// Consulta para obtener los datos del huésped según la cédula
		$sql = "UPDATE pedidos
        INNER JOIN huesped ON pedidos.id_huesped = huesped.id_huesped
        SET pedidos.estado_pedido = 'Pagado'
        WHERE pedidos.estado_pedido = 'Pendiente';
		";       				
		$ejecutar=mysqli_query($conexion,$sql);
		if($ejecutar){
			echo "
				<script>
					alert('usuario pago correctamente');
					window.location='../menu.php';
				</script>
			";
		}else{        
			echo "
				<script>
					alert('No pago correctamente');     
					window.location='../menu.php';           
				</script>
			";
		}	
								
	$conexion->close();
?>