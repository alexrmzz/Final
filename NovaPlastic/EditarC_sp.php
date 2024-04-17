<html>
<head>
    <title>Registro</title>
</head>
<body>
<?php
$id=$_POST['id_empresa'];
$razonsocial=$_POST['razonsocial'];
$rfc=$_POST['rfc'];
$giro=$_POST['giro'];
$pais_o=$_POST['pais_o'];
$credito=$_POST['credito'];
$antiguedad=$_POST['antiguedad'];
$direccion=$_POST['direccion'];
$num_ext=$_POST['num_ext'];
$colonia=$_POST['colonia'];
$municipio=$_POST['municipio'];
$ciudad=$_POST['ciudad'];
$codigopostal=$_POST['cp'];
$pais=$_POST['pais'];
$telefono=$_POST['telefono'];
$ceo=$_POST['ceo'];

$serverName = "LocalHost";
$connectionInfo = array( "Database"=>"NovaPlastic", "UID"=>"Yo", "PWD"=>"alex");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "exec sp_editarempresa '".$id."',
 '".$razonsocial."',
 '".$rfc."', 
 '".$giro."',
 '".$pais_o."', 
 '".$credito."', 
 '".$antiguedad."',
 '".$direccion."',
 '".$num_ext."',
 '".$colonia."',
 '".$municipio."',
 '".$ciudad."',
 '".$codigopostal."', 
 '".$pais."', 
 '".$telefono."', 
 '".$ceo."'";
 
//echo $sql;
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    $varacceso=$row['Mensaje'];
}

sqlsrv_free_stmt( $stmt);


if ($varacceso=="Registro Actualizado")
{
    header("location:VentasRegistroC.php");
}
?>

</body>
</html>


