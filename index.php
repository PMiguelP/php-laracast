<?php

declare(strict_types=1);

$books = [
    [
        'name' => 'PHP',
        'author' => 'miguel Pereira',
        'releasedYear' => 100,
        'purchaseUrl' => 'http://www.php.net'
    ],
    [
        'name' => 'Livro de Programacao de melhores praticas do nuno maduro',
        'author' => 'nuno maduro',
        'releasedYear' => 102,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Php a melhor linguagem de programaca',
        'author' => 'nuno maduro',
        'releasedYear' => 103,
        'purchaseUrl' => 'http://www.php.net'
    ]
];

$filteredBooksByAuthor = array_filter($books, function ($book) {
    return $book['author'] === 'nuno maduro';
});

require "index.view.php";
