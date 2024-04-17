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

    <table id="main-container1" class="table table-striped table-bordered">
    <!--boton -->
    <div class="well-sm col-sm-12">
        <div class="btn-group pull-right">
        <form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Exportar a Excel</button>
        </form>
        </div>
    </div>

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
        </tr>
        <!-- boton-->
        <?php endforeach; 
        if(isset($_POST["export_data"])) {
            if(!empty($registros)) {
                $filename = "prueba2.xls";
                header("Content-Type: application/vnd.ms-excel");
                header("Content-Disposition: attachment; filename=".$filename);
           
                $mostrar_columnas = false;
           
                foreach($registros as $fila) {
                    if(!$mostrar_columnas) {
                        //echo implode("\t", array_keys($registros)) . "\n";
                        $mostrar_columnas = true;
                    }
                    //echo implode( array_values($registros)) . "\n";
                }
           
                }else{
                    echo 'No hay datos a exportar';
                }
                exit;
        }
           ?>  
          
    </tbody>
</table>

</body>
</html>