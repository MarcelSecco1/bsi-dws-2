<?php
$animals = [
    'leao' => [
        'name' => 'Leao',
        'image' => 'https://images.unsplash.com/photo-1546182990-dffeafbe841d?auto=format&fit=crop&w=900&q=80',
        'paragraphs' => [
            'O leao e um felino de grande porte encontrado principalmente na Africa. Ele vive em grupos chamados de alcateias, algo incomum entre os grandes gatos, e apresenta forte organizacao social.',
            'Esse animal e conhecido por sua forca e comportamento territorial. Em seu habitat natural, tem papel essencial no equilibrio ecologico ao atuar como predador de topo na cadeia alimentar.'
        ]
    ],
    'elefante' => [
        'name' => 'Elefante',
        'image' => 'https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?auto=format&fit=crop&w=900&q=80',
        'paragraphs' => [
            'O elefante e um dos maiores mamiferos terrestres e se destaca por sua inteligencia, memoria e forte vinculo social. Vive em grupos liderados por femeas mais experientes.',
            'Sua tromba e uma estrutura extremamente versatil, usada para respirar, pegar objetos, beber agua e se comunicar. A especie tambem e importante para a dispersao de sementes em varios ecossistemas.'
        ]
    ],
    'lobo' => [
        'name' => 'Lobo',
        'image' => 'https://images.unsplash.com/photo-1474511320723-9a56873867b5?auto=format&fit=crop&w=900&q=80',
        'paragraphs' => [
            'O lobo e um canideo que vive em matilhas e possui comportamento cooperativo para cacar e proteger o grupo. A comunicacao ocorre por uivos, linguagem corporal e marcas de territorio.',
            'Como predador, o lobo contribui para o controle de populacoes de herbivoros, ajudando a manter o equilibrio ambiental. Sua adaptabilidade permite presenca em diferentes tipos de clima.'
        ]
    ],
    'pinguim' => [
        'name' => 'Pinguim',
        'image' => 'https://images.unsplash.com/photo-1551986782-d0169b3f8fa7?auto=format&fit=crop&w=900&q=80',
        'paragraphs' => [
            'O pinguim e uma ave marinha que nao voa, mas possui excelente habilidade para nadar. Suas asas evoluiram para nadadeiras, facilitando deslocamento rapido na agua.',
            'Muitas especies vivem em regioes frias do hemisferio sul e apresentam comportamento social marcante, formando colonias numerosas. A alimentacao inclui peixes, krill e pequenos crustaceos.'
        ]
    ]
];

$selectedKey = $_GET['animal'] ?? '';
$selectedAnimal = $animals[$selectedKey] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex04 - Galeria de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .animal-card img {
            height: 220px;
            object-fit: cover;
        }

        .animal-link {
            border: 3px solid transparent;
            border-radius: 0.75rem;
            display: block;
            transition: border-color 0.2s ease, transform 0.2s ease;
        }

        .animal-link:hover {
            transform: translateY(-2px);
        }

        .animal-link.selected {
            border-color: #dc3545;
        }
    </style>
</head>

<body class="bg-light">
    <main class="container py-4">
        <h1 class="mb-4">Escolha um animal</h1>

        <div class="row g-3">
            <?php foreach ($animals as $key => $animal): ?>
            <?php $isSelected = $key === $selectedKey; ?>
            <div class="col-12 col-sm-6 col-lg-3">
                <a class="animal-link <?= $isSelected ? 'selected' : '' ?>" href="?animal=<?= urlencode($key) ?>">
                    <div class="card animal-card h-100 shadow-sm">
                        <img src="<?= htmlspecialchars($animal['image']) ?>" class="card-img-top"
                            alt="<?= htmlspecialchars($animal['name']) ?>">
                        <div class="card-body">
                            <h2 class="h5 mb-0 text-center"><?= htmlspecialchars($animal['name']) ?></h2>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if ($selectedAnimal): ?>
        <section class="mt-4 p-4 bg-white border rounded shadow-sm">
            <h2 class="mb-3">Animal selecionado: <?= htmlspecialchars($selectedAnimal['name']) ?></h2>
            <?php foreach ($selectedAnimal['paragraphs'] as $paragraph): ?>
            <p><?= htmlspecialchars($paragraph) ?></p>
            <?php endforeach; ?>

            <a href="index.php" class="btn btn-outline-secondary mt-2">Limpar tudo</a>
        </section>
        <?php endif; ?>
    </main>
</body>

</html>
