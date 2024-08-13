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
        include('includes/conexao.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM pessoa WHERE id=$id";
        $result = mysqli_query($con, $sql);

        if($result){
            echo "<h3>Dados deletados com sucesso!</h3>";
        }
        else{
            echo "<h3>Erro ao deletar dados!</h3><br>".mysqli_error($con);
        }
    ?>
</body>
</html>