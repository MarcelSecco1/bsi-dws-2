<?php
$inicio = isset($_POST['inicio']) ? (int) $_POST['inicio'] : 0;
$final = isset($_POST['final']) ? (int) $_POST['final'] : 0;
$incremento = isset($_POST['incremento']) ? (int) $_POST['incremento'] : 1;

if ($incremento <= 0) {
    $incremento = 1;
}

$valores = [];

if ($inicio <= $final) {
    for ($i = $inicio; $i <= $final; $i += $incremento) {
        $valores[] = $i;
    }
} else {
    for ($i = $inicio; $i >= $final; $i -= $incremento) {
        $valores[] = $i;
    }
}
?>
<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Praticando 2 - Resultado</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>
</head>

<body class='bg-light'>
    <header class='container mt-4'>
        <h1>Resultado da contagem</h1>
        <hr>
    </header>

    <main class='container'>
        <p><strong>Inicio:</strong> <?= $inicio ?></p>
        <p><strong>Final:</strong> <?= $final ?></p>
        <p><strong>Incremento:</strong> <?= $incremento ?></p>

        <div class='alert alert-info'>
            <?php foreach ($valores as $valor): ?>
                <span class='me-2'><?= $valor ?></span>
            <?php endforeach; ?>
        </div>

        <a href='./index.php' class='btn btn-primary'>Voltar</a>
    </main>
</body>

</html>
