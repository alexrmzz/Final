<html>
<head>
    <title>Registro</title>
</head>
<body>
<?php
$varrz=$_POST["razonsocial"];
$varrfc=$_POST["rfc"];
$vargiro=$_POST["giro"];
$varpaiso=$_POST["pais_o"];
$varcre=$_POST["credito"];
$varan=$_POST["antiguedad"];
$vardir=$_POST["direccion"];
$varnume=$_POST["num_ext"];
$varcolonia=$_POST["colonia"];
$varmunicipio=$_POST["municipio"];
$varciudad=$_POST["ciudad"];
$varcp=$_POST["cp"];
$varpais=$_POST["pais"];
$vartel=$_POST["telefono"];
$varceo=$_POST["ceo"];
$varestatus=1;

$serverName = "LocalHost";
$connectionInfo = array( "Database"=>"NovaPlastic", "UID"=>"Yo", "PWD"=>"alex");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "exec sp_registrocliente '".$varrz."',
 '".$varrfc."', 
 '".$vargiro."', 
 '".$varpaiso."', 
 '".$varcre."', 
 '".$varan."',
 '".$vardir."',
 '".$varnume."',
 '".$varcolonia."',
 '".$varmunicipio."',
 '".$varciudad."',
 '".$varcp."', 
 '".$varpais."', 
 '".$vartel."',
 '".$varceo."', 
 '".$varestatus."'";
 
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
    header("location:VentasRegistroA.php");
}


?>

</body>
</html>


