<?php

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', '<strong>Preencha todos os campos!</strong>', '');
    return redirect('contato');
}

$validate = validate([
    'name' => 's',
    'email'=> 'e',
    'subject' => 's',
    'message' => 's',

]);

dd($validate->name);            