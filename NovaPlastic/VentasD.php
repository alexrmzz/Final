<link rel="shortcut icon" href="Novaplastic.png" type="image/x-icon">
<?php
    include_once 'Conexion.php';
?>
<?php
    $cantidad = 0;
    $query = "SELECT * FROM (SELECT Empresa,Anio,Mes,total
      FROM Ventas3
      )S
      pivot(
      max(total) for [Mes] IN ([Enero],[Febrero],[Marzo],[Abril],[Mayo],[Junio],[Julio],[Agosto],[Septiembre],[Octubre],[Noviembre],[Diciembre])
      )P";
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

  <table id="main-container3">

    <thead>
        <tr>
            <th>Empresa</th>
            <th>Año</th>
            <th>Enero</th>
            <th>Febrero</th>
            <th>Marzo</th>
            <th>Abril</th>
            <th>Mayo</th>
            <th>Junio</th>
            <th>Julio</th>
            <th>Agosto</th>
            <th>Septiembre</th>
            <th>Octubre</th>
            <th>Noviembre</th>
            <th>Diciembre</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($registros as $fila) : ?>
        <?php $cantidad = $cantidad + 1; ?>
            <tr>
                <td><?php echo $fila->Empresa; ?></td>
                <td><?php echo $fila->Anio; ?></td>
                <td><?php echo $fila->Enero; ?></td>
                <td><?php echo $fila->Febrero; ?></td>
                <td><?php echo $fila->Marzo; ?></td>
                <td><?php echo $fila->Abril; ?></td>
                <td><?php echo $fila->Mayo; ?></td>
                <td><?php echo $fila->Junio; ?></td>
                <td><?php echo $fila->Julio; ?></td>
                <td><?php echo $fila->Agosto; ?></td>
                <td><?php echo $fila->Septiembre; ?></td>
                <td><?php echo $fila->Octubre; ?></td>
                <td><?php echo $fila->Noviembre; ?></td>
                <td><?php echo $fila->Diciembre; ?></td>
        </tr>
        <?php endforeach; ?>    
    </tbody>
</table>
</body>
</html>