<?php

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'Preencha todos os campos!', '');
    return redirect('create_users');
}

$validate = validate([
    'name' => 's',
    'lastName' => 's',
    'email'=> 'e',
    'password' => 's',
    
]);

$register = create('users', $validate);

if($register){
    flash('message','Usuário cadastrado com sucesso!', 'success');
    return redirect('create_users');    
}
flash('message','Erro ao cadastrar!', '');
redirect('create_users');