<?php
    session_start();

	//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
	if (isset($_POST['login'])) {
		$login = $_POST['login'];
		if ($login == '') {
			unset($login);
		}
	}

    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) {
		$password=$_POST['password'];
		if ($password =='') {
			unset($password);
		}
	}

	//если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
	if (empty($login) or empty($password))
    {
    	exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

	//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);

	//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);

	// подключаемся к базе
    include ("bd.php");

	//извлекаем из базы все данные о пользователе с введенным логином
	$result = mysql_query("SELECT * FROM Users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    	//если пользователя с введенным логином не существует
    	exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
		if ($myrow['password']==$password) {
			$_SESSION['login']=$myrow['login'];
			$_SESSION['id']=$myrow['id'];
			echo "Вы успешно вошли на сайт! <script>window.locate.assign('../catalog/catalog.php');</script>";
    	}
 		else {
    		exit ("Извините, введённый вами login или пароль неверный.");
		}
    }


    ?>
