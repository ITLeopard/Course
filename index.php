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
                    <a href="index.html"> <img src="img/logo.jpg" alt="BS" hspace="5px"> BookShop </a>
		</section>
		<!--a href="../index.html"><img src="../img/logo.jpg" alt="logo" hspace="5px"></a-->
                <nav class="menu">
                        <ul>
                                <li><a href="index.html">Главная</a></li>
                                <li><a href="catalog/catalog.html">Каталог</a></li>
                                <li><a href="contacts.html">Контакты</a></li>
                                <li><a href="writeus.html">Обратная связь</a></li>
                        </ul>
                </nav>
            </div>
            <?php
                    if (!empty($_SESSION['login']) and !empty($_SESSION['id']))
                    {
                        echo"<a class='reg_link' href='exit.php'>Выйти из личного кабинета</a>";
                    }
                    else
                    {
                        echo"<a class='reg_link' href='../reg/index_reg.php'>Войти в личный кабинет покупателя</a>";
                    }
            ?>
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
