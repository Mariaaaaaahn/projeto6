<?php
include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$apelido = $_POST['apelido'];
$id_agente = $_POST['id_agente'];


echo "<h1>Alteração de dados</h1>";
echo "<p>Agenda: $nome";
echo $id_agenda;

$sql = "UPDATE usuario SET
    nome='$nome',
    apelido='$apelido',
    endereco='$enderco',
    telefone='$telefone',
    bairro='$bairro',
    email='$email',
    cidade='$cidade',
    estado='$estado',
    WHERE id_agenda=$id_agenda"; /*Criando o comando para atualizar na tabela do usuario*/

    echo $sql;

    /*função que conecta no banco*/
    $result = mysqli_query($con, $sql);

if ($result) {
    echo "Dados atualizados com sucesso!<br>";
} else {
    echo "Ocorreu um erro ao atualizar os dados: " . mysqli_error($con) . "!";
}

?>

<a href="index.php">Voltar</a>