<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <?php
        include('conexao.php');
        $sql = "select * from agenda";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <h1>Consulta de Pessoas</h1>
    <table align="center" border="1" width="90%">
        <tr>
            <th>ID</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Data</th>
            <th>Alterar</th>
            <th>Apagar pessoa</th>
        </tr>
        <?php
            do{
                if($row)
                {
                    echo "<tr>";
                    echo "<td>".$row['id_agenda']."</td>";
                    echo "<td>".$row['apelido']."</td>";
                    echo "<td>".$row['endereco']."</td>";
                    echo "<td>".$row['bairro']."</td>";
                    echo "<td>".$row['cidade']."</td>";
                    echo "<td>".$row['estado']."</td>";
                    echo "<td>".$row['telefone']."</td>";
                    echo "<td>".$row['celular']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['dt_cadastro']."</td>";
                    echo "<td><a href='altera_agenda.php?id_agenda=" 
                    .$row['id_agenda']."'>Alterar</a> </td>";
                    echo "<td><a href='excluir_agenda.php?id_agenda=" 
                    .$row['id_agenda']."'>Deletar</a> </td>";
                    echo "</tr>";
                }
                    
             } while ($row = mysqli_fetch_array($result))
        ?>
    </table>
    <a href="index.php"><button>Tela Inicial</button></a>
</body>
</html>