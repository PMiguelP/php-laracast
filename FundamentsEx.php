<?php

$name = "Miguel";
$age = 22;
$isStudyingPhp = true;

echo $name . $age . $isStudyingPhp;

if ($age >= 18) {
    echo "Es maior de idade";
} else {
    echo "Menor de idade";
}

$favoritesMovies = [
    'The Godfather',
    'The Godfather: Part II',
    'The Dark Knight',
    'Pulp Fiction',
    'The Lord of the Rings: The Return of the King',
];

echo $favoritesMovies[1] . $favoritesMovies[4];

$userInfo = [
    'name' => 'miguel',
    'age' => 15,
    'curse' => 'php'
];

echo $userInfo['name'], $userInfo['age'], $userInfo['curse'];

function verifyAge(int $age): string
{
    if ($age >= 18) {
        return 'Podes votar ';
    } else {
        return 'Ainda nao podes votar';
    }
}

echo verifyAge(15);


$numbers = [1, 2, 3, 4, 5];

$numberFiltered = array_filter($numbers, function ($number) {
    return $number % 2 === 0;
});

$numbersMultiplied = array_map(function ($number) {
    return $number * 2;
}, $numberFiltered);