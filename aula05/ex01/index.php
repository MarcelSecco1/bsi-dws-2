<?php
$numero = isset($_GET['numero']) ? (int) $_GET['numero'] : null;
?>
<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Praticando 1 - Tabuada</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>
</head>

<body class='bg-light'>
    <header class='container mt-4'>
        <h1>Praticando 1 - Tabuada</h1>
        <hr>
    </header>

    <main class='container'>
        <form method='get' class='mb-4'>
            <div class='mb-3'>
                <label for='numero' class='form-label'>Digite um numero</label>
                <input type='number' class='form-control' id='numero' name='numero' required
                    value='<?= $numero ?? '' ?>'>
            </div>

            <div class='d-flex gap-2'>
                <button type='submit' class='btn btn-primary'>Gerar</button>
                <a href='index.php' class='btn btn-secondary'>Limpar</a>
            </div>
        </form>

        <?php if ($numero !== null): ?>
            <div class='card'>
                <div class='card-body'>
                    <h2 class='h5'>Tabuada do <?= $numero ?></h2>
                    <ul class='list-group'>
                        <?php for ($i = 1; $i <= 10; $i++): ?>
                            <li class='list-group-item'>
                                <?= $numero ?> x <?= $i ?> = <?= $numero * $i ?>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <a href='../index.php' class='btn btn-link mt-3 ps-0'>Voltar</a>
    </main>
</body>

</html>
