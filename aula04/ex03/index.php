<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>
    <header class="container">
        <h1>Calculadora</h1>
    </header>
    <hr>

    <main class="container">
        <form action="./destino-post.php" method="post">
            <div class="mb-3">
                <label for="nota01" class="form-label">Nota 01</label>
                <input type="number" min="0" max="10" class="form-control" id="nota01" name="nota01">
            </div>
            <div class=" mb-3">
                <label for="nota02" class="form-label">Nota 02</label>
                <input type="number" min="0" max="10" class="form-control" id="nota02" name="nota02">
            </div>
            <div class="mb-3">
                <label for="nota03" class="form-label">Nota 03</label>
                <input type="number" min="0" max="10" class="form-control" id="nota03" name="nota03">
            </div>
            <div class="d-flex justify-content-end gap-3">
                <button type="submit" class="btn btn-primary">Calcular</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
            </div>
        </form>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>
