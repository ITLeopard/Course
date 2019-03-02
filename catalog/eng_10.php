<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>English</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="icon" href="../img/logo.ico" type="image/x-icon">
	<script>
        function Buy(){
            <?php
            // подключаемся к базе
            include ("bd.php");
            alert("One");

            //выполняем запрос на добавление данных в БД
            if(!mysql_query("INSERT INTO Buscket(idUser, name) VALUES (".$_SESSION['id'].", 'Учебник по английскому языку Enjoy English. 10 класс')",$db))
                die(mysql_error());

            alert('Книга добавлена в корзину');
            ?>
        }
    </script>
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
            <a href="../reg/index_reg.php" class="reg_link">Личный кабинет покупателя</a>
        </div>
        <div class="content">
            <h1>Учебник по английскому языку Enjoy English. 10 класс</h1>
            <a href="../img/eng_10.jpg" target="_block"><img class="bookimg" src="../img/eng_10.jpg" hspace="5px"></a>
            <h2>Описание товара</h2>
            <p class="short">Учебник по английскому языку
                <br>
                <button class="buy" onclick="Buy()">Купить</button>

                <h2 style="clear: both">Характеристики товара</h2>
                <table class="table">
                    <tr>
                        <td>Авторы</td>
                        <td>Номер издания</td>
                        <td>Количество страниц</td>
                        <td>Стоимость</td>
                    </tr>
                    <tr>
                        <td>М.З. Биболетова</td>
                        <td rowspan="3">Издание 2-ое, исправленное</td>
                        <td rowspan="3">214</td>
                        <td rowspan="3">710 р.</td>
                    </tr>
                    <tr>
                        <td>Е.Е. Бабушис</td>
                    </tr>
                    <tr>
                        <td>Н.Д. Снежко</td>
                    </tr>
                </table>

                <h2>Подробное описание товара</h2>
                <p> Учебник для 10 класса общеобразовательных учреждений. Рекомендовано Министерством образования и науки РФ к использованию в образовательном процессе в образовательных учреждениях, реализующих образовательные программы общего образования.
                    <br> </p>
        </div>
        <div class="footer"> &copy; Все права защищены </div>
    </div>
</body>

</html>
