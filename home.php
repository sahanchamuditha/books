<?php
require 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$stmt = $pdo->query('SELECT * FROM books');
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <h2>Welcome, <?= htmlspecialchars($_SESSION['name']) ?></h2>
        <a href="logout.php" class="logout-btn">Logout</a>

        <h3>Available Books</h3>
        <ul>
            <?php foreach ($books as $book): ?>
            <li><?= htmlspecialchars($book['name']) ?> - <?= htmlspecialchars($book['author']) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>