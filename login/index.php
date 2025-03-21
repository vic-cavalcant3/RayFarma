<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ray Farma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-image">
                <img src="../login/img/medicamentos.png" alt="Imagem de medicamentos">
            </div>
            <div class="login-form">
                <h1>LOGIN</h1>

                <form action="gravar.php" method="post">

                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Ex: login@gmail.com" required>
                    </div>

                    <div class="input-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Ex: 251207" required>
                    </div>

                    <div class="options">
                        <a href="#">Esqueceu a senha?</a>
                    </div>

                    <button type="submit">ENTRAR</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
