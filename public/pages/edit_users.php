<?= 
    get('message');

    $user = find('users', 'id', $_GET['id']);
?>

<div class="card">
    <div class="card-header text-center">
        <h2>Editar Cadastro</h2>
    </div>
    <div class="card-body">
        <form action="pages/forms/update_users.php" method="POST" role="form">
            
            <input type="hidden" name="id" value="<?= $user->id?>">

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" value="<?= $user->name?>" placeholder="Digite seu nome">
                <label for="name" class="form-label">Nome:</label>
            </div>
            
            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="lastName" id="lastName" value="<?= $user->lastName?>" placeholder="Digite seu sobrenome">
                <label for="lastName" class="form-label">Sobrenome:</label>
            </div>

            <div class="form-group form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" value="<?= $user->email?>" placeholder="Digite seu email">
                <label for="email" class="form-label">Email:</label>
            </div>
            <hr>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-outline-primary">Salvar</button>
                <!-- <button type="button" class="btn btn-outline-danger">Cancelar</button> -->
            </div>
        </form>
    </div>
</div>