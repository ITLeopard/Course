<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
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
                        echo"<a class='reg_link' href='exit.php'>Выйти из личного кабинета</a>";
                else echo"<a class='reg_link' href='../reg/index_reg.php'>Войти в личный кабинет покупателя</a>";
            ?>
        </div>
        <div class="content">
            <h1>Контакты</h1>
            <p style="text-align: center;">
                Адрес: СПб, ул. Бассейная, 44<br>
                Контактные телефоны: 400-00-00, 8-981-000-00-00<br>
                E-mail: bookshop@gmail.com<br>
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2003.077114918516!2d30.323142916093953!3d59.864465681849275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963aaf3663f67d%3A0xd47a70fe20a1647a!2z0JHQsNGB0YHQtdC50L3QsNGPINGD0LsuLCA0NCwg0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsIDE5NjA3MA!5e0!3m2!1sru!2sru!4v1515756414294" width="100%" height="374" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
        <div class="footer">
            &copy; Все права защищены
        </div>
    </div>
</body>
</html>
