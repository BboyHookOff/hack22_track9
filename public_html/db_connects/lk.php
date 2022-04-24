<?php
	include"config.php";
	$user = $mysql->query("SELECT * FROM users WHERE login = '$_COOKIE[auth]'");
	$row = $user->fetch_assoc();
	$mysql->close();
?>