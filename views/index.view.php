<?php require 'header.php' ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/estilos.css">
		<title>Blog</title>
	</head>
	<body>
	<div class="contenedor">
		<?php foreach($posts as $post): ?>
			<div class="post">
				<article>
					<h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a></h2>
					<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
					<div class="thumb">
						<a href="single.php?id=<?php echo $post['id']; ?>">
							<img src="./imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
						</a>
					</div>
					<p class="extracto"><?php echo $post['extracto'] ?></p>
					<a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a>
				</article>
			</div>
		<?php endforeach; ?>

		<?php require 'paginacion.php'; ?>

	</div>

<?php require 'footer.php'; ?>