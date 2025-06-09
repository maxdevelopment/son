<html lang="EN">
<?php
$dsn = 'mysql:host=db;dbname=my_database;charset=utf8mb4';
$user = 'root';
$password = 'password';

try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo "Connected successfully using PDO with mysqlnd";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
</html>
