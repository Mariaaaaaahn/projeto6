<?php
//upload fotos
if(file_exists($_FILES['foto']['tmp_name'])){
$pastadestino = 'fotos/'; //caminho em que esta salvando
$extensao = strtolower(substr($_FILES['foto']['name'],-4));
$nome_foto = $pastadestino . date("Ymd-His") . $extensao; 
move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);                                                
//fim uploaded 
}

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];

echo "<h1>Dados do usuário</h1>";
echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Telefone: $telefone <br>";
echo "Endereço: $endereco <br>";
echo "bairro: $bairro <br>";
echo "cidade: $cidade <br>";
echo "estado: $estado <br>";

$sql = "INSERT INTO usuario (nome_usuario, email_usuario,
                            fone_usuario, senha, foto)";
$sql .= "VALUES ('".$nome."','".$email."','".
                    $telefone."','".$endereco."','".$cidade."','".$estado.'",'".$bairro."')";

                    
echo $sql."<br>";
$result = mysqli_query($con, $sql);
if($result)
    echo "Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!";



?>