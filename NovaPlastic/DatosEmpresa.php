<?php
    include_once 'Conexion.php';
?>
<?php
    $cantidad = 99;
    $query = "SELECT * FROM Empresa";
    $stmt = $conn->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);

    $query1 = "SELECT * FROM Ventas";
    $stmt1 = $conn->query($query1);
    $registros1 = $stmt1->fetchAll(PDO::FETCH_OBJ);    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>

    <!--Conexion con CSS-->
    <link rel="stylesheet" href="StyleVentas.css">

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
				<a href="RegistroEmp.php" target="_self">Añadir Empresa</a>
                <a href="Menu.html" target="_self">Regresar</a>
			</nav>
		</div>
        </header>
        <div class="capa"></div>
    <br><br><br><br>    

    <h1 class="text-center">Datos de Empresas</h1>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="registros" class="table table-border table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Razon Social</th>
                        <th>RFC</th>
                        <th>Giro</th>
                        <th>Crédito</th>
                        <th>Antiguedad</th>
                        <th>Dirección</th>
                        <th>Codigo Postal</th>
                        <th>País</th>
                        <th>Teléfono</th>
                        <th>CEO</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($registros as $fila) : ?>
                        <?php $cantidad = $cantidad + 1; ?>
                            <tr>
                                <td><?php echo $cantidad; ?></td>
                                <td><?php echo $fila->razon_social; ?></td>
                                <td><?php echo $fila->rfc; ?></td>
                                <td><?php echo $fila->giro; ?></td>
                                <td><?php echo $fila->credito; ?></td>
                                <td><?php echo $fila->antiguedad; ?></td>
                                <td><?php echo $fila->direccion; ?></td>
                                <td><?php echo $fila->codigopostal; ?></td>
                                <td><?php echo $fila->pais; ?></td>
                                <td><?php echo $fila->telefono; ?></td>
                                <td><?php echo $fila->ceo; ?></td>
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


        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <!--  Datatables Responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

    <h1 class="text-center">Ventas de Empresas</h1>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="" class="table table-border table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Razon Social</th>
                        <th>RFC</th>
                        <th>Giro</th>
                        <th>Crédito</th>
                        <th>Antiguedad</th>
                        <th>Dirección</th>
                        <th>Codigo Postal</th>
                        <th>País</th>
                        <th>Teléfono</th>
                        <th>CEO</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($registros1 as $fila1) : ?>
                        <?php $cantidad = $cantidad + 1; ?>
                            <tr>
                                <td><?php echo $cantidad; ?></td>
                                <td><?php echo $fila1->Empresa; ?></td>
                                <td><?php echo $fila1->AñosCliente; ?></td>
                                <td><?php echo $fila1->Enero; ?></td>
                                <td><?php echo $fila1->Febrero; ?></td>
                                <td><?php echo $fila1->Marzo; ?></td>
                                <td><?php echo $fila1->Abril; ?></td>
                                <td><?php echo $fila1->Mayo; ?></td>
                                <td><?php echo $fila1->Junio; ?></td>
                                <td><?php echo $fila1->Julio; ?></td>
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