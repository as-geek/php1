<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body {
			background-color: #ebebeb;
		}
		.foto {
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		.fotoItem {
			width: 300px;
		}
	</style>
</head>
<body>
	<div class="foto">
		<?php
			$catalog = [
				'Фото_1' => 'img/1.jpg',
				'Фото_2' => 'img/2.jpg',
				'Фото_3' => 'img/3.jpg',
				'Фото_4' => 'img/4.jpg',
			];
		
			foreach ($catalog as $key => $value) {
				echo <<<php
				<a href=$value target="_blank">
					<img src=$value alt=$key class="fotoItem">
				</a>
php;
			}
		?>

	</div>
</body>

</html>