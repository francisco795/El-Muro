<?php require 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<title>El muro</title>
</head>
<body>
	<div class="contenedor">
		<section class="post">
			<article>
				<h2 class="titulo"><?php echo $post['titulo'] ?></h2>
				<p class="fecha"><p class="fecha"><?php echo fecha($post['fecha']); ?></p></p>
				<div class="thumb">
					<img src="./imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
				</div>
				<!-- Con la funcion nl2br insertamos un salto de linea antes de todas las lineas nuevas de un string. -->
				<p class="extracto"><?php echo nl2br($post['texto']); ?></p>
			</article>
		</section>
	</div>

<?php require 'footer.php'; ?>