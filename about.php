 <!DOCTYPE html>
 <html lang="ru">

 <head>
 	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 	<title>Контактная форма</title>
 </head>

 <body>
 	<?php require "blocks/header.php" ?>
 	<div class="container mt-5">
 		<h3>Контактная форма</h3><br>
 		<form action="check.php" method="post">
 			<input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
 			<textarea name="message" class="form-control" placeholder="Введите ваше сообщение""></textarea><br>
			<button type=" submit" name="send" class="btn btn-success">Отправить</button>
		</form>
 	</div>
 	<?php require "blocks/footer.php" ?>
 </body>

 </html>