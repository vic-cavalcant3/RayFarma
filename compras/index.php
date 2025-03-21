<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ray Farma - Compras</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="header-nav">
            <a href="#Medicamentos">Medicamentos</a>
            <a href="#Higiene">Higiene</a>
            <a href="#Beleza">Beleza</a>
            <a href="../manipulados">Manipulados</a>
        </div>
        <h1>RayFarma</h1>
        <div class="header-bottoes">

            <div class="header-bottoes-inputs">

            <input type="serach" placeholder="buscar">
            <img src="icon1.png" alt="" class="icon1">

            </div>
        <button onclick="window.location.href='../login/index.php'"><img src="icon2.png" alt=""  class="icon"></button>
        <button onclick="window.location.href='../carrinho/index.php'"><img src="icon3.png" alt=""  class="icon2"></button>
        </div>
    </header>

    <div class="linha"></div>
    <section class="banner">
        <img src="confira1.png" alt="Promoção Semana do Consumidor">
    </section>

    <main>
        <section class="produtos" id="Medicamentos">
            <h2 id="Medicamentos" >Medicamentos</h2>
            <div class="produtos-grid">
                <?php
                    $medicamentos = [
                        ["nome" => "Cimegripe", "valor" => "R$ 12,50", "img" => "cimegripe.jpg"],
                        ["nome" => "Eno", "valor" => "R$ 15,00", "img" => "epocler.jpg"],
                        ["nome" => "Buscofem", "valor" => "R$ 7,30", "img" => "aspirina.jpg"],
                        ["nome" => "Neosaldina", "valor" => "R$ 10,99", "img" => "neosaldina.jpg"]
                    ];

                    foreach ($medicamentos as $med) {
                        echo "
                        <div class='produto-card'>
                            <img src='{$med['img']}' alt='{$med['nome']}'>
                            <h3>{$med['nome']}</h3>
                            <h4>{$med['valor']}</h4>
                            <button class='comprar-btn'>Comprar</button>
                        </div>";
                    }
                ?>
            </div>
        </section>

        <section class="produtos" id="Higiene">
            <h2>Higiene</h2>
            <div class="produtos-grid">
                <?php
                    $higiene = [
                        ["nome" => "Sabonete Líquido", "valor" => "R$ 8,50", "img" => "sabonete.jpg"],
                        ["nome" => "Desodorante", "valor" => "R$ 12,00", "img" => "desodorante.jpg"],
                        ["nome" => "Alcool em Gel", "valor" => "R$ 6,99", "img" => "agua-oxigenada.jpg"],
                        ["nome" => "Lenço Umedecido", "valor" => "R$ 18,00", "img" => "luva.jpg"]
                    ];

                    foreach ($higiene as $prod) {
                        echo "
                        <div class='produto-card'>
                            <img src='{$prod['img']}' alt='{$prod['nome']}'>
                            <h3>{$prod['nome']}</h3>
                            <h4>{$prod['valor']}</h4>
                            <button class='comprar-btn'>Comprar</button>
                        </div>";
                    }
                ?>
            </div>
        </section>

        <section class="produtos"  id="Beleza">
            <h2>Beleza</h2>
            <div class="produtos-grid">
                <?php
                    $beleza = [
                        ["nome" => "Demaquilante Bioré", "valor" => "R$ 14,50", "img" => "shampoo.jpg"],
                        ["nome" => "Lenço de Limpeza Facial", "valor" => "R$ 22,00", "img" => "creme-facial.jpg"],
                        ["nome" => "Pó Compacto", "valor" => "R$ 25,00", "img" => "hidratante.jpg"],
                        ["nome" => " Creme Facial Antissinais", "valor" => "R$ 9,99", "img" => "esmalte.jpg"]
                    ];

                    foreach ($beleza as $prod) {
                        echo "
                        <div class='produto-card'>
                            <img src='{$prod['img']}' alt='{$prod['nome']}'>
                            <h3>{$prod['nome']}</h3>
                            <h4>{$prod['valor']}</h4>
                            <button class='comprar-btn'>Comprar</button>
                        </div>";
                    }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2025 Ray Farma. Todos os direitos reservados.</p>
            <div class="social-media">
                <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>


    <script>

    document.addEventListener("DOMContentLoaded", function() {

        const buttons = document.querySelectorAll('.comprar-btn');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                //Mostrar o alerta
                alert("Compra feita com sucesso!");

                const produtoNome = this.closest('.produto-card').querySelector('h3').textContent;
                const produtoValor = this.closest('.produto-card').querySelector('h4').textContent;

                // Enviar os dados para o PHP via AJAX
                fetch('gravar.php', {
                    method: 'POST',
                    body: new URLSearchParams({
                        'acao': 'compra',
                        'produto': produtoNome,
                        'valor': produtoValor
                    })
                });
            });
        });
    });

   
</script>


</body>
</html>
