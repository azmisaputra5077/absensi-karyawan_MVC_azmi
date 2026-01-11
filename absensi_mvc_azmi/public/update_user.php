<?php
require_once '../config/database.php';
$config = require '../config/database.php';

try {
    $pdo = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['user'], $config['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Update username and password
    $hashedPassword = password_hash('180726', PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("UPDATE users SET username = 'azmi', password = ? WHERE username = 'admin'");
    $stmt->execute([$hashedPassword]);

    echo "User updated successfully. Username: azmi, Password: 180726";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>