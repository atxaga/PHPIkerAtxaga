<?php
function conectarDB() {
    $host = "localhost";      
    $usuario = "root";
    $password = "root";
    $db = "nombre_de_tu_base_de_datos";

    $conexion = new mysqli($host, $usuario, $password, $db);

    // Verificar si hay error en la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    return $conexion;
}
?>