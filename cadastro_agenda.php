<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar</title>
</head>
<body>
<?php
    include("conexao.php");
    $nome_foto = "";

    if(file_exists($_FILES['foto']['tmp_name'])){
    $pasta_destino = 'foto/';
    $extensao = strtolower(substr($_FILES['foto']['name'], -4));
    $nome_foto = $pasta_destino.date("Ymd-His") . $extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    // fim upload
    }
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['endereco'];
    $date = date("y-m-d");


    $sql = "select * from agenda where email = '$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "O email já está cadastrado no banco de dados.";
    } else {
        echo "O email não está cadastrado no banco de dados.";
    }


    echo "<h1>Dados do Usuário</h1>";
    echo "Apelido: $apelido <br>";
    echo "Endereço: $endereco <br>";
    echo "Bairro: $bairro <br>";
    echo "Cidade: $cidade <br>";
    echo "Estado: $estado <br>";
    echo "Telefone: $telefone <br>";
    echo "Celular: $celular <br>";
    echo "E-mail: $email <br>";

    
    
    $sql = "insert into agenda (apelido, endereco, bairro, cidade, estado, 
    telefone, celular, email, dt_cadastro, foto)";

    $sql .= "values ('".$apelido."','".$endereco."', '".$bairro."', '".$cidade."','".$estado."',
    '".$telefone."','".$celular."', '".$email."', '".$date."','".$nome_foto."')";

    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!";
    
?>
    <button><a href="../index.php">Tela Inicial</a></button>
</body>
</html>