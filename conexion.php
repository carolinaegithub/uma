<?php

    $server = "localhost";
    $database = "matricula";
    $username = "root";
    $password = "";

    $conexion = mysqli_connect($server, $username, $password, $database,);
    
    if (!$conexion) {
    die("Falló la conexión: " . mysqli_connect_error());
    }   

    return $conexion;