<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));

    if (!empty($username)) {
        $_SESSION['user_name_session'] = $username;

        setcookie("user_name_cookie", $username, time() + 3600, "/");

        header("Location: page2.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Лабораторна 4 - Варіант 7</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .form-container { max-width: 300px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        input { width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; cursor: pointer; }
        button:hover { background: #218838; }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Введіть ваше ім'я</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Ваше ім'я" required>
        <button type="submit">Запам'ятати мене</button>
    </form>
</div>

</body>
</html>