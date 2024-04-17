<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Perfil.css">
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
				<a href="VentasRegistro.php" target="_self">Regresar</a>
        <a href="MenuS.html" target="_self">Regresar al Menu</a>
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
    <form>
    <h4>Datos de Empresa  de <?php echo $razonsocial ?></h4> 
      <br>
      <h5>Razon Social: </h5>
      <?php echo $razonsocial ?>
      <br><br>
      <h5>RFC: </h5>
      <?php echo $rfc ?>
      <br><br>
      <h5>Giro: </h5>
      <?php echo $giro ?>
      <br><br>
      <h5>País de Origen: </h5>
      <?php echo $pais_o ?>
      <br><br>
      <h1></h1>
      <br><br>
      <h5>Credito en Pesos: </h5>
      <?php echo $credito ?>
      <br><br>
      <h5>Antiguedad en Años: </h5>
      <?php echo $antiguedad ?>
      <br><br>
      <h1></h1>
      <br><br>
      <h5>Direccion: </h5>
      <?php echo $direccion ?>
      <br><br>
      <h5>Numero Exterior: </h5>
      <?php echo $num_ext ?>
      <br><br>
      <h5>Colonia: </h5>
      <?php echo $colonia ?>
      <br><br>
      <h5>Alcaldía: </h5>
      <?php echo $municipio ?>  
      <br><br>
      <h5>Ciudad SEDE: </h5>
      <?php echo $ciudad ?>
      <br><br>
      <h5>Codigo Postal: </h5>
      <?php echo $codigopostal ?>
      <br><br>
      <h5>Pais: </h5>
      <?php echo $pais_o ?>
      <br><br>
      <h1></h1>
      <br><br>
      <h5>Teléfono de Contacto: </h5>
      <?php echo $telefono ?>
      <br><br>
      <h5>CEO: </h5>
      <?php echo $ceo ?>
      <br><br>
      <h5>Enviar Correo o WhatsApp: </h5>
</form>
<form action="enviar.php" method="POST">
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="usuario" value="?>">
    <input class="botons" type="submit" value="Correo">
</form>
<form action="whatsapp.php" method="POST">
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="usuario" value="?>">
    <input class="botons" type="submit" value="WhatsApp">
</form>
    </form>
    </form>
  </section>
    </div>
    <?php 
    if ($ceo =="Michael Dell") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15053.732470156603!2d-99.2391036!3d19.3936836!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7bcdb39e8315ad0c!2sDell!5e0!3m2!1ses!2smx!4v1660367908344!5m2!1ses!2smx" width="1250" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="img">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Dell_Logo.png/1200px-Dell_Logo.png" width="140px" height="70px">
        </div>
        <?php
    } else if ($ceo =="Enrique Lores") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.9909508242945!2d-99.26654470000001!3d19.3695445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201a4dd4e0037%3A0xe458a09b9fe4c655!2sProl.%20P.%C2%BA%20de%20la%20Reforma%20700%2C%20Santa%20Fe%2C%20Zedec%20Sta%20F%C3%A9%2C%20%C3%81lvaro%20Obreg%C3%B3n%2C%2001219%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1660368891588!5m2!1ses!2smx" width="1250" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="img1">
        <img src="https://logodownload.org/wp-content/uploads/2014/04/hp-logo-1.png" width="120px" height="70px">
        </div>
        <?php
    } else if ($ceo =="Lee Jae Young") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15050.096141524951!2d-99.1813278!3d19.4329605!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25cb8bc56dc5d11e!2sCentro%20de%20Servicio%20Autorizado%20Samsung%20Polanco!5e0!3m2!1ses!2smx!4v1660366671617!5m2!1ses!2smx" width="1250" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="img2">
        <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c533.png" width="160px" height="70px">
        </div>
        <?php
    } else if ($ceo =="Kenichiro Yoshida") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15061.96658408317!2d-99.1908756!3d19.3044609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3b25b054344a5bd1!2sSony%20Store!5e0!3m2!1ses!2smx!4v1660369999313!5m2!1ses!2smx" width="1250" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="img3">
        <img src="https://assets.stickpng.com/images/5848242ecef1014c0b5e49c8.png" width="150px" height="50px">
        </div>
        <?php
    } else if ($ceo =="Satya Nadella") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15056.264063885284!2d-99.2644504!3d19.366294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xffe7560012c3a23b!2sCorporativo%20Microsoft%20M%C3%A9xico!5e0!3m2!1ses!2smx!4v1660370218289!5m2!1ses!2smx" width="1250" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="img3">
        <img src="https://soporteti.net/wp-content/uploads/2022/04/Microsoft-Logo-PNG.png" width="150px" height="50px">
        </div>
        <?php
    } else if ($ceo =="Sundar Pichai") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6246850897455!2d-99.20895528509335!3d19.428615686886484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201f60a8f816b%3A0xca7e9b8e9149aac2!2sGoogle%20M%C3%A9xico!5e0!3m2!1ses!2smx!4v1660370457091!5m2!1ses!2smx" width="1250" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="img3">
        <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c51f.png" width="150px" height="50px">
        </div>
        <?php
    } else if ($ceo =="Jason Chen") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15061.043023157112!2d-99.2197671!3d19.3144881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e1d931d05ffbfdd!2sacer!5e0!3m2!1ses!2smx!4v1660370847728!5m2!1ses!2smx" width="1250" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="img3">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Acer_Logo.svg/1200px-Acer_Logo.svg.png" width="150px" height="50px">
        </div>
        <?php
    } else if ($ceo =="Lei Jun De") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15061.047279492039!2d-99.0765624!3d19.3144419!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b960ee2f832f349!2sXiaomi%20Store%20Parque%20Las%20Antenas!5e0!3m2!1ses!2smx!4v1660371275306!5m2!1ses!2smx" width="1250" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="img3">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Xiaomi_logo_%282021-%29.svg/2048px-Xiaomi_logo_%282021-%29.svg.png" width="100px" height="80px">
        </div>
        <?php
    } else if ($ceo =="Yang Yuanqing") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15056.104217295195!2d-99.260257!3d19.3680245!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e52c4e87fc76426!2sLenovo!5e0!3m2!1ses!2smx!4v1660371597167!5m2!1ses!2smx" width="1250" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="img3">
        <img src="http://www.sesic.com.mx/wp-content/uploads/2018/09/Lenovo-Logo-Transparent-PNG.png" width="150px" height="50px">
        </div>
        <?php
    } else if ($ceo =="Koo Kwang-Mo") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15040.189559806437!2d-99.2064058!3d19.5395789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcb0543e09718172!2sLG%20Electronics%20Mexico%20S.A.DE%20C.V..!5e0!3m2!1ses!2smx!4v1660371884868!5m2!1ses!2smx" width="1200" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="img3">
        <img src="https://logodownload.org/wp-content/uploads/2014/04/lg-logo-1.png" width="140px" height="50px">
        </div>
        <?php
    } else if ($ceo =="Ren Zhengfei") {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15050.205398514127!2d-99.1923476!3d19.4317815!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x37c481acdeea4d9a!2sCentro%20de%20Servicio%20Autorizado%20HUAWEI%20(Masaryk)!5e0!3m2!1ses!2smx!4v1660448290026!5m2!1ses!2smx" width="1200" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <?php
    } else {
        ?>
        <div class="mapa">
        <h4>Ubicacion de <?php echo $razonsocial ?> </h4>
    </div>
    <?php
    }
    ?>
</body>
</html>