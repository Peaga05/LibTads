<?php

require_once "../../Controller/usuario_controller.php";
if (isset($_POST["btn-cadastrar"])) {
    $controller = new UsuarioController();
    $controller->cadastrarUsuario(null);
}

include "../../Assents/Components/header.php";
?>
<link rel="stylesheet" href="../../Assents/Style/main.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card login-container">
                <div class="card-body">
                    <h1 class="card-title text-center">Cadastro</h1>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="sobrenome" class="form-label">Sobrenome:</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                        </div>
                        <div class="mb-3">
                            <label for="matricula" class="form-label">Matrícula:</label>
                            <input type="text" class="form-control" id="matricula" name="matricula">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success w-50" name="btn-cadastrar" id="btn-cadastrar">Cadastre-se</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "../../Assents/Components/footer.php"
?>