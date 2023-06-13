<?php
include('conexao.php');
$id_agenda = $_GET['id_agenda'];
$sql = "select * from agenda where id_agenda=$id_agenda";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
    <link rel="stylesheet" type="text/css" href="../css/estiloAltera/estilo.css" media="screen" />

</head>

<body>
    <div class="container">
        <div class="box">
            <h1 class="titulo">
                Alterar dados de uma Pessoa
            </h1>
            <form action="altera_agenda_exe.php" method="post" enctype="multipart/form-data">
                <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda'] ?>">
                <div>
                    <label for="apelido">Apelido: </label>
                    <input type="text" name="apelido" id="apelido" required maxlength="50" value="<?php echo $row['apelido'] ?>">
                </div>
                <div>
                    <?php if ($row['foto'] == "")
                        echo "<td></td>";
                    else
                        echo "<td><img src='" . $row['foto'] . "' width='200px' height='200px'/></td>";
                    ?>
                    <input type="file" name="foto" id="foto" accept="image" value="<?php echo $row['foto'] ?>">
                </div>
                <div>
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" required maxlength="40" value="<?php echo $row['endereco'] ?>">
                </div>
                <div>
                    <label for="bairro">Bairro: </label>
                    <input type="text" name="bairro" id="bairro" required maxlength="70" value="<?php echo $row['bairro'] ?>">
                </div>
                <div>
                    <label for="cidade">Cidade: </label>
                    <input type="text" name="cidade" id="cidade" required maxlength="50" value="<?php echo $row['cidade'] ?>">
                </div>
                <div>
                    <label for="estado">Estado: </label>
                    <input type="text" name="estado" id="estado" required maxlength="02" value="<?php echo $row['estado'] ?>">
                </div>
                <div>
                    <label for="telefone">Telefone: </label>
                    <input type="tel" name="telefone" id="telefone" maxlength="15" placeholder="(xx) xxxx-xxxx" pattern="\([0-9]{2}\)[0-9]{4}-[0-9]{4}" required value="<?php echo $row['telefone'] ?>">
                </div>
                <div>
                    <label for="celular">Celular: </label>
                    <input type="tel" name="celular" id="celular" maxlength="15" placeholder="(xx) xxxx-xxxx" pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" required value="<?php echo $row['celular'] ?>">
                </div>
                <div>
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email" required maxlength="70" value="<?php echo $row['email'] ?>">
                </div>
                <input class="submit" type="submit" value="Salvar" class="buttom">
                <button><a href="../index.php">Tela Inicial</a></button>
            </form>
        </div>
    </div>
</body>

</html>