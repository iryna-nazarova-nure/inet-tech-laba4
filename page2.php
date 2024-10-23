<?php
session_start();

$username = $_SESSION['username'] ?? $_COOKIE['username'] ?? 'Гість';
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Сторінка 2</title>
</head>
<body>
    <h1>Ласкаво просимо, <?= htmlspecialchars($username) ?>!</h1>
    <p>Це сторінка 2. Поверніться на <a href="page1.php">Сторінку 1</a>.</p>
</body>
</html>
