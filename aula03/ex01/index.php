<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Page</title>
</head>

<body>
    <?php date_default_timezone_set("America/Sao_Paulo");?>

    <h1>My First Page</h1>
    <h1>Hello world!</h1>

    <?php
    echo "Olá, meu nome é Marcel Secco e estou aprendendo PHP.";
    echo "Hoje é dia " . date("d/m/Y");
    echo " e a hora é " . date("H:i:s");
    ?>

    <br><br>

    <a href="../">Voltar</a>
</body>

</html>