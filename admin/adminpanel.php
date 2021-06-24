<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: admin.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>AdminMySitePHP</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/adminpanel.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="wrapper">
	<?php include "headeradminpanel.php"; ?>
	<main class="content">
			<div class="conteiner">
				<div class="content__block">
					<div class="content__row">
						<h1 class="content__title">
							Добро пожаловать в администрирование
						</h1>
						<div class="content__column">
							<p class="content__item">
								Кнопка "Сайт" переход на главную страницу.
							</p>
							<p class="content__item">
								Кнопка "Измнение новостей" меню редактирования новостей.
							</p>
							<p class="content__item">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum ipsa, amet doloribus consectetur sequi perferendis architecto ab nostrum similique molestias dolorum consequuntur maxime vel fuga totam optio exercitationem distinctio facilis.
							</p>
							<p class="content__item">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptate sunt iusto
								excepturi commodi deleniti quo corporis, repellat fugit quas illum. Sapiente excepturi
								dolorum architecto ipsam libero? Ratione, nam soluta.
							</p>
						</div>
					</div>
				</div>
			</div>
		</main>
	<?php include "footeradmin.php"; ?>
  </div>
</body>
</html>