<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RayFarma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
        <div class="login-box">
            <div class="login-image">
                <img src="../imagens/Manipulados.png" alt="Imagem de medicamentos">
            </div>
            <div class="login-form">
                <h1>Remédios Manipulados</h1>
                <form action="gravar.php" method="POST">
                    <div class="input-group">
                        <label class="label1" for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Maria do Socorro da Silva" required>
                    </div>

                    <div class="input-group">
                        <label class="label1" for="hospital">Hospital</label>
                        <input type="text" id="hospital" name="hospital" placeholder="Ex: Hospital Regional São Marcos" required>
                    </div>

                    <div class="input-group">
                        <label class="label1" for="data">Data Receita</label>
                        <input type="date" id="dataReceita" name="dataReceita" placeholder="Ex: 20/02/2024" required>
                    </div>


                    <div class="input-group">
                        <label class="label1" for="foto">Coloque aqui uma foto da receita</label>
                        <label class="label2" for="">(uma foto de boa qualidade)</label>
                        <input type="file" id="fotoReceita" name="fotoReceita" required>
                    </div>
                    
                    <button type="submit">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>