<html>
<head>
    <title>Registro</title>
</head>
<body>
<?php
$nombre=$_POST["nombre"];
$apaterno=$_POST["apaterno"];
$amaterno=$_POST["amaterno"];
$varfecnac=$_POST["fnacimiento"];
$pais_origen=$_POST["pais_origen"];
$ciudad=$_POST["ciudad"];
$parentesco=$_POST["parentesco"];

$serverName = "LocalHost";
$connectionInfo = array( "Database"=>"NovaPlastic", "UID"=>"Yo", "PWD"=>"alex");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "exec sp_registrofamiliar '".$nombre."',
 '".$apaterno."', 
 '".$amaterno."', 
 '".$varfecnac."', 
 '".$pais_origen."',
 '".$ciudad."',
 '".$parentesco."'";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    $varacceso=$row['Mensaje'];
}

sqlsrv_free_stmt( $stmt);


if ($varacceso=="Registro Insertado con Exito")
{
    header("location:MenuA.html");
}


?>

</body>
</html>


