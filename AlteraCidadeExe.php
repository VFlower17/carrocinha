<?php
    include('includes/conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
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
        <h1>Alteração de cidade</h1>
        <a href="ListarCidade.php">Voltar</a>
    </header>

    <?php
        $sql = "UPDATE cidade SET nome = '$nome', estado = '$estado' WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h3>Dados atualizados!</h3>";
        }
        else{
            echo "<h3>Erro ao atualizar dados!</h3><br>".mysqli_error($con);
        }
    ?>
    
</body>
</html>