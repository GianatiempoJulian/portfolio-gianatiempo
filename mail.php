<?php


//PONER VALIDACIONES!!! QUE NO LLEGUE NADA VACIO Y DEMAS//
//quien recibiria el correo.
$to = "julian.a.gianatiempo@gmail.com";


if(isset($_POST['send'])){
    if($_POST['name'] != null && $_POST['email'] != null && $_POST['subject'] != null && $_POST['message'] != null){
        //datos recibidos del form.
        $name = $_POST['name'];
        $mail = $_POST['email'];
        $subject = "Contacto de trabajo: " + $_POST['subject'];
        $message = $_POST['message'];
    }
}



//partes del correo.
$header = "From: " . $mail. "\r\n";
$header.="Reply-To: noreply@gmail.com" . "\r\n";
$header.= "X-Mailer: PHP/" .phpversion();


@mail($to,$subject,$message,$header);

header("location: index.html");




?>