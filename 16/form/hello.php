<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>home work 3</title>
  <link rel="stylesheet" href="style.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <body>
	<div class="wrapper">
	<?php

		$name = $_POST["name"];
		$surname = $_POST["surname"];
		$sex = $_POST["sex"];
		$years_old = $_POST["years-old"];	
		$e_mail = $_POST["e-mail"];
			if ($sex == "female") {
				echo "<h1>Госпожа, " . $name ." ". $surname . ", Ваши данные приняты</h1>";
			} else {
				echo "<h1>Господин, " . $name ." ". $surname . ", Ваши данные приняты</h1>";
			}
			if (!empty($years_old)) {
				if ($years_old > 18) {
					echo "<h2>Добро пожаловать!<h2>" ;
				} else {
					echo "<h2>Извините, возрастные ограничения!<h2>";
				}
			}	else {
				echo "<h2>Введите возраст!<h2>";
			}
			if (!empty($e_mail)) {
				echo "<h3>На Вашу электронную почту " . $e_mail . " было отправлено письмо!<h3>";
			} else {
				echo "<h3>Введите электронную почту!<h3>";
			}

		$img = $_FILES["image"]["name"];
		$path = str_replace('\\', '/', __DIR__);
     	move_uploaded_file($_FILES["image"]["tmp_name"], $path . "/" . $_FILES["image"]["name"]);
		echo 'Ваша картинка:</br>' ; 
      	echo '<img src="' . $img . '"  />' ; 



	?>
</div>
</body>
</html>