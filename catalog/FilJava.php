<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Философия Java</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="icon" href="../img/logo.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="header">
            <div>
                <section class="logo" title="BS">
                    <a href="../index.php"> <img src="../img/logo.jpg" alt="BS" hspace="5px"> BookShop </a>
                </section>
                <nav class="menu">
                    <ul>
                        <li><a href="../index.php">Главная</a></li>
                        <li><a href="catalog.php">Каталог</a></li>
                        <li><a href="../contacts.php">Контакты</a></li>
                        <li><a href="../writeus.php">Обратная связь</a></li>
                    </ul>
                </nav>
            </div>
            <a href="../buscket.php" class="reg_link">
                <?php
                    if($_SESSION['login'] == 'admin')
                        echo"Страница администратора";
                    else echo"Личный кабинет покупателя"
                ?>
            </a>
        </div>
        <div class="content">
            <h1>Философия Java</h1>
            <a href="../img/FilJava.jpg" target="_block"><img class="bookimg" src="../img/FilJava.jpg" hspace="5px"></a>
            <h2>Описание товара</h2>
            <p>В этой книге рассмотрены самые важные аспекты языка программирования Java. Благодаря простоте изложения она может подойти как читателям, уже знакомым с программированием, так и начинающим программистам.</p>
            <button class="buy">Купить</button>

            <h2 style="clear: both">Характеристики товара</h2>
            <table class="table">
                <tr>
                    <td>Авторы</td>
                    <td>Номер издания</td>
                    <td>Количество страниц</td>
                    <td>Стоимость</td>
                </tr>
                <tr>
                    <td>Брюс Эккель</td>
                    <td>Издание 4-ое</td>
                    <td>1168</td>
                    <td>1990 р.</td>
                </tr>
            </table>

            <h2>Подробное описание товара</h2>
            <p> Впервые читатель может познакомиться с полной версией этого классического труда, который ранее на русском языке печатался в сокращении. Книга, выдержавшая в оригинале не одно переиздание, за глубокое и поистине философское изложение тонкостей языка Java считается одним из лучших пособий для программистов. Чтобы по-настоящему понять язык Java, необходимо рассматривать его не просто как набор неких команд и операторов, а понять его "философию", подход к решению задач, в сравнении с таковыми в других языках программирования. На этих страницах автор рассказывает об основных проблемах написания кода: в чем их природа и какой подход использует Java в их разрешении. Поэтому обсуждаемые в каждой главе черты языка неразрывно связаны с тем, как они используются для решения определенных задач.
                <br> </p>
        </div>
        <div class="footer"> &copy; Все права защищены </div>
    </div>
</body>

</html>
