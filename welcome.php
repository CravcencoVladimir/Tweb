<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    echo "<h1>Добрый день, $name добро пожаловать на сайт о буддизме!</h1>";
} else {
    echo "<h1>Ошибка: данные не были отправлены.</h1>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["email"]);
    echo "<h1>На вашу почту, $name отправлено приглашение на сайт о буддизме!</h1>";
} else {
    echo "<h1>Ошибка: данные не были отправлены.</h1>";
}
?>