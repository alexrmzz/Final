<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';

    class clsMail{

        private $mail = null;
        
        function __construct() {
            $this->mail = new PHPMailer();
            $this->mail->isSMTP(); //Ocuparemos solamente SMTP
            $this->mail->SMTPAuth = true;
            $this->mail->SMTPSecure = 'tls';
            $this->mail->Host = 'smtp.gmail.com'; //Indicamos que utilizaremos cuenta gmail
            $this->mail->Port = 587;

            $this->mail-> Username = 'novaplastictin@gmail.com'; //Correo gmail que utilizaremos
            $this->mail-> Password = 'nthxfqjfwailnucw'; //Contraseña de aplicación 
        }   
        
        public function met_Enviar(string $titulo, string $nombre, string $correo, string $asunto, string $body) { //Recibir string indicando nombre/correo/asunto
            $this->mail->setFrom("novaplastictin@gmail.com", $titulo); //Correo del cual enviaremos
            $this->mail->addAddress($correo, $nombre); //A quien enviaremos
            $this->mail->addAddress('novaplastictin@gmail.com');
            $this->mail->addAddress('alan.ramos.av@usb.edu.mx');
            $this->mail->addAddress('jorge.ramirez.si@usb.edu.mx');
            $this->mail->addAddress('pedro.mejia.ch@usb.edu.mx');
            //$this->mail->addAddress('guillermo.nova.am@usb.edu.mx');
            //$this->mail->addAddress('itzia.sanchez.me@usb.edu.mx');
            //$this->mail->addAddress('eorduna@usb.edu.mx');
            //$this->mail->addAddress('leonardo.hernandez.ma@usb.edu.mx');
            //$this->mail->addAddress('hugo.quiroz.es@usb.edu.mx');
            $this->mail-> Subject = $asunto;
            $this->mail-> Body = $body; //HTML
            $this->mail-> isHTML(true);
            $this->mail-> CharSet = "UTF-8"; //Caracteres especiales

            return $this->mail->send(); //funcion booleana
        }
    }
?>