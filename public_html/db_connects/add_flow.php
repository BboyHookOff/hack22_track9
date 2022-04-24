<?php
	$d = getdate(); // использовано текущее время
	//foreach ( $d as $key => $val ) echo "$key = $val<br>";
	//echo "<hr>Сегодня: $d[0].$d[mon].$d[year]";
	$id_flow = $_POST['id'];
	include"config.php";
	$inf_flow = $mysql->query("SELECT name, time_water, image FROM catalog WHERE id = '$id_flow'");
	$id_user = $mysql->query("SELECT id FROM users WHERE login = '$_COOKIE[auth]'");
	$id_user_inf = $id_user->fetch_assoc();
	$inf_flow_result = $inf_flow->fetch_assoc();

	$mysql->query("INSERT INTO `history` (`id`, `id_user`,`id_flow`, `name`, `image`, `time_born`, `date`, `time_water`, `step`)
	 VALUES (NULL, '$id_user_inf[id]', '$id_flow', '$inf_flow_result[name]', '$inf_flow_result[image]', CURRENT_DATE(), '$d[0]', '$inf_flow_result[time_water]', '1')");
	$mysql->close();
	$url = 'http://v845316.hosted-by-vdsina.ru/flower.php?id='.$id_flow;
	header('Location:'.$url);
?>	