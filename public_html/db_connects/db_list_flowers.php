<?php
	include"config.php";
	$id_user = $mysql->query("SELECT id FROM users WHERE login = '$_COOKIE[auth]'");
	$id_user_inf = $id_user->fetch_assoc(); //забираем id пользователя
	$result = $mysql->query("SELECT * FROM history WHERE id_user = '$id_user_inf[id]'"); //вытаскиваем данные
	$count = $result->num_rows;
	if ($count == 0) {
		echo "<div><h3>Похоже, у Вас еще нету добавленных растений. Вы можете перейти в 
		<a style=color:blue href=http://v845316.hosted-by-vdsina.ru/catalog.php>каталог.</a></h3></div>";
	}
	else{
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<div class=my-flower-child>
	         <a href=http://v845316.hosted-by-vdsina.ru/flower_steps.php?id=".$row['id']." tabindex=_blank class=my-flower-child>
	            <div class=\"d-flex flex-row align-items-center justify-content-between\">
	               <div class=d-flex flex-row align-items-center>
	                  <img src=".$row['image'].">
	                  <p>".$row['name']."</p>
	               </div>
	               <div>
	                <span>".$row['time_born']."</span>
	                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-caret-down-fill\" viewBox=\"0 0 16 16\">
                  <path d=\"M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z\"/>
               </svg>
               </div>
	            </div>
	         </a>
	      </div>";
	}
		}	
	$mysql->close();
?>