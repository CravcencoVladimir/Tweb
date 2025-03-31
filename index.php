<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Буддизм</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Didact+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles1.css">
</head>

<body>
        <button id="theme-toggle">Black Theme</button>
        <script src="./js/script.js"></script>
    <nav>
        <ul class="nav-menu">
            <li><a href="web2.php">Полезные ссылки</a></li>
            <li><a href="web3.php">Больше информации</a></li>
            <li><a href="web4.php">О проекте</a></li>
            <li><a href="web5.php">Интересные факты</a></li>
        </ul>
    </nav>

    <div class="text-box">
        <form action="welcome.php" method="post">
            <label for="email">Введите ваш e-mail:</label>
            <input type="text" id="email" name="email" required>
            <label for="name">Введите ваше Имя:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Отправить</button>
            
        </form>
    </div>
    <h1>Буддизм</h1>

    <div class="text-box">
        <p>Буддизм – это древняя духовная традиция, основанная Сиддхартхой Гаутамой (Буддой) в VI-V веках до н. э.</p>
    </div>

    <h2>Основные направления буддизма</h2>

    <div class="text-box">
        <table>
            <tr>
                <th>Направление</th>
                <th>Описание</th>
            </tr>
            <tr>
                <td>Тхеравада</td>
                <td>Старейшая школа буддизма, ориентированная на монашеский путь.</td>
            </tr>
            <tr>
                <td>Махаяна</td>
                <td>Широкая традиция, включающая множество школ и направлений.</td>
            </tr>
            <tr>
                <td>Ваджраяна</td>
                <td>Тибетский буддизм, включающий тантрические практики.</td>
            </tr>
            <tr>
                <td>Зен-буддизм</td>
                <td>Ответвление махаяны, популярное в Японии, ориентированное на медитацию и спонтанное просветление.
                </td>
            </tr>
            <tr>
                <td>Чань-буддизм</td>
                <td>Китайский предшественник дзен-буддизма, соединяющий медитацию и учение конфуцианства.</td>
            </tr>
            <tr>
                <td>Чистая Земля</td>
                <td>Школа буддизма махаяны, сфокусированная на вере в Будду Амитабху и его рай Чистой Земли.</td>
            </tr>
            <tr>
                <td>Нитирэн-буддизм</td>
                <td>Японская школа, подчеркивающая важность лотосовой сутры и повторение мантры «Наму Мёхо Рэнгэ Кё».
                </td>
            </tr>
            <tr>
                <td>Тибетский буддизм</td>
                <td>Сочетает махаяну и ваджраяну, включая сложные ритуалы, мантры и медитации.</td>
            </tr>
            <tr>
                <td>Йогачара</td>
                <td>Философская школа махаяны, утверждающая, что все явления субъективны и создаются сознанием.</td>
            </tr>
            <tr>
                <td>Мадхьямака</td>
                <td>Философская школа махаяны, основанная Нагарджуной, утверждающая пустотность всех явлений.</td>
            </tr>
        </table>
    </div>

    <img src="photo buddism/buddha.jpg" alt="Будда" class="half-circle-img">

    <map name="buddha-map">
        <area shape="rect" coords="50,50,250,250" href="https://ru.wikipedia.org/wiki/Будда" alt="Будда">
    </map>

</body>

</html>