<?php


$corTexto  = filter_input(INPUT_POST, 'cor-text', FILTER_SANITIZE_SPECIAL_CHARS);
$titulo    = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$corpo     = filter_input(INPUT_POST, 'corpo', FILTER_SANITIZE_SPECIAL_CHARS);
$urlImagem = filter_input(INPUT_POST, 'url-imagem', FILTER_SANITIZE_URL);
$urlLink   = filter_input(INPUT_POST, 'url-link', FILTER_SANITIZE_URL);
$corFundo  = filter_input(INPUT_POST, 'cor-fundo', FILTER_SANITIZE_SPECIAL_CHARS);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $titulo ?> </title>
    <style>
    body {
        background-color: <?=$corFundo ?>;
        color: <?=$corTexto ?>;
    }
    </style>
</head>

<body>
    <h1> <?= $titulo ?> </h1>
    <p> <?= $corpo ?> </p>
    <img src="<?= $urlImagem ?>"> <br><br>
    <a href="<?= $urlLink ?>"> <?= $urlLink ?> </a>
</body>

</html>