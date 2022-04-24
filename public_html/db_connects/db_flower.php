<?php
	include"config.php";
	$id_flower = $_GET['id'];
	$result = $mysql->query("SELECT * FROM catalog WHERE id = '$id_flower'");
	$result_inf = $result->fetch_assoc();
	$mysql->close();
?>