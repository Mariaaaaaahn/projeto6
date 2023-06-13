<?php
     include('conexao.php');
     $id_agenda = $_GET['id_agenda'];
     $sql = "select * from agenda where id_agenda=$id_agenda";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result);
     $apelido = $row['apelido'];


    echo "<h1>Deletar pessoa</h1>";
    echo "<p>Apelido: $apelido</p>";
    $sql = "delete from agenda where id_agenda = $id_agenda";


    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados deletados com sucesso!<br>";
    else
        echo "Erro ao deletar dados: ".$mysqli_error($con)."!";
?>

<a href="../index.php">Voltar</a>