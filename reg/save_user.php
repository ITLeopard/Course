<?php
	if (isset($_POST['login'])) {
		$login = $_POST['login'];
		if ($login == '') {
			unset($login);
		}
	} //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную

	if (isset($_POST['password'])) {
		$password=$_POST['password'];
		if ($password =='') {
			unset($password);
		}
	}
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

    //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
	if (empty($login) or empty($password)){
        exit ("<script>alert('Заполните все поля!'); window.location='reg.php';</script>");
    }

	//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 	$password = stripslashes($password);
    $password = htmlspecialchars($password);

 	//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);

	// подключаемся к базе
    include ("bd.php");

// проверка на существование пользователя с таким же логином

    $result = mysql_query("SELECT id FROM Users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
        exit("<script>alert('Данный логин занят. Для регистрации выберите другой логин'); window.location='reg.php';</script>");
    }

	// если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO Users (login, password) VALUES('$login','$password')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    	echo"<script>alert('Вы успешно зарегистрированы! Теперь вы можете зайти на сайт.'); window.location='index_reg.php';</script>";
    }
 	else {
        echo"<script>alert('Ошибка! Вы не зарегистрированы.'); window.location='reg.php';</script>";
    }
    ?>
