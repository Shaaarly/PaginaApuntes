<!DOCTYPE html>
<html>

<head>
	<title>Programming Languages</title>
	<?php
	include("../../common/head.php");
	?>
</head>

<body>
	<img src="../../media/img/5590457.jpg" alt="imagen de fondo de web" class="background">
	<?php
	include("../../common/menu.php");
	?>
	<div class="contenedor_lenguajes">

		<aside>
			<ul>
				<li class="contenedor-indice">
					<div onclick="toggleIndice(this)">
						<a href="#">Tema 1</a>
						<i class="fa-solid fa-angle-down indice-btn"></i>
					</div>
					<ul class="indice">
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
					<div onclick="toggleIndice(this)">
						<a href="#">Tema 2</a>
						<i class="fa-solid fa-angle-down indice-btn"></i>
					</div>
					<ul class="indice">
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
					<div onclick="toggleIndice(this)">
						<a href="#">Tema 3</a>
						<i class="fa-solid fa-angle-down indice-btn"></i>
					</div>
					<ul class="indice">
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
					<div onclick="toggleIndice(this)">
						<a href="#">Tema 4</a>
						<i class="fa-solid fa-angle-down indice-btn"></i>
					</div>
					<ul class="indice">
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
					<div onclick="toggleIndice(this)">
						<a href="#">Tema 5</a>
						<i class="fa-solid fa-angle-down indice-btn"></i>
					</div>
					<ul class="indice">
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
					<div onclick="toggleIndice(this)">
						<a href="#">Tema 6</a>
						<i class="fa-solid fa-angle-down indice-btn"></i>
					</div>
					<ul class="indice">
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
					<div onclick="toggleIndice(this)">
						<a href="#">Tema 7</a>
						<i class="fa-solid fa-angle-down indice-btn"></i>
					</div>
					<ul class="indice">
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
					<div onclick="toggleIndice(this)">
						<a href="#">Tema 8</a>
						<i class="fa-solid fa-angle-down indice-btn"></i>
					</div>
					<ul class="indice">
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
			</ul>
		</aside>
		<div class="barra-btn" onclick="toggleSidebar()">
			<i class="fa-solid fa-angle-right toggle-btn"></i>
		</div>
		<main>
			<section>
				<h3>Tema 1 - Teoria</h3>
				<h4>1.- Introducción</h4>
				<div>
					<p>Java es un lenguaje de programación con el propósito de ser general, recurrente y estar orientado
						a objetos. Su objetivo es que se pueda escribir el programa una ves y se pueda ejecutar en
						cualquier dispositivo.</p>
				</div>
				<h4>2.- Elementos básicos</h4>
				<h5>2.1.- Comentarios</h5>
				<div>
					<p>Hay 3 tipos de comentarios principalmente:</p>
					<p> // Comentarios para una sola linea.</p>
					<p> /* <br>
						comentarios de una o más lineas <br>
						*/
					</p>
					<p>
						/** comentarios de documentación de una o más lineas <br>

						*/
					</p>
				</div>
			</section>
			<section>
				<h3>Tema 1 - Ejercicios</h3>
			</section>
		</main>
	</div>
	<?php
	include("../../common/footer.php");
	?>
</body>

<?php
include("../../common/script.php");
?>

</html>