<?php
$cor = $_GET['cor'] ?? 'light';
$nome = $_GET['nome'] ?? '';
$email = $_GET['email'] ?? '';

function build_url(array $valores = []): string
{
    global $cor, $nome, $email;

    $params = [
        'cor' => $cor,
        'nome' => $nome,
        'email' => $email,
    ];

    // mescla os valores
    $params = array_merge($params, $valores);

    // remove os valores vazios
    $params = array_filter($params, fn($valor) => $valor !== '');
    $query = http_build_query($params);

    return $query === '' ? './' : './?' . $query;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body class="bg-<?= $cor ?>">
    <header class="container my-4">
        <h1>Destino GET</h1>
    </header>
    <hr>

    <?php
    if (! empty($nome) || ! empty($email)) {
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Nome: <?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?></p>
                <p>Email: <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></p>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="container d-flex flex-column">
        <a href="<?= build_url(['nome' => 'Marcel', 'email' => 'marcel@example.com']) ?>">[Nome: Marcel | Email:
            marcel@example.com]</a>
        <a href="<?= build_url(['nome' => 'Berardo', 'email' => 'berardo@example.com']) ?>">[Nome: Berardo | Email:
            berardo@example.com]</a>
        <a href=".">Limpar tudo</a>
    </div>

    <div class="container mt-3">
        <div class="d-flex gap-4">
            <a href="<?= build_url(['cor' => 'warning']) ?>" class="btn btn-warning p-5 border border-dark"></a>
            <a href="<?= build_url(['cor' => 'secondary']) ?>" class="btn btn-secondary p-5 border border-dark"></a>
            <a href="<?= build_url(['cor' => 'info']) ?>" class="btn btn-info p-5 border border-dark"></a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>