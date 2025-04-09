<?php
header('Content-Type: application/json');

$host = 'localhost';
$dbname = 'multimedia_db';
$username = 'root'; // Замените на ваш пользователь MySQL
$password = '';     // Замените на ваш пароль MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['message' => 'Ошибка подключения к базе данных: ' . $e->getMessage()]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $email = $data['email'] ?? '';
    $password = hash('sha256', $data['password'] ?? '');

    $stmt = $pdo->prepare("SELECT role FROM users WHERE email = :email AND password = :password");
    $stmt->execute(['email' => $email, 'password' => $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo json_encode(['message' => 'Вход успешен!', 'role' => $user['role']]);
    } else {
        echo json_encode(['message' => 'Неверный email или пароль!']);
        http_response_code(401);
    }
}
?>