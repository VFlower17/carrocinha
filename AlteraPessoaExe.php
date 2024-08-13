<?php
    include('includes/conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
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
    <?php
        $sql = "UPDATE pessoa SET nome = '$nome', endereco = '$endereco', bairro = '$bairro', cep = '$cep' WHERE id = '$id'";
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