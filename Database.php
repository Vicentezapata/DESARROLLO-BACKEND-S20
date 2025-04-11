<?php
try {
    $conexion = null;
    $conexion =  new PDO('mysql:host=localhost;dbname=landing_page', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado a la base de datos";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

?>