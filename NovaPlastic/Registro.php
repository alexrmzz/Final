<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="StyleReg.css">
  <title>Inicio de Sesión</title>
</head>
<body>
  <section class="form-register">
    <form action="Registro_sp.php" method="post">
      <h4>Registro Usuario</h4>
      <h5>Usuario y contraseña: </h5>
      <input class="controlsnu" type="text" name="usuario" placeholder="Nombre Usuario" required>
      <input class="controlsnu" type="password" name="clave" placeholder="Contraseña" required>
      <h5>Datos personales: </h5>
      <input class="controlsn" type="text" name="nombre" placeholder="Nombre(s)" required>
      <input class="controlsn" type="text" name="apaterno" placeholder="Apellido Paterno" required>
      <input class="controlsn" type="text" name="amaterno" placeholder="Apellido Materno" required>
      <input class="controlsnac" type="date" name="fecnac" placeholder="Fecha de nacimiento" required>
      <input class="controlsn" type="number" name="telefono" placeholder="Telefono" required>
      <h5>Dirección: </h5>
      <input class="controls" type="text" name="calle" placeholder="Calle" required>
      <input class="controls" type="text" name="num_ext" placeholder="Num. Ext" required>
      <input class="controls" type="text" name="colonia" placeholder="Colonia" required>
      <input class="controls" type="number" name="cp" placeholder="Código Postal" required>
      <select class="controlsal" name="municipio">
        <option value ="Azcapotzalco">Azcapotzalco</option>
        <option value ="Coyoacan">Coyoacán</option>
        <option value ="Cuajimalpa">Cuajimalpa</option>
        <option value ="Gustavo A. Madero">Gustavo A. Madero</option>
        <option value ="Iztacalco">Iztacalco</option>
        <option value ="Iztapalapa">Iztapalapa</option>
        <option value ="Magdalena Contreras">Magdalena Contreras</option>
        <option value ="Milpa Alta">Milpa Alta</option>
        <option value ="Alvaro Obregon">Álvaro Obregón</option>
        <option value ="Tlahuac">Tlahuác</option>
        <option value ="Tlalpan">Tlalpan</option>
        <option value ="Xochimilco">Xochimilco</option>
        <option value ="Benito Juarez">Benito Juárez</option>
        <option value ="Cuahutemoc">Cuahutémoc</option>
        <option value ="Miguel Hidalgo">Miguel Hidalgo</option>
        <option value ="Venustiano Carranza">Venustiano Carranza</option></select>
        <select class="controlsbtn" name="estado">
        <option value ="Aguascalientes">Aguascalientes</option>
        <option value ="Baja California">Baja California</option>
        <option value ="Baja California Sur">Baja California Sur</option>
        <option value ="Campeche">Campeche</option>
        <option value ="Chiapas">Chiapas</option>
        <option value ="Chihuahua">Chihuahua</option>
        <option value ="Coahuila">Coahuila</option>
        <option value ="Colima">Colima</option>
        <option value ="CDMX">CDMX</option>
        <option value ="Durango">Durango</option>
        <option value ="Edo de Mexico">Edo de México</option>
        <option value ="Guanajuato">Guanajuato</option>
        <option value ="Guerrero">Guerrero</option>
        <option value ="Hidalgo">Hidalgo</option>
        <option value ="Jalisco">Jalisco</option>
        <option value ="Michoacan">Michocán</option>
        <option value ="Morelos">Morelos</option>
        <option value ="Nayarit">Nayarit</option>
        <option value ="Nuevo Leon">Nuevo León</option>
        <option value ="Oaxaca">Oaxaca</option>
        <option value ="Puebla">Puebla</option>
        <option value ="Queretaro">Querétaro</option>
        <option value ="Quintana Roo">Quintana Roo</option>
        <option value ="San Luis Potosi">San Luis Potosí</option>
        <option value ="Sinaloa">Sinaloa</option>
        <option value ="Sonora">Sonora</option>
        <option value ="Tabasco">Tabasco</option>
        <option value ="Tamaulipas">Tamluipas</option>
        <option value ="Tlaxcala">Tlaxcala</option>
        <option value ="Veracruz">Veracruz</option>
        <option value ="Yucatan">Yucatán</option>
        <option value ="Zacatecas">Zacatecas</option></select>
      <input class="botons" type="submit" value="Siguiente">
      <p>¿Ya tienes una cuenta? <a href="Login.php">Inicia Sesión</a></p>
    </form>
  </section>

</body>
</html>