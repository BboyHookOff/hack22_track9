<?php
include"config.php";
$name = $_POST['name'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$guid = $_POST['guid'];
$mysql->query("INSERT INTO `users` (`id`, `name`, `login`, `pass`, `guid`) VALUES (NULL, '$name', '$login', '$pass', '$guid')");
$result = $mysql->query("SELECT * FROM users WHERE login = '$login'");
$row = $result->fetch_assoc();

if ($row == "") {
	setcookie('auth', $login, time() + 3600 * 24 * 30, "/");
	setcookie('name', $name, time() + 3600 * 24 * 30, "/");
	header("Location:http://v845316.hosted-by-vdsina.ru/reg.html");
} 
else{
	echo "Пользователь с таким логин уже зарегистрирован. Попробуйте придумать логин еще раз.";
}
$mysql->close();
?>