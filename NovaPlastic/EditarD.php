<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Editar.css">
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
				<a href="VentasRegistroD.php" target="_self">Regresar</a>
                <a href="MenuD.html" target="_self">Regresar al Menu</a>
			</nav>
    		</div>
    </header>

    <div class="capa"></div>

<?php
$id=$_GET['id_empresa'];
$razonsocial=$_GET['razonsocial'];
$rfc=$_GET['rfc'];
$giro=$_GET['giro'];
$pais_o=$_GET['pais_o'];
$credito=$_GET['credito'];
$antiguedad=$_GET['antiguedad'];
$direccion=$_GET['direccion'];
$num_ext=$_GET['num_ext'];
$colonia=$_GET['colonia'];
$municipio=$_GET['municipio'];
$ciudad=$_GET['ciudad'];
$codigopostal=$_GET['cp'];
$pais=$_GET['pais'];
$telefono=$_GET['telefono'];
$ceo=$_GET['ceo'];
?>
    <div>
    <section class = "form-register">
    <form action="EditarD_sp.php" method="post">
    <h4>Registro de Empresa</h4> 
      <h5>Datos de Empresa: </h5>
      <input type="text" name="id_empresa" style="visibility: hidden;"  value="<?=$id?>">
      <input class="controls" type="text" name="razonsocial" value="<?=$razonsocial?>" placeholder="Razon Social">
      <input class="controls" type="text" name="rfc" value="<?=$rfc?>" placeholder="RFC">
      <input class="controls" type="text" name="pais_o" value="<?=$pais_o?>" placeholder="Pais de Origen">
      <input class="controls" type="text" name="giro" value="<?=$giro?>" placeholder="Giro">
      <h5>Crédito Otorgado: </h5>
      <input class="controlsn" type="text" name="credito" value="<?=$credito?>" placeholder="Credito">
      <h5>Antiguedad Años: </h5>
      <input class="controlsn" type="text" name="antiguedad" value="<?=$antiguedad?>" placeholder="Antiguedad">
      <h5>Direccion Completa: </h5>
      <input class="controlsd" type="text" name="direccion" value="<?=$direccion?>" placeholder="Calle">
      <input class="controlsd" type="text" name="num_ext" value="<?=$num_ext?>" placeholder="Num. Exterior">
      <input class="controlsd" type="text" name="colonia" value="<?=$colonia?>" placeholder="Colonia">
      <input class="controlsal" type="text" name="municipio" value="<?=$municipio?>" placeholder="Municipio">
      <input class="controls" type="text" name="ciudad" value="<?=$ciudad?>" placeholder="Ciudad">
      <input class="controls" type="text" name="cp" value="<?=$codigopostal?>" placeholder="Codigo Postal">
      <input class="controls" type="text" name="pais" value="<?=$pais?>" placeholder="Pais">
      <h5>Contacto: </h5>
      <input class="controls" type="text" name="telefono" value="<?=$telefono?>" placeholder="Telefono">
      <input class="controls" type="text" name="ceo" value="<?=$ceo?>" placeholder="CEO">
      <input class="botons" type="submit" value="Actualizar">
    </form>
  </section>
    </form>
</section>

    </div>
</body>
</html>