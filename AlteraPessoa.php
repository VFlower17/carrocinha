<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <legend>Alteração de pessoa</legend>
        <a href="AlteraPessoa.php/..">Voltar</a>
    </header>
    <form action="AlteraPessoaExe.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
        </div>
        <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']?>">
        </div>
        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']?>">
        </div>
        <div>
            <label for="cep">Cep</label>
            <input type="text" name="cep" id="cep" value="<?php echo $row['cep']?>">
        </div>
        <div>
        <input type="hidden" name="id" id="id" value="<?php echo $row['id']?>">
        </div>
        <div>
            <button type="submit">Alterar</button>
        </div>
    </form>
</body>
</html>