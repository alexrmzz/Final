<?php
    session_start();

    $nombre=$_SESSION['usuario'];
    $email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina sesion</title>
</head>
<body>
    <h2> Bienvenido <?php echo $nombre; ?></h2>
    <h2> El email <?php echo $email; ?> se ha registrado correctamente</h2>
</body>
<!-- se utiliza esto para crear la autenticación, un logi de usuarios, si tenemos paginas privadas,
si tenemos acceso a un login con un formulario y que solo los usuarios que tengan cuenta
puedan acceder a esas zonas privadas -->
</html>