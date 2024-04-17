<?php
    require_once ("PHPMailer/clsMail.php");

    $mailSend = new clsMail();

    $body = '
        <h2>Hola, el equipo de NovaPlastic S.A. de C.V. le desea un feliz día</h2>
        <br>
        <br>
        <br>
        Feliz cumpleaños';

    $Enviado = $mailSend -> met_Enviar("¡Novaplastic le desea un feliz cumpleaños!", "Novaplastic S.A. de C.V.", "novaplastictin@gmail.com", "¡Novaplastic le desea un feliz cumpleaños!", $body);

    if($Enviado) {
        //echo ("Enviado");
        header("location:MenuA.html");
    }
    else { 
        echo ("Error al enviar el correo");
    }
?>