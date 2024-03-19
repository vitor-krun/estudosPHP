<div class="card">
    <div class="card-header text-center">
        <h2>Contato</h2>
    </div>
    <div class="card-body">
        <form action="pages/forms/contato.php" method="POST" role="form">
            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome">
                <label for="name" class="form-label">Nome:</label>
            </div>

            <div class="form-group form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
                <label for="email" class="form-label">Email:</label>
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Digite o assunto">
                <label for="subject" class="form-label">Assunto:</label>
            </div>

            <div class="form-group form-floating mb-4">
                <textarea class="form-control" name="message" id="message" cols="30" rows="10" 
                    placeholder="Digite sua mensagem" style="height: 200px"></textarea>
                <label for="message" class="form-label">Mensagem:</label>
            </div>
            <hr>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-outline-primary">Enviar Mensagem</button>
            <!-- <a class="btn btn-outline-danger" href="#"></a> -->
            </div>
        </form>
    </div>
</div>