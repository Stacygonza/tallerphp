<?php
session_start(); //crear la sesion en todas las paginas
// session_destroy();

$_SESSION['nombre'] = 'Stacy'; //Variable Global

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina 2</title>
</head>
<body>
    <a href="cerrar.php"> Cerrar Sesion</a>
</body>
</html>