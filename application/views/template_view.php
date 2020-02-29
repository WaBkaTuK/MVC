
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="../../js/script.js" defer></script>
</head>
<body>

<header>
    <h1>ShMk Storage</h1>
    <h1>Добро пожаловать!</h1>
    <nav>
        <a href="/">Главная</a> |
        <a href="/portfolio">Портфолио</a> |
        <a href="/news">Новости</a> |
        <a href="/contacts">Контакты</a> |
        <a href="/services">Сервисы</a> |
        <?php

        if (empty($_SESSION)) {
            echo '<a href="/login">Войти</a> |' . '<a href="/register">Зарегистрироваться</a>';
        } else if (!empty($_SESSION) && $_SESSION['user']['Status'] == 1) {
            echo '<a href="/admin">Админка</a> |';
            echo ' <a href="profile">' . $_SESSION['user']['User'] . '</a>  |';
            echo ''. '<form class="formBut" method="post"><input type="submit" name="ext" value="Выйти"></form>' . ' ';
        } else if (!empty($_SESSION) && $_SESSION['user']['Status'] == 0) {
            echo ' <a href="profile">' . $_SESSION['user']['User'] . '</a> |';
            echo ' '. '<form class="formBut" method="post"><input type="submit" name="ext" value="Выйти"></form>' . ' ';
        }
        if(isset($_POST['ext'])){
            session_destroy();
        }

        ?>


    </nav>
</header>
<main>
<?php
    include 'application/views/' . $content_view;
?>
</main>
<footer>
    <p>(c) ShMk 2020</p>
</footer>


</body>
</html>
