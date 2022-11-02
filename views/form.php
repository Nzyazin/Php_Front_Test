<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
    <!-- Боковая панель -->
        <div class="menu">
        <nav class="dws-menu">   
            <div class="board">
                <a href="#board">Дашборд<div class="triangle-right"></div></a>
            </div>
            <div class="orders">
                <a href="#orders">Мои заказы<div class="triangle-right"></div></a>
            </div>
            <div class="progs">
                <a href="form3.php">Мои программы<div class="triangle-right"></div></a>
            </div>
            <div class="center">
                <a href="#center">Учебный центр<div class="triangle-right"></div></a>
            </div>
            <div class="token">
                <a href="#token">Запрос токена<div class="triangle-right"></div></a>
            </div>
            <div class="serv">
                <a href="#serv">Техподдержка<div class="triangle-right"></div></a>
            </div>
        </nav>
        </div>
        
        <div class="content">
            <h1 class="title">Дашборд</h1>
            <h2><?=$form['title']?></h2>
            <em>Опубликовано: <?=$form['date']?></em>
            <p><?=$form['content']?></p>
        </div>
        
    </div>    
</body>
</html>