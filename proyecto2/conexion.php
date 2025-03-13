<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "prueba_datos";

// Crear conexión
$conexion = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
// echo "Conexión exitosa";
