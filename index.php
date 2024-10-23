<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    $username = htmlspecialchars($_POST['username']);
    $_SESSION['username'] = $username;
    setcookie('username', $username, time() + 3600);
    header('Location: page1.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Введення імені</title>
</head>
<body>
    <h1>Введіть своє ім'я</h1>
    <form method="POST" action="">
        <label for="username">Ім'я користувача:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Надіслати</button>
    </form>
</body>
</html>
