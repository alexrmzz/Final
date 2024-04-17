<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="StyleL.css">
  <link rel="shortcut icon" href="Novaplastic.png" type="image/x-icon">
  <title>Inicio de Sesión</title>
</head>
<body>
  <section class="form-register">
    <form action="LoginValidar.php" method="post">
      <h4>Iniciar Sesión</h4>
      <input class="controls" type="text" name="usuario" placeholder="Usuario" required>
      <input class="controls" type="password" name="clave" placeholder="Contraseña" required>
      <input class="botons" type= "submit" value="Iniciar Sesión">
      <p>¿No tienes una cuenta? <a href="Registro.php">Registrate</a></p>
    </form>
  </section>

</body>
</html>