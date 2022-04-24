<?php
	setcookie('auth', $login, time() - 3600 * 24 * 30, "/");
	setcookie('name', $name, time() - 3600 * 24 * 30, "/");
	header('Location:/');
 ?>