<?php
    include_once 'Conexion.php';
?>
<?php
    $cantidad = 0;
    $query = "SELECT id_empresa, razon_social, rfc, giro, pais_o, credito, antiguedad, direccion, num_ext, colonia, municipio, ciudad, codigopostal, pais, telefono, ceo 
              FROM Empresa WHERE estatus = 1 order by id_empresa asc";
    $stmt = $conn->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="StyleVentasRegistro.css">
  <link rel="shortcut icon" href="Novaplastic.png" type="image/x-icon">
  <title>Nueva Empresa</title>
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
				<a href="MenuD.html" target="_self">Regresar</a>
			</nav>
    		</div>
    </header>

    <div class="capa"></div>

  <section class="form-register">
    <form action="RegistroED_sp.php" method="post">
      <h4>Registro de Empresa</h4> 
      <h5>Datos de Empresa: </h5>
      <input class="controls" type="text" name="razonsocial" placeholder="Razón Social" required>
      <input class="controls" type="text" name="rfc" placeholder="RFC" required>
      <input class="controls" type="text" name="pais_o" placeholder="Pais Origen" required>
      <textarea class="controlsta" name="giro" placeholder="Giro" required></textarea>
      <h5>Crédito Otorgado: </h5>
      <input class="controlsn" type="number" max="100000" name="credito" placeholder="Crédito" required>
      <h5>Antiguedad Años: </h5>
      <input class="controlsn" type="number" name="antiguedad" placeholder="Antigüedad" required>
      <h5>Direccion Completa: </h5>
      <input class="controlsd" type="text" name="direccion" placeholder="Calle" required>
      <input class="controlsd" type="number" name="num_ext" placeholder="Num.Ext" required>
      <input class="controlsd" type="text" name="colonia" placeholder="Colonia" required>
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
        <select class="controls" name="ciudad">
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
      <input class="controls" type="text" name="cp" placeholder="Codigo Postal" required>
      <input class="controls" type="text" name="pais" placeholder="País" required>
      <h5>Contacto: </h5>
      <input class="controls" type="number" name="telefono" placeholder="Teléfono" required>
      <input class="controls" type="text" name="ceo" placeholder="CEO" required>
      <input class="botons" type="submit" value="Registrar">
    </form>
  </section>

  <table id="main-container">

    <thead>
        <tr>
            <th>ID</th>
            <th>Razon Social</th>
            <th>RFC</th>
            <th>Giro</th>
            <th>Pais Origen</th>
            <th>Crédito</th>
            <th>Antiguedad</th>
            <th>Dirección</th>
            <th>Num. Ext</th>
            <th>Colonia</th>
            <th>Municipio</th>
            <th>Ciudad</th>
            <th>CP</th>
            <th>País</th>
            <th>Teléfono</th>
            <th>CEO</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($registros as $fila) : ?>
        <?php $cantidad = $cantidad + 1; ?>
            <tr>
                <td><?php echo $fila->id_empresa; ?></td>
                <td><?php echo $fila->razon_social; ?></td>
                <td><?php echo $fila->rfc; ?></td>
                <td><?php echo $fila->giro; ?></td>
                <td><?php echo $fila->pais_o; ?></td>
                <td><?php echo $fila->credito; ?></td>
                <td><?php echo $fila->antiguedad; ?></td>
                <td><?php echo $fila->direccion; ?></td>
                <td><?php echo $fila->num_ext; ?></td>
                <td><?php echo $fila->colonia; ?></td>
                <td><?php echo $fila->municipio; ?></td>
                <td><?php echo $fila->ciudad; ?></td>
                <td><?php echo $fila->codigopostal; ?></td>
                <td><?php echo $fila->pais; ?></td>
                <td><?php echo $fila->telefono; ?></td>
                <td><?php echo $fila->ceo; ?></td>
                <td>
                <a href="PerfilD.php?
                id_empresa=<?php echo $fila->id_empresa; ?> &
                razonsocial=<?php echo $fila->razon_social; ?> &
                rfc=<?php echo $fila->rfc; ?> &
                giro=<?php echo $fila->giro; ?> &
                pais_o=<?php echo $fila->pais_o; ?> &
                credito=<?php echo $fila->credito; ?> &
                antiguedad=<?php echo $fila->antiguedad; ?> &
                direccion=<?php echo $fila->direccion; ?> &
                num_ext=<?php echo $fila->num_ext; ?> &
                colonia=<?php echo $fila->colonia; ?> &
                municipio=<?php echo $fila->municipio; ?> &
                ciudad=<?php echo $fila->ciudad; ?> &
                cp=<?php echo $fila->codigopostal; ?> &
                pais=<?php echo $fila->pais; ?> &
                telefono=<?php echo $fila->telefono; ?> &
                ceo=<?php echo $fila->ceo; ?>
                ">Perfil</a></td>
                <a href="EditarD.php?
                id_empresa=<?php echo $fila->id_empresa; ?> &
                razonsocial=<?php echo $fila->razon_social; ?> &
                rfc=<?php echo $fila->rfc; ?> &
                giro=<?php echo $fila->giro; ?> &
                pais_o=<?php echo $fila->pais_o; ?> &
                credito=<?php echo $fila->credito; ?> &
                antiguedad=<?php echo $fila->antiguedad; ?> &
                direccion=<?php echo $fila->direccion; ?> &
                num_ext=<?php echo $fila->num_ext; ?> &
                colonia=<?php echo $fila->colonia; ?> &
                municipio=<?php echo $fila->municipio; ?> &
                ciudad=<?php echo $fila->ciudad; ?> &
                cp=<?php echo $fila->codigopostal; ?> &
                pais=<?php echo $fila->pais; ?> &
                telefono=<?php echo $fila->telefono; ?> &
                ceo=<?php echo $fila->ceo; ?>
                ">Editar</a>
                <td><a href="BajaED_sp.php?
                id_empresa=<?php echo $fila->id_empresa; ?> 
                ">Eliminar</a>
                </td>
        </tr>
        <?php endforeach; ?>    
    </tbody>
</table>
</body>
</html>