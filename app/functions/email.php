<?php

function send(array $data){
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = "UTF-8";
    $email->SMTPSecure = 'plain';
    $email->isSMTP();
    $email->Host = 'sandbox.smtp.mailtrap.io';
    $email->Port = 2525;
    $email->SMTPAuth = true;
    $email->Username = 'ee6b7accdf7c75';
    $email->Password = 'd69675cea78bb4';
    $email->isHTML(true);
    $email->setFrom('bmlvitorlv.nu@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagen'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse e-mail, tenha certeza que está vendo em um programa que aceita ver HTML';
    $email->MsgHTML($data['mensagen']);
    return $email->send();
}