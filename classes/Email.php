<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{
    public $email;
    public $nombre;
    public $token;
    
    public function __construct($nombre, $email, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
        //Crear objet email
        $mail = new PHPMailer();
        $mail->isSMTP();       
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '6991bafd8010fb';
        $mail->Password = 'b50e42ae81fbef';

        $mail->setFrom('cuentas@barberia.com');
        $mail->addAddress('cuentas@barberia.com', 'barberia.com');
        $mail->Subject = 'Confirma tu cuenta';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre ."</strong> Has creado tu cuenta en Barberia,
        solo debes condirmar tu cuenta presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/confirmar-cuenta?token="
        . $this->token . "'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje";
        $contenido .= "</html>";
        $mail->Body = $contenido;


        //Enviar el email
        $mail->send();

    }

    public function enviarInstrucciones(){
        //Crear objet email
        $mail = new PHPMailer();
        $mail->isSMTP();       
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '6991bafd8010fb';
        $mail->Password = 'b50e42ae81fbef';

        $mail->setFrom('cuentas@barberia.com');
        $mail->addAddress('cuentas@barberia.com', 'barberia.com');
        $mail->Subject = 'Confirma tu cuenta';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre ."</strong> Has solucitado reestalecer tu password. Sigue el siguiente enlace para hacerlo</p>";
        $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/recuperar?token="
        . $this->token . "'>Reestablecer Password</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje";
        $contenido .= "</html>";
        $mail->Body = $contenido;


        //Enviar el email
        $mail->send();
    }

}