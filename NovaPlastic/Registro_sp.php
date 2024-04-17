<html>
<head>
    <title>Registro</title>
</head>
<body>
<?php
$varusu=$_POST["usuario"];
$varclave=$_POST["clave"];
$varencrypt="encrypt";
$varnom=$_POST["nombre"];
$varap=$_POST["apaterno"];
$varam=$_POST["amaterno"];
$varfecnac=$_POST["fecnac"];
$vartel=$_POST["telefono"];
$vardir=$_POST["calle"];
$varnume=$_POST["num_ext"];
$varcolonia=$_POST["colonia"];
$varcp=$_POST["cp"];
$varmun=$_POST["municipio"];
$varedo=$_POST["estado"];
$varpuesto="4";
$varestatus="1";
$varusuareg="Sistema";
$varip=$_SERVER['REMOTE_ADDR'];

$serverName = "LocalHost";
$connectionInfo = array( "Database"=>"NovaPlastic", "UID"=>"Yo", "PWD"=>"alex");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "exec sp_registrousuario '".$varusu."',
 '".$varclave."', 
 '".$varencrypt."', 
 '".$varnom."', 
 '".$varap."',
 '".$varam."',
 '".$vartel."',
 '".$varfecnac."', 
 '".$vardir."', 
 '".$varnume."',
 '".$varcolonia."', 
 '".$varcp."', 
 '".$varmun."', 
 '".$varedo."',
 '".$varpuesto."',
 '".$varestatus."', 
 '".$varusuareg."',
 '".$varip."'";

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
    header("location:Login.php");
}


?>

</body>
</html>


