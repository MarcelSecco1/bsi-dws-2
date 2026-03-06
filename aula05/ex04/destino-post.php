<?php
$linhas = isset($_POST['linhas']) ? (int) $_POST['linhas'] : 1;
$colunas = isset($_POST['colunas']) ? (int) $_POST['colunas'] : 1;
$estilo = $_POST['estilo'] ?? 'table-primary';

if ($linhas < 1) {
    $linhas = 1;
}

if ($colunas < 1) {
    $colunas = 1;
}

$estilosPermitidos = ['table-primary', 'table-success', 'table-warning', 'table-danger', 'table-secondary'];

if (!in_array($estilo, $estilosPermitidos, true)) {
    $estilo = 'table-primary';
}
?>
<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Praticando 4 - Resultado</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>
</head>

<body class='bg-light'>
    <header class='container mt-4'>
        <h1>Tabela gerada</h1>
        <hr>
    </header>

    <main class='container'>
        <p><strong>Linhas:</strong> <?= $linhas ?></p>
        <p><strong>Colunas:</strong> <?= $colunas ?></p>

        <table class='table table-bordered <?= $estilo ?>'>
            <tbody>
                <?php for ($i = 0; $i < $linhas; $i++): ?>
                    <tr>
                        <?php for ($j = 0; $j < $colunas; $j++): ?>
                            <td>&nbsp;</td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <a href='./index.php' class='btn btn-primary'>Voltar</a>
    </main>
</body>

</html>
