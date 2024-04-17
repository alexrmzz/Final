<link rel="shortcut icon" href="Novaplastic.png" type="image/x-icon">
<?php
    include_once 'Conexion.php';
?>
<?php
    $cantidad = 0;
    $query = "SELECT id_bitacora, usuareg, descripcion, fecha, ip
              FROM Bitacora";
    $stmt = $conn->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="StyleVentasRegistroS.css">
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
				<a href="MenuA.html" target="_self">Regresar</a>
			</nav>
    		</div>
    </header>

    <div class="capa"></div>

    <div class="logo">
        <br>
	    <h1>Bitacora de Usuarios</h1>
	</div>

  <table id="main-container2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Realizo Registro</th>
            <th>Usuario Registrado</th>
            <th>Fecha</th>
            <th>IP de Registro</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($registros as $fila) : ?>
        <?php $cantidad = $cantidad + 1; ?>
            <tr>
                <td><?php echo $fila->id_bitacora; ?></td>
                <td><?php echo $fila->usuareg; ?></td>
                <td><?php echo $fila->descripcion; ?></td>
                <td><?php echo $fila->fecha; ?></td>
                <td><?php echo $fila->ip; ?></td>
        </tr>
        <?php endforeach; ?>    
    </tbody>
</table>
</body>
</html>