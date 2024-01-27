<!DOCTYPE html>
<html>

<head>
	<title>Programming Languages</title>
	<?php
	include("common/head.php");
	?>

</head>

<body>
	<img src="media/img/5590457.jpg" alt="imagen de fondo de web" class="background">
	<?php
	include("common/menu.php");
	?>
	<main>
		<div class="contenedor">
			<h2>Lenguajes de programación</h2>
			<ul>
				<a href="vistas/html/index.php">
					<li class="lenguajeHtml" id="html"><i class="fa-brands fa-html5"></i></li>
				</a>
				<a href="vistas/css/index.php">
					<li class="lenguajeCss"><i class="fa-brands fa-css3-alt"></i></li>
				</a>
				<a href="vistas/java/index.php">
					<li class="lenguajeJava"><i class="fa-brands fa-java"></i></li>
				</a>
				<a href="vistas/javascript/index.php">
					<li class="lenguajeJs"><i class="fa-brands fa-js"></i></li>
				</a>
				<a href="vistas/mysql/index.php">
					<li class="lenguajeSql"><i class="fa-solid fa-database"></i></li>
				</a>
				<a href="vistas/github/index.php">
					<li class="lenguajeGithub"><i class="fa-brands fa-github"></i></li>
				</a>
				<a href="vistas/php/index.php">
					<li class="lenguajePhp"><i class="fa-brands fa-php"></i></li>
				</a>
				<a href="vistas/python/index.php">
					<li class="lenguajePython"><i class="fa-brands fa-python"></i></li>
				</a>
			</ul>
		</div>
	</main>
	<?php
	include("common/footer.php");
	?>
</body>

</html>