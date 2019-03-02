<?php
    session_start();

    if ($_GET['exit'] = 1){
        session_unset();
        session_destroy();
    }
?>

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
            <!--?php
                    if (!empty($_SESSION['login']) and !empty($_SESSION['id']))
                        echo"<a class='reg_link' href='exit.php'>Выйти из личного кабинета</a>"
            ?-->
        </div>
        <div class="content">
            <h1>Вход в личный кабинет покупателя</h1>
            <form action="testreg.php" method="post" class="reg_form">
                <p><label>Ваш логин:<br></label><input name="login" type="text" size="30" maxlength="30"></p>
                <p><label>Ваш пароль:<br></label><input name="password" type="password" size="30" maxlength="50"></p>
                <p><input type="submit" name="submit" class="submit" value="Войти"></p>
                <p><br><a href="reg.php">Зарегистрироваться</a></p>
            </form>
        </div>
        <div class="footer">
            &copy; Все права защищены
        </div>
    </div>




    <?php
            // Проверяем, пусты ли переменные логина и id пользователя
            if (empty($_SESSION['login']) or empty($_SESSION['id']))
            {
                    // Если пусты, то мы не выводим ссылку
                    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
            }
            else
            {
                    // Если не пусты, то мы выводим ссылку
                    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='http://tvpavlovsk.sk6.ru/'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
            }

            $exit = 0;
    ?>

    <br><br><br>
    <a href="index_reg.php?exit=1">Выход</a>




</body>

</html>
