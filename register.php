<?php
header('Content-Type: application/json');

// Подключение к базе данных
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
    $password = $data['password'] ?? '';

    if (empty($email) || empty($password)) {
        echo json_encode(['message' => 'Заполните все поля!']);
        http_response_code(400);
        exit;
    }

    // Хеширование пароля
    $hashed_password = hash('sha256', $password);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (email, password, role) VALUES (:email, :password, 'user')");
        $stmt->execute(['email' => $email, 'password' => $hashed_password]);
        echo json_encode(['message' => 'Регистрация успешна!']);
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) { // Дубликат email
            echo json_encode(['message' => 'Email уже зарегистрирован!']);
            http_response_code(400);
        } else {
            echo json_encode(['message' => 'Ошибка: ' . $e->getMessage()]);
            http_response_code(500);
        }
    }
}
?>