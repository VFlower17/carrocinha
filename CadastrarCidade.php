<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('includes/conexao.php');

        $nome = $_POST['nome'];
        $estado = $_POST['estado'];

        $sql = "INSERT INTO cidade (nome, estado) VALUES ('".$nome."','".$estado."')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
            echo "<nav> <ul>";
            echo "<li><a href='CadastroCidade.html'>Voltar</a></li>";
            echo "<li><a href='Index.html'>Página Inicial</a></li>";
            echo "</ul></nav>";
        }
        else{
            echo "<h2>Erro ao cadastrar!</h2>".mysqli_error($con);
            echo "<nav> <ul>";
            echo "<li><a href='CadastroCidade.html'>Voltar</a></li>";
            echo "<li><a href='Index.html'>Página Inicial</a></li>";
            echo "</ul></nav>";
        }
    ?>
</body>
</html>