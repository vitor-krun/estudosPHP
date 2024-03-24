<?php


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// $excluded = delete('users', 'id', $id);
$excluded = delete('users', 'id', $id);

if ($excluded) {
    flash('message', 'Dados deletados com sucesso!', 'success');
    return redirectToHome();
}
flash('message', 'Erro ao deletar!', '');
redirectToHome();