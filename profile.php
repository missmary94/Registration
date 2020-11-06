<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <h2 style="margin: 20px 0;">Hello, <?= $_SESSION['user']['full_name'] ?>!</h2>
        <button type="submit" class="login-btn"><a href="vendor/logout.php" class="logout">Выход</a></button>
        
    </form>

</body>
</html>