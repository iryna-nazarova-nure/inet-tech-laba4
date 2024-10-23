<?php
session_start();

$username = $_SESSION['username'] ?? $_COOKIE['username'] ?? 'Гість';
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Сторінка 1</title>
</head>
<body>
    <h1>Ласкаво просимо, <?= htmlspecialchars($username) ?>!</h1>
    <p>Це сторінка 1. Перейдіть на <a href="page2.php">Сторінку 2</a>.</p>
</body>
</html>
