<?php include ('conecta.php') ?>

<?php
    $nome = $_POST['nome'];
    $hospital = $_POST['hospital'];
    $dataReceita = $_POST['dataReceita'];
    $fotoReceita = $_POST['fotoReceita'];

   
    
    $query = "INSERT INTO $tabela VALUES ('NULL',
    '$nome',
    '$hospital',
    '$dataReceita',
    '$fotoReceita')";


 $mysqli = new mysqli($host, $login, $password, $bd);

    if ($mysqli->connect_error) {
        die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
    }
    $resultado = $mysqli->query($query);

    if ($mysqli -> query($query) === TRUE) {
        echo '<script> alert("Enviado com sucesso!!! Retornaremos em breve.") </script>';
        header("location: ../inicial/index.php");
      } else {
        echo "Erro na consulta: " . $mysqli->error; 
      }
          
    $mysqli->close();
?> 