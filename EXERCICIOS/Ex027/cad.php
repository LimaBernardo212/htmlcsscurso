<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p>
    <?php
        $nome = $_GET["t1"] ?? "<Desconhecido>";
        $snome = $_GET["t2"] ?? "Provavelmente drogado";
        echo "Seja bem vindo $nome $snome";
        ?>
    </p>
</body>
</html>