<?php include("config/database.php");
$leitura = "SELECT * FROM produtos";
$resultado = $mysqli->query($leitura);
?>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="center">Tabela de produtos</h1>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Valor(R$)</th>
            </tr>
            <tbody>
                <?php 
                    foreach($resultado as $produto){
                        echo "<tr>
                        <td>{$produto['idprodutos']}</td>
                        <td>{$produto['nome']}</td>
                        <td>{$produto['categoria']}</td>
                        <td>{$produto['valor']}</td>
                        </tr>";
                    }
                ?>
            </tbody>
        </thead>
    </table>
</body>

</html>