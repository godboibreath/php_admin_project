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
	<link rel="stylesheet" type="text/css" href="css/adminnewsedit.css">
</head>

<body>
	<?php include "headeradminpanel.php"; ?>
	<main class="editor">
		<div class="conteiner">
			<div class="editor__block">
				<a href="adminaddnews.php" class="editor__button">Добавление новости</a>
				<a href="admindelnews.php" class="editor__button">Удаление новости</a>
			</div>
		</div>
	</main>
	<?php include "footeradmin.php"; ?>
</body>

</html>