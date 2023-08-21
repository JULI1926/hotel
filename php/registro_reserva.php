<?php
    include 'conexion_bd.php';
    $cedula=$_POST['crear_reserva_foranea'];
    $fecha_inicio=$_POST['crear_reserva_fecha_inicio'];
    $fecha_fin=$_POST['crear_reserva_fecha_fin'];
    $habitacion_numero=$_POST['crear_reserva_habitacion_numero'];
    $estado_reserva=$_POST['crear_reserva_estado_reserva'];
    
    /*-----------------------Formateo de fechas---------------------------
    -------------------------------------------------------------------*/
    $fecha_inicio = date('Y-m-d', strtotime($fecha_inicio));
    $fecha_fin = date('Y-m-d', strtotime($fecha_fin));
    /*--------------------------------------------------------------------
    ----------------------------------------------------------------------*/    

    $query="INSERT INTO reserva (id_huesped, fecha_inicio, fecha_fin, habitacion_numero, estado_reserva)
    SELECT id_huesped, '$fecha_inicio', '$fecha_fin', $habitacion_numero, '$estado_reserva'
    FROM huesped
    WHERE cedula = '$cedula';";
    $ejecutar=mysqli_query($conexion,$query);    
    if($ejecutar){
        echo "
            <script>
                alert('usuario almacenado correctamente');
                window.location='../menu.php';
            </script>
        ";
    }else{        
        echo "
            <script>
                alert('Usuario no almacenado');     
                window.location='../crear_reserva.php';           
            </script>
        ";
    }
    $conexion->close();    
?>

