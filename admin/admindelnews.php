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
					<form action="delnews.php" method="POST" enctype="utf-8" class="addnews__form">
						<div class="addnews__area">
							<p>Итендификатор:</p>
							<label for="new__heading" class="addnews__label"></label>
							<input type="text" name="id" class="addnews__input">
						</div>
						<input class="addnews__but" type="submit" value="Удалить новость">
					</form>
				</div>
			</div>
		</main>
		<?php include "footeradmin.php"; ?>
	</div>
</body>

</html>