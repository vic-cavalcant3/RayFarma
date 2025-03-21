<?php
$host = 'localhost';
$login = 'root';
$password = '';
$bd = 'RayFarma';

$tabela = 'compras';

$link = new mysqli($host, $login, $password, $bd);


if ($link->connect_error) {
    die("Erro de coneAxão: " . $link->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'compra') {
    $produto = $link->real_escape_string($_POST['produto']);
    $valor = $link->real_escape_string($_POST['valor']);
    

    $query = "INSERT INTO $tabela (produto, valor) VALUES ('$produto', '$valor')";


    if ($link->query($query) === TRUE) {
        echo "Compra registrada com sucesso!";
    } else {
        echo "Erro ao registrar a compra: " . $link->error;
    }
}


$link->close();

?>
