<html>

<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="icon" href="../img/logo.ico">
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
                        <li><a href="../catalog/catalog.php">Каталог</a></li>
                        <li><a href="../contacts.php">Контакты</a></li>
                        <li><a href="../writeus.php">Обратная связь</a></li>
                    </ul>
                </nav>
            </div>
            <a href="index_reg.php" class="reg_link">Войти в личный кабинет покупателя</a>
        </div>
        <div class="content">
            <h1>Регистрация</h1>
            <form action="save_user.php" method="post" class="reg_form">
                <p><label>Ваш логин:<br></label><input name="login" type="text" size="30" maxlength="30"></p>
                <p><label>Ваш пароль:<br></label><input name="password" type="password" size="30" maxlength="50"></p>
                <p><input type="submit" name="submit" class="submit" value="Зарегистрироваться"></p>
            </form>
        </div>
        <div class="footer">
            &copy; Все права защищены
        </div>
    </div>
</body>

</html>
