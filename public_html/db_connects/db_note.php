<?php
include"config.php";
$name = $_POST['name'];
$id_history = $_POST['id_history'];
$image = $_POST['image'];
$id_user = $_POST['id_user'];
$step = $_POST['step'];
$login = $_POST['image'];
$inf = $_POST['inf'];

$mysql->query("INSERT INTO `notes` (`id`, `id_user`, `id_history`, `step`, `name`, `inf`, `image`)
 VALUES (NULL, '$id_user', '$id_history', '$step', '$name', '$inf', '$image')");
$mysql->close();
header('Location:http://v845316.hosted-by-vdsina.ru/flower_steps.php?id='.$id_history);
?>