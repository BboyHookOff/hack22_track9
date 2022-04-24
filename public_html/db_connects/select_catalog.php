<?php
	include"config.php";
	$category = $_GET['category'];
	if ($category == "") {
		$result = $mysql->query("SELECT name, image, id, category FROM catalog");
	}
	else{
		$result = $mysql->query("SELECT name, image, id, category FROM catalog WHERE category = '$category'");
	}
	$count = $result->num_rows;
	if ($count == 0) {
		echo "<div class=\"col-md-12 catalog-element\"><h2>Извините, в данной категории ничего не найдено.</h2></div>";
	}
	else{
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<div class=\"col-md-3 catalog-element\">
				  <h5 class=header-flower>".$row['name']."</h5>
				  <h6 class=header-category>".$row['category']."</h6>
                  <img class=flower-img src=".$row['image']." alt=photo>
                  <button class=btn-flower><a href=/flower.php?id=".$row['id'].">Подробнее</a></button>
               	 </div>";
	}
		}	
	$mysql->close();
?>	

