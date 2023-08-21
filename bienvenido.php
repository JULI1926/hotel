<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo "
            <script>
                alert('Por favor inicie sesión.');
                window.location='index.php';
            </script>
        ";
        //header('location: index.php');
        session_destroy();
        die();
    }
    session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>BIENVENIDO YA PUEDE RECLAMAR LA CAJA DE ARROZ CHINO CON EL CARLOS LOAIZA EL NÚMERO DEL CELULAR ES 3006575225</H1>
</body>
</html>