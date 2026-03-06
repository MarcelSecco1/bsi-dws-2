<?php
$opcoes = [2, 7, 8, 11, 15, 23, 30];
$numero = isset($_GET['numero']) ? (int) $_GET['numero'] : null;

function eh_primo(int $n): bool
{
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= (int) sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}
?>
<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Praticando 3 - Numeros primos</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>
</head>

<body class='bg-light'>
    <header class='container mt-4'>
        <h1>Praticando 3 - Numeros primos</h1>
        <hr>
    </header>

    <main class='container'>
        <p>Escolha um numero:</p>

        <div class='d-flex gap-2 flex-wrap mb-4'>
            <?php foreach ($opcoes as $valor): ?>
                <a href='?numero=<?= $valor ?>' class='btn btn-outline-primary'><?= $valor ?></a>
            <?php endforeach; ?>
            <a href='index.php' class='btn btn-outline-secondary'>Limpar</a>
        </div>

        <?php if ($numero !== null): ?>
            <?php
            $primo = eh_primo($numero);
            $paridade = $numero % 2 === 0 ? 'par' : 'impar';
            ?>
            <div class='alert alert-<?= $primo ? 'success' : 'warning' ?>'>
                <h2 class='h5'>Numero escolhido: <?= $numero ?></h2>
                <p class='mb-1'>Esse numero <?= $primo ? 'e primo' : 'nao e primo' ?>.</p>
                <p class='mb-0'>Esse numero e <?= $paridade ?>.</p>
            </div>
        <?php endif; ?>

        <a href='../index.php' class='btn btn-link ps-0'>Voltar</a>
    </main>
</body>

</html>
