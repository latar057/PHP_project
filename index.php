 <!DOCTYPE html>
 <html lang="ru">

 <head>
 	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 	<title>PHP веб сайт</title>
 </head>

 <body>
 	<?php require "blocks/header.php" ?>
 	<div class="container mt-5">
 		<h3 class="mb-5">Статьи</h3>

 		<div class="d-flex flex-wrap">
 			<?php
				for ($i = 0; $i < 5; $i++) :
				?>
 				<div class="card mb-4 shadow-sm">
 					<div class="card-header">
 						<h4 class="my-0 font-weight-normal">Просто текст</h4>
 					</div>
 					<div class="card-body">
 						<img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
 						<ul class="list-unstyled mt-3 mb-4">
 							<li>10 users included</li>
 							<li>2 GB of storage</li>
 							<li>Email support</li>
 							<li>Help center access</li>
 						</ul>
 						<button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
 					</div>
 				</div>
 			<?php endfor ?>
 		</div>
 	</div>

 	</div>
	<?php require "blocks/footer.php" ?>
 </body>

 </html>