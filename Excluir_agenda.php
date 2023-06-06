<?php
     include('conexao.php');
     $id_agenda = $_GET['id_agenda'];
     $sql = "SELECT * FROM usuario  WHERE id_agenda=$id_agenda";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result);
     $nome_usuario = $row['nome_usuario'];


    echo "<h1>Deletar dados</h1>";
    echo "<p>Usuário: $nome_usuario</p>";
    $sql = "DsELETE from usuario where id_agenda = $id_agenda";


    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados deletados com sucesso!<br>";
    else
        echo "Erro ao deletar dados: ".$mysqli_error($con)."!";
?>
<a href="index.php">Voltar</a>