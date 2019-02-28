<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
    session_start();
?>
	<html>

	<head>
		<title>Главная страница</title>
	</head>

	<body>
		<h2>Главная страница</h2>
		<form action="testreg.php" method="post">
			<p>
				<label>Ваш логин:<br></label>
				<input name="login" type="text" size="15" maxlength="15">
			</p>
			<p>
				<label>Ваш пароль:<br></label>
				<input name="password" type="password" size="15" maxlength="15">
			</p>
			<p>
				<input type="submit" name="submit" value="Войти">
				<br>
				<a href="reg.php">Зарегистрироваться</a>
			</p>
		</form>
		<br>


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
    ?>

		<a href="index.php">Выход</a>
   <?php
		session_unset();
		session_destroy();
	?>


	</body>

	</html>
