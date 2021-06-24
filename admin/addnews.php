<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AdminMyStiePHP</title>
	<link rel="stylesheet" type="text/css" href="css/adminaddnews.css">
</head>
<body>
	<div class="wrapper">
		<?php include "headeradminpanel.php"; ?>
		<div class="addnews">
			<?php
			$head=$_POST['heading'];
			$date=$_POST['date'];
			$author=$_POST['author'];
			$rubric=$_POST['rubric'];
			$prew=$_POST['prew'];
			$news=$_POST['news'];
			$user = 'root';
			$password = 'root';
			$db = 'news_db';
			$host = 'localhost';
			$port = 3306;
			
			$link = mysqli_init();
			$success = mysqli_real_connect(
			$link, 
			$host, 
			$user, 
			$password, 
			$db,
			$port
			);
			if($success){
				echo "Удачно соединились<br>";
			}
			else{
				echo "Не удалось подключиться к базе данных!<br>";
				exit();
			}
			$query="INSERT INTO `news` (date, heading, author, rubric, prew, news) VALUES ('$date', '$head', '$author', '$rubric', '$prew', '$news')";
			$res=mysqli_query($link, $query);
			if($res){
				echo "Новость успешно добавлена<br>";
			}
			else{
				echo "Не вышло добавить<br>";
			}
			mysqli_close($link);
			?>
		</div>
		<?php include "footeradmin.php"; ?>
	</div>
</body>
</html>