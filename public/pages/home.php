<?= get("message"); ?>

<h2>Página Inicial</h2>

<a href="?page=create_users">Cadastrar Usuários</a>


<div class="card">
    <div class="card-header text-center">
        <h3>Usuários Cadastrados</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $users = all("users");
                foreach ($users as $user) :
                ?>
                    <tr>
                        <td><?= $user->id; ?></td>
                        <td><?= $user->name; ?></td>
                        <td><?= $user->email; ?></td>
                        <td>
                            <a href="?page=edit_users&id=<?= $user->id;?>" class="btn btn-outline-warning">Editar</a>
                        </td>
                        <td>
                            <a href="?page=delete_users&id=<?= $user->id;?>" class="btn btn-outline-danger">Deletar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>