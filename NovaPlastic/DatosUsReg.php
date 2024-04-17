<?php
    include_once 'Conexion.php';
?>
<?php
    $cantidad = 99;
    $query = "SELECT id, usuario, nombre, apaterno, amaterno, fnacimiento, puesto, calle, colonia, cp, municipio, estado FROM usuarios";
    $stmt = $conn->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas Prueba</title>

    <!--Conexion con CSS-->
    <link rel="stylesheet" href="Usuarios.css">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <!--  Datatables Responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

    <style>
        thead{
            background-color: rgb(16, 105, 179);
            color: #fff;
        }
    </style>

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
				<a href="RegistroA.php" target="_self">Añadir Usuario</a>
                <a href="MenuA.html" target="_self">Regresar</a>
			</nav>
		</div>
        </header>
        <div class="capa"></div>
    <br><br><br><br>    

    <h1 class="text-center">Datos Usuario Prueba</h1>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="registros" class="table table-border table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Fecha Nacimiento</th>
                        <th>Puesto</th>
                        <th>Calle</th>
                        <th>Colonia</th>
                        <th>Codigo Postal</th>
                        <th>Municipio</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($registros as $fila) : ?>
                        <?php $cantidad = $cantidad + 1; ?>
                            <tr>
                                <td><?php echo $cantidad; ?></td>
                                <td><?php echo $fila->usuario; ?></td>+
                                <td><?php echo $fila->nombre; ?></td>
                                <td><?php echo $fila->apaterno; ?></td>
                                <td><?php echo $fila->amaterno; ?></td>
                                <td><?php echo $fila->fnacimiento; ?></td>
                                <td><?php echo $fila->puesto; ?></td>
                                <td><?php echo $fila->calle; ?></td>
                                <td><?php echo $fila->colonia; ?></td>
                                <td><?php echo $fila->cp; ?></td>
                                <td><?php echo $fila->municipio; ?></td>
                                <td><?php echo $fila->estado; ?></td>
                            </tr>
                        <?php endforeach; ?>    
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

   
    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <!-- Datatables responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#registros').DataTable({
                responsive: true
            });
        });
    </script>
</body>
</html>