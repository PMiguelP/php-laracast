<?php

declare(strict_types=1);

$userData = [
    'name' => 'Miguel',
    'email' => 'miguel@example.com',
    'password' => 'password',
];

$createUser = [];

function sendWelcomeEmail(): void
{
    echo 'Email sent';
}

function logUser(string $email, string $password): void
{
    echo 'User logged';
}

function registerUser(array $data, array &$userList): void
{
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email';
        return;
    }

    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

    $userList[] = $data;

    logUser($data['email'], $data['password']);
    sendWelcomeEmail();

    header('Location: dashboard.php');
    exit;
}

registerUser($userData, $createUser);