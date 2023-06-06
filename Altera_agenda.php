<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = "SELECT * FROM usuario where id_usuario=$id_usuario";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--http://localhost/PRW/Banco%20de%20dados/Aulas/altera_usuario?id_usuario=1 -->
    <h1>Cadastro de Usuarios - IFSP</h1>
    <form action="Altera_agenda_exe.php" method="POST" >
    <input name="id_agenda" type="hidden"
        value="<?php echo $row ['id_agenda']?>">

        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"
            value="<?php echo $row['nome'] ?>">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email"
            value="<?php echo $row['email'] ?>">
            
        </div>
        <div>
            <label for="fone">Telefone</label>
            <input type="tel" name="fone" id="fone" 
            placeholder="Formato (18) 9999-8888"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4-5}-[0-9]{4}"
            value="<?php echo $row['telefone'] ?>">
        </div>
        <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco"
            value="<?php echo $row['endereco'] ?>">
        </div>
        <div>
            <label for="apelido">Apelido</label>
            <input type="text" name="endereco" id="endereco"
            value="<?php echo $row['endereco'] ?>">
        </div>
        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro"
            value="<?php echo $row['bairro'] ?>">
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade"
            value="<?php echo $row['cidade'] ?>">
        </div>
        <div>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado"
            value="<?php echo $row['estado'] ?>">
        </div>

        <div>
            <input type="submit" value="Salvar">
        </div>
    </form>
</body>
</html>