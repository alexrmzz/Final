<?php

    $nombreServidor = "LocalHost";
    $usuario = "Yo";
    $contrasena = "alex";
    $nombreBaseDatos = "NovaPlastic";

    try {
        $conn = new PDO("sqlsrv:server=$nombreServidor;database=$nombreBaseDatos", $usuario, $contrasena);

        //echo "Conexion exitosa en el servidor $nombreServidor";
        
    } catch (Exception $e) {
        echo "Ocurrió un error en la conexion. " .$e->getMessage();
    }

?>