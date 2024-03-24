<?php

require "../../../bootstrap.php";

$id = filter_input(INPUT_POST,"id", FILTER_SANITIZE_NUMBER_INT);

if(isEmpty()){
    flash('message', 'Preencha todos os campos!', '');
    return redirect('edit_users&id='.$id);
}

$validate = validate([
    'name' => 's',
    'lastName' => 's',
    'email'=> 'e',    
]);

$upgrade = update('users', $validate, ['id', $id]);

if($upgrade){
    flash('message','Dados atualizados com sucesso!', 'success');
    return redirect('edit_users&id='.$id);    
}
flash('message','Erro ao atualizar!', '');
redirect('edit_users&id='.$id);