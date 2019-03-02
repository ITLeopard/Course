<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/logo.ico">
</head>

<body>
    <div class="container">
        <div class="header">
            <div>
                <section class="logo" title="BS">
                    <a href="index.php"> <img src="img/logo.jpg" alt="BS" hspace="5px"> BookShop </a>
                </section>
                <nav class="menu">
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="catalog/catalog.php">Каталог</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                        <li><a href="writeus.php">Обратная связь</a></li>
                    </ul>
                </nav>
            </div>
            <a href="buscket.php" class="reg_link">Личный кабинет покупателя</a>
        </div>
        <div class="content">
            <h1>Добро пожаловать!</h1>
            <p>В нашем интернет-магазине Вы можете приобрести книгу на любой вкус.</p>
        </div>
        <div class="footer">
            &copy; Все права защищены
        </div>
    </div>
</body>

</html>
