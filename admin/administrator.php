<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/admin_form_style.css">
	<title>AdminMySitePHP</title>
</head>
<body>
	<div class="wrapper">
		<?php include "headeradmin.php"; ?>
		<div class="adminform">
			<div class="conteiner">
				<div class="adminform__wrap">
					<p class="adminform__title">ВХОД</p>
					<form action="admin.php" class="adminform__form" method="post">
						<div class="adminform__input">
							<label for="admin__login" class="adminform__label"></label>
							<input for="admin__login" name="login" type="text" class="admin__login" placeholder="Login">
						</div>
						<div class="adminform__input">
							<label for="admin__pass" class="adminform__label"></label>
							<input for="admin__pass" name="password" type="password" class="admin__pass" placeholder="Password">
						</div>
						<div class="adminform__input adminform__input-butt">
							<label for="admin__sub" class="adminform__label"></label>
							<input type="submit" class="adminform__sub" value="Sign in">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include "footeradmin.php"; ?>
	</div>
</body>

</html>