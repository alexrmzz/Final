<html>
<head>
    <title>Registro</title>
</head>
<body>
<?php
session_start();
$varusu=$_POST["usuario"];
$varclave=$_POST["clave"];

$serverName = "LocalHost";
$connectionInfo = array( "Database"=>"NovaPlastic", "UID"=>"Yo", "PWD"=>"alex");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "exec sp_valida '".$varusu."' , '".$varclave."'";
    
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );

}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    $varacceso=$row['mensaje'];
    $varpuesto=$row['puesto'];
    $varestatus=$row['estatus'];
}

sqlsrv_free_stmt( $stmt);

if ($varacceso=="Acceso Permitido" and $varpuesto==1)
{
    header("location:MenuA.html");
}

else if ($varacceso=="Acceso Permitido" and $varpuesto==2) {
    header("location:MenuD.html");
}

else if ($varacceso=="Acceso Permitido" and $varpuesto==3) {
    header("location:MenuC.html");
}

else if ($varacceso=="Acceso Permitido" and $varpuesto==4) {
    header("location:MenuS.html");
}

else if ($varestatus==0) {
    header("location:NegarLogin.html");
}

else {
    header("location:NegarLogin.html");
}
?>
</body>
</html>