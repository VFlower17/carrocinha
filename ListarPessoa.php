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
        $sql = "SELECT * FROM pessoa";
        $result = mysqli_query($con, $sql);
    ?>
    <div>
        <header>
        <h1>Cidades Cadastradas</h1>
        <a href="ListarPessoa.php/..">Voltar</a>
        </header>
        <table align="center" border="1" width="500">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cep</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>

            <?php
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['endereco']."</td>";
                    echo "<td>".$row['bairro']."</td>";
                    echo "<td>".$row['cep']."</td>";
                    echo "<td><a href='AlteraPessoa.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td>Deletar</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>