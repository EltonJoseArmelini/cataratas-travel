<?php 
require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
    $body='
    <html><body>
    <header>
        <img  style="width: 200px;height: 200px;" class="header-logo" src="https://cataratastravel.com/images/logo-brand.png" alt="logo_cataratas_travel">
        <h3 class="header-title" style="font-family: Verdana, Geneva, sans-serif;" >Nueva Consulta</h3>
        <p class="header-body" style="font-family: Verdana, Geneva, sans-serif;" >Atencion, usted ha recibido una nueva consulta.</p>
    </header>
    <hr>
    <div class="msg-body" >
        <p id="name" >Nombre y Apellido: <span style="color: #ff6500;" >'.$_POST['name'].'</span></p>
        <p id="mail" >Mail:<span style="color: #ff6500;">'.$_POST['mail'].'</span> </p>
        <p id="subj" >Asunto: <span style="color: #ff6500;" >'.$_POST['subject'].'</span></p>
        <p id="msg" >Mensaje: <span>'.$_POST['message'].'</span></p>
    </div>
    <hr>
    </body></html>
    ';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = "c1491703.ferozo.com";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "contacto@cataratastravel.com";
$mail->Password = "*HCt83C8eC";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->setFrom("contacto@cataratastravel.com", "Cataratas Travel");
$mail->addReplyTo($_POST['mail'],$_POST['name']);
$mail->addAddress("info@cataratastravel.com");
$mail->Subject = "Nueva Consulta";
$mail->Body = $body;
$mail->IsHTML(true); 
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo true;
}
?>


