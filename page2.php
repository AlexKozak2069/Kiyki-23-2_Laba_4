<?php
session_start();

$session_val = isset($_SESSION['user_name_session']) ? $_SESSION['user_name_session'] : "Дані в сесії відсутні";
$cookie_val = isset($_COOKIE['user_name_cookie']) ? $_COOKIE['user_name_cookie'] : "Дані в куках відсутні";
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Сторінка 2</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .result-box { margin-bottom: 20px; padding: 15px; border-radius: 5px; color: white;}
        .session-box { background-color: #007bff; }
        .cookie-box { background-color: #17a2b8; }
        a { display: inline-block; margin-top: 20px; text-decoration: none; color: #333; border: 1px solid #333; padding: 5px 10px;}
    </style>
</head>
<body>

    <h1>Результати збереження</h1>

    <div class="result-box session-box">
        <h3>Змінна SESSION:</h3>
        <p>Привіт, <strong><?php echo $session_val; ?></strong>!</p>
        <small>Зберігається на сервері. Зникне після закриття браузера (за замовчуванням).</small>
    </div>

    <div class="result-box cookie-box">
        <h3>Змінна COOKIE:</h3>
        <p>Привіт, <strong><?php echo $cookie_val; ?></strong>!</p>
        <small>Зберігається у вашому браузері. Зникне через 1 годину.</small>
    </div>

    <hr>
    <a href="index.php">Повернутися на головну</a>
    <a href="logout.php" style="color: red; border-color: red;">Очистити дані (Вихід)</a>

</body>
</html>