<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h3>Вход на сайт</h3>
<form method ="POST">
Имя:<input type="text" name="login" /><br><br>
Фамилия:<input type="text" name="password" /><br><br>
Отчество:<input type="text" name="otchectvo" /><br><br>
Место работы:<input type="text" name="mecto" /><br><br>
Телефон:<input type="text" name="tel" /><br><br>
E-mail:<input type="text" name="mail" /><br> <br>
<input type="submit" value="Отправить">
</form>
</body>
</html>
<?php
if(isset($_POST['login']) && isset ($_POST['password'])){
	$login=$_POST['login'];
	$password = $_POST ['password'];
	$otchectvo=$_POST['otchectvo'];
	$mecto = $_POST ['mecto'];
	$tel=$_POST['tel'];
	$mail = $_POST ['mail'];
	echo "Имя: $login <br> Фамилия: $password <br> Отчество $otchectvo  <br> Место работы: $mestoraboty <br> Телефон: $phone <br> E-mail: $email";
}
?>