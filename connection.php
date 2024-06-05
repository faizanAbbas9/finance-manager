<?php

$dsn = 'mysql:host=127.0.0.1;dbname=expenseman';
$user = 'root'; // Adjust the username if needed
$pass = '';
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Connection Error! " . $e->getMessage();
}
