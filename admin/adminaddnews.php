<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: admin.php');
?>
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
		<main class="addnews">
			<div class="conteiner">
				<div class="addnews__wrap">
					<p>Введите следующие поля</p>
					<form action="addnews.php" method="POST" enctype="utf-8" class="addnews__form">
						<div class="addnews__area">
							<p>Заголовок:</p>
							<label for="new__heading" class="addnews__label"></label>
							<input type="text" name="heading" class="addnews__input">
						</div>
						<div class="addnews__area">
							<p>Дата:</p>
							<label for="new__heading" class="addnews__label"></label>
							<input type="date" name="date" class="addnews__input">
						</div>
						<div class="addnews__area">
							<p>Автор:</p>
							<label for="new__heading" class="addnews__label"></label>
							<input type="text" name="author" class="addnews__input">
						</div>
						<div class="addnews__area">
							<p>Рубрика:</p>
							<label for="new__heading" class="addnews__label"></label>
							<input type="text" name="rubric" class="addnews__input">
						</div>
						<div class="addnews__area">
							<p>Анонс:</p>
							<label for="new__heading" class="addnews__label"></label>
							<input type="text" name="prew" class="addnews__input">
						</div>
						<div class="addnews__area">
							<p>Текст:</p>
							<label for="new__heading" class="addnews__label"></label>
							<textarea type="text" name="news" class="addnews__textarea"></textarea>
						</div>
						<input class="addnews__but" type="submit" value="Добавить новость">
					</form>
				</div>
			</div>
		</main>
		<?php include "footeradmin.php"; ?>
	</div>
</body>

</html>