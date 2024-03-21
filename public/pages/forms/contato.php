<?php

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'Preencha todos os campos!', '');
    return redirect('contato');
}

$validate = validate([
    'name' => 's',
    'email'=> 'e',
    'subject' => 's',
    'message' => 's',
    
]);

$data = [
    'para' => 'bmlvitorlv@outlook.com',
    'quem' => $validate->email,
    'assunto' => $validate->subject,
    'mensagen' => $validate->message,
];

// dd(send($data));
if(send($data)){
    flash('message', 'Email enviado com sucesso!','success');
    return redirect('contato');
}