<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа 2.1</title>
    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(30, 30, 30);
            border-radius: 20px;
            margin: 5px;
            padding: 5px 10px;
        }

        img {
            flex-shrink: 0;
        }

        a {
            max-width: 100px;
            padding: 10px;
            border: black solid 2px;
            border-radius: 20px;
            font-size: x-large;
            background-color: #eee;
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: #eee;
            background-color: black;
        }

        footer {
            box-sizing: border-box;
            padding: 15px;
            height: 50px;
            background-color: rgb(30, 30, 30);
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #333;
            color: #eee;
            font-family: sans-serif;
            margin: 0;
            min-height: 100vh;
            text-align: center;

        }
    </style>
</head>

<body>
    <header>
        <img src="./images/wpolylogo.png" alt="logo">
        <h1>Лабораторная работа 2.1</h1>
        <a href="index.php">Главная</a>
    </header>
    <main>
        <?php
        echo date("d.m.Y H:i:s");
        ?>
    </main>
    <footer>
        Сделано Кошелевым Егором из группы 221-323 для предмета Основы серверной веб-разработки
    </footer>
</body>

</html>