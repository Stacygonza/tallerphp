<?php

$errores = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    #Si no esta vacio el nombre entonces comprobamos que sea una cadena de texto limpia.
    if (!empty($nombre)) {

//remueve los signos que no deben ir en una cadena de texto 
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING)
    }
}