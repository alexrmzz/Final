<?php
    require_once ('whatsapp-php-sdk-main/ultramsg.class.php'); 

    $ultramsg_token="piw4d0794r0jqaa7"; // Ultramsg.com token
    $instance_id="instance14841"; // Ultramsg.com instance id
    $client = new UltraMsg\WhatsAppApi($ultramsg_token,$instance_id);

    //$to="525585458176"; //Alan
    //$to="525568882154"; //Pedro
    //$to="525531041099"; //Alex
    //$to="525518368745"; //Novaplastic (Nuevo Num)
    
    //$to="525536696052"; //Hugo
    //$to="525518110043"; //Eduardo
    //$to="525554084919"; //Itzia
    //$to="525554385253"; //Leonardo
    //$to="525545246124"; //NOVA --> EL IMPORTANTE

    $body="¡El equipo de Novaplastic le desea un feliz cumpleaños!"; 
    $api=$client->sendChatMessage($to,$body);

    if($api) {
        header("location:MenuA.html");
        }
    else { 
        echo ("Error al enviar el mensaje");
        }
?>