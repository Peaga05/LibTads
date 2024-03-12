<?php
include "./Assents/Components/header.php";

?>

<link rel="stylesheet" href="./Assents/Style/main.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card login-container">
                <div class="card-body">
                    <h1 class="card-title text-center">LibTads</h1>
                    <form action="cadastrar_usuario.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success w-50">Entrar</button>
                        </div>
                    </form>
                    <div class="text-center mt-2">
                        <a class="btn btn-cadastro w-50" href="./View/Usuario/cadastrar_usuario_view.php">Cadastra-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "./Assents/Components/footer.php"
?>