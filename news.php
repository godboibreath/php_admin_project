<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/news_style.css">
	<title>MySitePHP</title>
</head>

<body>
	<div class="wrapper">
		<?php include "header.php"; 
		
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
		$result=mysqli_query($link, "SELECT DISTINCT rubric FROM `news`");
		if($result){
			//var_dump($result);
			//$b=mysqli_fetch_assoc($result);
			//while($b=array_unique(mysqli_fetch_assoc($result)));
			//{
			//var_dump($b);
			//}
		}
		?>

		<main class="news">
			<div class="conteiner">
			<form method='POST' action="" enctype="utf-8">
			<select className="" name="rubric">
			<option value="Марка" selected="disabled" hidden>Рубрика</option>
			<option value="Любая">Любая</option>
			<?php
			$k=0;
			$rubric = array();
			//$b=mysqli_fetch_assoc($result);
			while (($b=array_unique(mysqli_fetch_assoc($result))))
			{
				$rubric[] = $b['rubric'];
				echo '<option value="'.$b['rubric'].'">'.$b['rubric'].'</option>';
				$k++;
			}
			echo ''.$k.'';
			?>
			</select>
			<input class="new__sub" type="submit" value="Показать">
			</form>
			<?php 
			if (!isset($_POST['rubric']))
			{
				$_POST['rubric']="Любая";
			}
			?>
			<?php
			for ($i=0; $i<$k; $i++)
			{
				if ((($_POST['rubric']=="Рубрика")||($_POST['rubric']=="Любая")))
				{
					$result=mysqli_query($link, "SELECT * FROM  news ORDER BY date DESC");
				}
				if ($_POST['rubric']==$rubric[$i])
				{
					$bb=$rubric[$i];
					$result=mysqli_query($link, "SELECT * FROM  news WHERE rubric='$bb'");
				}
			}
			?>
			<div class="news__row">
			<?php
			$j=1;
			while (($a=mysqli_fetch_assoc($result)))
			{
				echo '<div class="news__column">
					<div class="news__item">
						<p class="news__title">
							<span class="news__id">'.$a['id'].'.</span> <a href="#"><span
							class="news__heading">'.$a['heading'].'.</span></a> 
						</p>
						<p class="news__prew">
							'.$a['prew'].'
						</p>
						<p class="news__author">'.$a['author'].'</p>
						<p class="news__date">'.$a['date'].'</p>
						<p class="news__date">'.$a['rubric'].'</p>
					</div>
				</div>';
				$j++;
			}
			?>
			</div>
			<!--
				<div class="news__row">
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">1.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">2.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">3.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">4.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">5.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">6.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">7.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">8.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">9.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">10.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
					<div class="news__column">
						<div class="news__item">
							<p class="news__title">
								<span class="news__id">11.</span> <a href="#">Lorem, ipsum dolor.</a> <span
									class="news__heading">Heading1</span>
							</p>
							<p class="news__prew">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut ratione
								reprehenderit illum nam quod nisi ab dolore laborum, nihil quo delectus eius iusto,
								provident consequuntur optio blanditiis voluptate, dolorem esse earum. Harum sapiente
								adipisci veritatis odio doloribus commodi. Debitis sed optio nostrum veniam officia,
								ipsam eligendi, id incidunt ipsum dolorem, odit non ratione suscipit exercitationem!
								Asperiores quos assumenda eveniet? Deserunt incidunt numquam dolore vitae ipsum
								similique iusto beatae ex, harum illum libero corporis ipsa saepe facilis ipsam quasi
								dolorum doloremque tempora, perferendis adipisci laborum nam facere. Officiis corrupti
								aut iure cumque, possimus iusto quis perferendis inventore soluta officia assumenda!
							</p>
							<p class="news__author">Author1</p>
							<p class="news__date">21-03-17</p>
						</div>
					</div>
				</div>
				-->
			</div>
		</main>

		<?php include "footer.php"; ?>
	</div>
</body>

</html>