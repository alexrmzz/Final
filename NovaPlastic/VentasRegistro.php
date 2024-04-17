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
  <link rel="stylesheet" href="StyleVentasRegistroS.css">
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
				<a href="MenuS.html" target="_self">Regresar</a>
			</nav>
    		</div>
    </header>

    <div class="capa"></div>

  <table id="main-container1">

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
            <th colspan="1">Acciones</th>
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
                <a href="PerfilS.php?
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
        </tr>
        <?php endforeach; ?>    
    </tbody>
</table>
</body>
</html>