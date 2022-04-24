<?php
 	include"config.php";
 	$d = getdate();
 	$id_history = $_GET['id'];
 	$result = $mysql->query("SELECT * FROM history WHERE id = '$id_history'");
 	$row_history = $result->fetch_assoc(); 
 	$steps = $mysql->query("SELECT step_1, step_2, step_3, step_4 FROM catalog WHERE id = '$row_history[id_flow]'");
 	$steps_fetch = $steps->fetch_assoc();
 	$time_period = $d['0'] - $row_history['date'];

	if ($time_period > $steps_fetch['step_1'] || $time_period > $steps_fetch['step_2']
	 || $time_period > $steps_fetch['step_3'] || $time_period > $steps_fetch['step_4']) {
	 	if ($row_history['step'] < 4) {
	 		$new_step = $row_history['step'] + 1;
	 		$mysql->query("UPDATE history SET step = '$new_step' WHERE id = '$_GET[id]'"); //перевести на новый этап
	 	}
	}
 	if ($time_period < $row_history['time_water']) { //если время полива еще не наступило:
 		$time_water = $row_history['time_water'] - ($d['0'] - $row_history['date']);
 		$time_water_hour = intval($time_water / 3600);
 		//echo "Следующий полив будет через: ".$time_water_hour." часов"; 
 	}
 	else{
 		if ($row_history['step'] != 4) {
 			$step = $row_history['step'] + 1;
 			$new_time_water = $row_history['time_water'] * 2; 
 			//$mysql->query("UPDATE history SET step = '$step' WHERE id = '$_GET[id]'");
 			$mysql->query("UPDATE history SET time_water = '$new_time_water' WHERE id = '$_GET[id]'");
 		}
 	}
 	// if($result_1_fetch->num_rows == 0 || $result_2_fetch->num_rows == 0 ||
 	//  $result_3_fetch->num_rows == 0 || $result_4_fetch->num_rows == 0){
 	// 	echo "<div>Похоже, никаких заметок по данному этапу Вы не оставляли.</div>";
 	// }
 	$mysql->close();
?>