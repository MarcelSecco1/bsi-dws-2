<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Praticando 4 - Gerador de tabela</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>
</head>

<body class='bg-light'>
    <header class='container mt-4'>
        <h1>Praticando 4 - Gerador de tabela</h1>
        <hr>
    </header>

    <main class='container'>
        <form action='./destino-post.php' method='post'>
            <div class='mb-3'>
                <label for='linhas' class='form-label'>Linhas</label>
                <input type='number' class='form-control' id='linhas' name='linhas' min='1' required>
            </div>

            <div class='mb-3'>
                <label for='colunas' class='form-label'>Colunas</label>
                <input type='number' class='form-control' id='colunas' name='colunas' min='1' required>
            </div>

            <div class='mb-3'>
                <label for='estilo' class='form-label'>Estilo</label>
                <select id='estilo' name='estilo' class='form-select'>
                    <option value='table-primary'>Azul</option>
                    <option value='table-success'>Verde</option>
                    <option value='table-warning'>Amarelo</option>
                    <option value='table-danger'>Vermelho</option>
                    <option value='table-secondary'>Cinza</option>
                </select>
            </div>

            <div class='d-flex gap-2'>
                <button type='submit' class='btn btn-primary'>Gerar tabela</button>
                <button type='reset' class='btn btn-secondary'>Limpar</button>
            </div>
        </form>

        <a href='../index.php' class='btn btn-link mt-3 ps-0'>Voltar</a>
    </main>
</body>

</html>
