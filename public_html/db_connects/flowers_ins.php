<?php
include"config.php";
$name = $_POST['name'];
$inf = $_POST['inf'];
$category = $_POST['category'];
$climate = $_POST['climate'];
$light = $_POST['light'];
$water = $_POST['water'];
$fertilize = $_POST['fertilize'];
$image = $_POST['image'];
$time_water = $_POST['time_water'];
$season = $_POST['season'];
$step_1 = $_POST['step_1'] * 3600 * 24;
$step_2 = $_POST['step_2'] * 3600 * 24;
$step_3 = $_POST['step_3'] * 3600 * 24;
$step_4 = $_POST['step_4'] * 3600 * 24;

$mysql->query("INSERT INTO `catalog` (`id`, `name`, `inf`, `category`, `climate`, `light`, `water`, `fertilize`, `image`, `time_water`, `season`, `step_1`, `step_2`, `step_3`, `step_4`) VALUES (NULL, '$name', '$inf', '$category', '$climate', '$light', '$water', '$fertilize',
	 '$image', '$time_water', '$season', '$step_1', '$step_2', '$step_3', '$step_4')");
$mysql->close();
?>
