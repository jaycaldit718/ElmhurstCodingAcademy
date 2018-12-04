<?php

if (isset($_POST['submit'])){
    
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='jaycaldit718@gmail.com';
    $mail->Password='nbagiiprrgt';
    
    
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('bjaypc88@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    
    $mail->isHTML(true);
    $mail->Subject='Test Email';
    $mail->Body=$_POST['message'];
    
    if (!$mail->send()){
        
        $result = 'Something went wrong';
        
    }
    else {
        $result='Thanks';
        
    }
    
}




?>
