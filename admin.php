<?php
    session_start();

    if ($_GET['exit'] == 1){
        session_unset();
        session_destroy();
    }

    if ( empty($_SESSION['login']) or empty($_SESSION['id']) ){
        echo"<script>window.location = 'reg/index_reg.php'</script>";
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
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
            <a href="reg/index_reg.php?exit=1" class="reg_link">Выход</a>
        </div>
        <div class="content">
            <h1>
                Администратор, добро пожаловать!
            </h1>
            <h2>Список всех зарегистрированных покупателей</h2>

            <table border="1" cellspacing="0" style="border-color: #f0f0f0">
                <tr>
                    <th>Id</th>
                    <th>Имя пользователя</th>
                    <th>Пароль</th>
                </tr>
                <?php
                    include ("reg/bd.php");

                    $result = mysql_query("SELECT * FROM Users", $db);
                    $rows = mysql_num_rows($result);

                    for ($i = 0 ; $i < $rows ; ++$i)
                    {
                        $row = mysql_fetch_row($result);
                        echo "<tr>";
                            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
                        echo "</tr>";
                    }
                ?>
            </table>

        </div>
        <div class="footer">
            &copy; Все права защищены
        </div>
    </div>
</body>

</html>
