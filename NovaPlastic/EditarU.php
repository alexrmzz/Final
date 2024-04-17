<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Editar.css">
    <link rel="shortcut icon" href="Novaplastic.png" type="image/x-icon">
    <title>Document</title>
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

<?php
$id=$_GET['id_usuario'];
$usuario=$_GET['usuario'];
$nombre=$_GET['nombre'];
$apaterno=$_GET['apaterno'];
$amaterno=$_GET['amaterno'];
$telefono=$_GET['telefono'];
$calle=$_GET['calle'];
$num_ext=$_GET['num_ext'];
$colonia=$_GET['colonia'];
$cp=$_GET['cp'];
$municipio=$_GET['municipio'];
$estado=$_GET['estado'];
?>
    <div>
    <section class = "form-register">
    <form action="EditarU_sp.php" method="post">
    <h4>Editar datos de Usuario</h4> 
      <h5>Datos de Usuario: </h5>
      <input type="text" name="id_usuario" style="visibility: hidden;"  value="<?=$id?>">
      <input class="controls" type="text" name="usuario" value="<?=$usuario?>" placeholder="Usuario">
      <input class="controls" type="text" name="nombre" value="<?=$nombre?>" placeholder="Nombre">
      <input class="controls" type="text" name="apaterno" value="<?=$apaterno?>" placeholder="Apellido Paterno">
      <input class="controls" type="text" name="amaterno" value="<?=$amaterno?>" placeholder="Apellido Materno">
      <input class="controls" type="text" name="telefono" value="<?=$telefono?>" placeholder="Telefono">
      <h5>Direccion Completa: </h5>
      <input class="controlsd" type="text" name="calle" value="<?=$calle?>" placeholder="Calle">
      <input class="controlsd" type="text" name="num_ext" value="<?=$num_ext?>" placeholder="Num. Exterior">
      <input class="controlsd" type="text" name="colonia" value="<?=$colonia?>" placeholder="Colonia">
      <input class="controls" type="text" name="cp" value="<?=$cp?>" placeholder="Codigo Postal">
      <input class="controls" type="text" name="municipio" value="<?=$municipio?>" placeholder="Municipio">
      <input class="controls" type="text" name="estado" value="<?=$estado?>" placeholder="Estado">
      <input class="botons" type="submit" value="Actualizar">
    </form>
  </section>
    </form>
</section>

    </div>
</body>
</html>