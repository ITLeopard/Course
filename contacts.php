<?php
    session_start();
?>

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
            <a href="buscket.php" class="reg_link">
                <?php
                    if($_SESSION['login'] == 'admin')
                        echo"Страница администратора";
                    else echo"Личный кабинет покупателя"
                ?>
            </a>
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
