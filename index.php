<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3> Pagina Inicial - Projeto Cadastro IFSP</h3>   
<?php
if(!empty($_SESSION['login']))
{
    echo"<h4>Olá ".$_SESSION['login']['nome_usuario']."</h4>";
    echo "<a href='logout.php'>Sair</a>";

}
?>

<hr>
<ul>
<?php
if(empty($_SESSION['login']))
{
    echo "<li><a href='login.html'>Login</a></li>";
}
?>


<LI><a href="cadastro_agenda.html"> Cadastrar</a>  </LI>
<LI><a href="listar_agenda.php"> Listar</a>  </LI>

</ul>

</body>
</html>