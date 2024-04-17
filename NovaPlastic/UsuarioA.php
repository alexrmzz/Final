<link rel="shortcut icon" href="Novaplastic.png" type="image/x-icon">
<?php
    include_once 'Conexion.php';
?>
<?php
    $cantidad = 0;
    $query = "SELECT id_usuario, usuario, nombre, apaterno, amaterno, fnacimiento, telefono, calle, num_ext, colonia, cp, municipio, estado, puesto 
    FROM usuarios WHERE estatus = 1";
    $stmt = $conn->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="StyleUsuarios.css">
  <title>Usuarios</title>
</head>
<body>
<div class="container">
		<div class="btn-menu">
	    	<label for="btn-menu"></label>
		</div>
		<br>
			<div class="logo">
				<h1>NovaPlastic S.A. de C.V.</h1>
			</div>
			<nav class="menu">
				<a href="MenuA.html" target="_self">Regresar</a>
			</nav>
    		</div>
    </header>

    <div class="capa"></div>

    <section class="form-register">
    <form action="RegistroA_sp.php" method="post">
      <h4>Registro Usuario</h4>
      <h5>Usuario y contraseña: </h5>
      <input class="controlsnu" type="text" name="usuario" placeholder="Nombre Usuario" required>
      <input class="controlsnu" type="password" name="clave" placeholder="Contraseña" required>
      <h5>Datos personales: </h5>
      <input class="controlsn" type="text" name="nombre" placeholder="Nombre(s)" required>
      <input class="controlsn" type="text" name="apaterno" placeholder="Apellido Paterno" required>
      <input class="controlsn" type="text" name="amaterno" placeholder="Apellido Materno" required>
      <input class="controlsn" type="number" name="telefono" placeholder="Telefono de Contacto" required>
      <h5>Fecha de Nacimiento: </h5>
      <input class="controlsnac" type="date" name="fecnac" placeholder="Fecha de nacimiento" required>
      <h5>Dirección: </h5>
      <input class="controls" type="text" name="direccion" placeholder="Calle" required>
      <input class="controls" type="text" name="num_ext" placeholder="Num. Ext" required>
      <input class="controls" type="text" name="colonia" placeholder="Colonia" required>
      <input class="controls" type="number" name="cp" placeholder="Código Postal" required>
      <select class="controlsbtn" name="municipio">
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
        <h5>Puesto: </h5>
        <select class="controlsbtn" name="puesto">
        <option value ="1">Administrador</option>
        <option value ="2">Director</option>
        <option value ="3">Capturista</option>
        <option value ="4">Supervisor</option></select>
      <input class="botons" type="submit" value="Siguiente">
    </form>
  </section>

  <table id="main-container">

    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha Nacimiento</th>
            <th>Telefono</th>
            <th>Calle</th>
            <th>Num. Ext</th>
            <th>Colonia</th>
            <th>CP</th>
            <th>Municipio</th>
            <th>Estado</th>
            <th>Puesto</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($registros as $fila) : ?>
        <?php $cantidad = $cantidad + 1; ?>
            <tr>
                <td><?php echo $fila->id_usuario; ?></td>
                <td><?php echo $fila->usuario; ?></td>
                <td><?php echo $fila->nombre; ?></td>
                <td><?php echo $fila->apaterno; ?></td>
                <td><?php echo $fila->amaterno; ?></td>
                <td><?php echo $fila->fnacimiento; ?></td>
                <td><?php echo $fila->telefono; ?></td>
                <td><?php echo $fila->calle; ?></td>
                <td><?php echo $fila->num_ext; ?></td>
                <td><?php echo $fila->colonia; ?></td>
                <td><?php echo $fila->cp; ?></td>
                <td><?php echo $fila->municipio; ?></td>
                <td><?php echo $fila->estado; ?></td>
                <td><?php echo $fila->puesto; ?></td>-
                <td>
                <a href="EditarU.php?
                id_usuario=<?php echo $fila->id_usuario; ?> &
                usuario=<?php echo $fila->usuario; ?> &
                nombre=<?php echo $fila->nombre; ?> &
                apaterno=<?php echo $fila->apaterno; ?> &
                amaterno=<?php echo $fila->amaterno; ?> &
                telefono=<?php echo $fila->telefono; ?> &
                calle=<?php echo $fila->calle; ?> &
                num_ext=<?php echo $fila->num_ext; ?> &
                colonia=<?php echo $fila->colonia; ?> &
                cp=<?php echo $fila->cp; ?> &
                municipio=<?php echo $fila->municipio; ?> &
                estado=<?php echo $fila->estado; ?> &
                puesto=<?php echo $fila->puesto; ?>
                ">Editar</a>
                <td><a href="BajaU_sp.php?
                id_usuario=<?php echo $fila->id_usuario; ?> 
                ">Eliminar</a>
                </td>
        </tr>
        <?php endforeach; ?>    
    </tbody>
</table>
</body>
</html>