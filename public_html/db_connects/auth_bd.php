<?php
include"config.php";
$login = $_POST['login'];
$pass = $_POST['pass'];
$result = $mysql->query("SELECT * FROM users WHERE login = '$login' AND pass = '$pass'");
$row = $result->fetch_assoc();
$count = $result->num_rows;

$mysql->close();
if ($count == 0) {
	echo "Пользователь не найден";
} 
else{
	 $name = $row['name'];
	 setcookie('auth', $login, time() + 3600 * 24 * 30, "/");
	 setcookie('name', $name, time() + 3600 * 24 * 30, "/");
	 echo $_COOKIE['name'];
	 header("Location:/");
}
?>