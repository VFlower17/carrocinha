<?php
    include('includes/conexao.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
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
    <header>
        <a href="CadastroCidade.html/..">Voltar</a>
    </header>
    <form action="CadastrarCidade.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
                <option value="SP">SP</option>
                <option value="MG">MG</option>
                <option value="RJ">RJ</option>
            </select>
        </div>
        <div>
            <button type="submit">CADASTRAR</button>
        </div>
    </form>
</body>
</html>