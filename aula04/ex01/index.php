<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>
    <header class="mt-4">
        <h1>Formulário</h1>
        <hr>
    </header>

    <div class="container-sm">
        <form action="./send_form.php" method="POST">
            <div class="row mb-3">
                <div class="col-6">
                    <label for="titulo" class="form-label">Título da página</label>
                    <input type="text" class="form-control" id="titulo" name="titulo">
                </div>

                <div class="col-6">
                    <label for="cor-text" class="form-label">Cor do texto</label>
                    <input type="color" class="form-control" id="cor-text" name="cor-text">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <label for="corpo" class="form-label">Corpo</label>
                    <textarea name="corpo" id="corpo" class="form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <!-- Url da imagem -->
                    <label for="url-imagem" class="form-label">URL imagem</label>
                    <input type="text" class="form-control" id="url-imagem" name="url-imagem">
                </div>
                <div class="col-6">
                    <label for="url-link" class="form-label">URL link</label>
                    <input type="text" class="form-control" id="url-link" name="url-link">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="cor-fundo" class="form-label">Cor do fundo</label>
                    <input type="color" class="form-control" id="cor-fundo" name="cor-fundo">
                </div>
            </div>

            <div class="flex justify-content-end w-full gap-3 mt-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-secondary">Limpar campos</button>
            </div>

        </form>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>