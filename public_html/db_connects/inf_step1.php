<?php
	include"config.php";
	$id_user = $mysql->query("SELECT id FROM users WHERE login = '$_COOKIE[auth]'");
	$id_user_inf = $id_user->fetch_assoc(); //забираем id пользователя
	$result = $mysql->query("SELECT * FROM notes WHERE id_user = '$row_history[id_user]' AND id_history = '$_GET[id]' AND step = 1"); //вытаскиваем данные
	$count = $result->num_rows;
	if ($count == 0) {
		echo "<div>Похоже, никаких заметок по данному этапу Вы не оставляли.</div>";
	}
	else{
		while ($row = mysqli_fetch_assoc($result)) {
			echo "
			<div class=step-note-name>".$row['name']."</div>
			<div class=step-note-image><img src=".$row['image']."></div> 
			<div class=step-note-inf>".$row['inf']."</div> <br/><br/> 
			";
	}
		}	
	$mysql->close();
?>