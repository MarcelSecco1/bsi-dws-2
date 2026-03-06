<?php
$nota1 = $_POST['nota01'] ?? 0;
$nota2 = $_POST['nota02'] ?? 0;
$nota3 = $_POST['nota03'] ?? 0;

$media = ($nota1 + $nota2 + $nota3) / 3;

$texto = "Aprovado";
$cor = "success";

if ($media > 4 && $media < 6) {
    $texto = "Recuperação";
    $cor = "warning";
}

if ($media < 4) {
    $texto = "Reprovado";
    $cor = "danger";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body class="bg-light">
    <header class="container mb-3 border-bottom border-black">
        <h1>
            Calculo de média
        </h1>
    </header>

    <main class="container">
        <h3>Aluno foi <?= $media ?>, portanto está
            <span class="text-<?= $cor ?>">
                <?= $texto ?>
            </span>
            !!
        </h3>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>
