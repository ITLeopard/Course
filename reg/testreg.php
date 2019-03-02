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
    	exit ("<script>alert('Заполните все поля!'); window.location='index_reg.php';</script>");
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
        exit ("<script>alert('Неверный логин или пароль'); window.location='index_reg.php';</script>");
    }
    else {
		if ($myrow['password']==$password) {
			$_SESSION['login']=$myrow['login'];
			$_SESSION['id']=$myrow['id'];
			echo "<script>alert('Вы успешно вошли на сайт!'); window.location='index_reg.php';</script>";
    	}
 		else {
            exit ("<script>alert('Неверный логин или пароль'); window.location='index_reg.php';</script>");
		}
    }


    ?>
