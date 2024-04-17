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
$vartel=$_POST["telefono"];
$varfecnac=$_POST["fecnac"];
$vardir=$_POST["direccion"];
$varnume=$_POST["num_ext"];
$varcol=$_POST["colonia"];
$varcp=$_POST["cp"];
$varalc=$_POST["municipio"];
$varedo=$_POST["estado"];
$varpuesto=$_POST["puesto"];
$varestatus="1";
$varusuareg="Administrador";
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
 '".$varcol."', 
 '".$varcp."', 
 '".$varalc."', 
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
    header("location:UsuarioA.php");
}


?>

</body>
</html>


