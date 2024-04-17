<html>
<head>
    <title>Registro</title>
</head>
<body>
<?php
$id=$_POST['id_usuario'];
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$telefono=$_POST['telefono'];
$calle=$_POST['calle'];
$num_ext=$_POST['num_ext'];
$colonia=$_POST['colonia'];
$cp=$_POST['cp'];
$municipio=$_POST['municipio'];
$estado=$_POST['estado'];

$serverName = "LocalHost";
$connectionInfo = array( "Database"=>"NovaPlastic", "UID"=>"Yo", "PWD"=>"alex");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "exec sp_editarusuario '".$id."',
 '".$usuario."',
 '".$nombre."', 
 '".$apaterno."',
 '".$amaterno."', 
 '".$telefono."', 
 '".$calle."',
 '".$num_ext."',
 '".$colonia."',
 '".$cp."',
 '".$municipio."', 
 '".$estado."'";
 
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
    header("location:UsuarioA.php");
}
?>

</body>
</html>


