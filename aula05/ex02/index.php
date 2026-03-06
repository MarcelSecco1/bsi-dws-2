<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Praticando 2 - Contador</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>
</head>

<body class='bg-light'>
    <header class='container mt-4'>
        <h1>Praticando 2 - Contador</h1>
        <hr>
    </header>

    <main class='container'>
        <form action='./destino-post.php' method='post'>
            <div class='mb-3'>
                <label for='inicio' class='form-label'>Inicio</label>
                <input type='number' class='form-control' id='inicio' name='inicio' required>
            </div>

            <div class='mb-3'>
                <label for='final' class='form-label'>Final</label>
                <input type='number' class='form-control' id='final' name='final' required>
            </div>

            <div class='mb-3'>
                <label for='incremento' class='form-label'>Incremento</label>
                <input type='number' class='form-control' id='incremento' name='incremento' min='1' required>
            </div>

            <div class='d-flex gap-2'>
                <button type='submit' class='btn btn-primary'>Contar</button>
                <button type='reset' class='btn btn-secondary'>Limpar</button>
            </div>
        </form>

        <a href='../index.php' class='btn btn-link mt-3 ps-0'>Voltar</a>
    </main>
</body>

</html>
