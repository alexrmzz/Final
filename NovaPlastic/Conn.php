<?php

    $servername="LocalHost";
    $conexion=array("Database"=>"NovaPlastic",
                    "UID"=>"Yo",
                    "PWD"=>"alex",
                    "CharacterSet"=>"UTF-8");

    $con=sqlsrv_connect($servername, $conexion);

?>