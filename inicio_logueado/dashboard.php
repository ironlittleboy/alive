<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alive</title>
	<link rel="stylesheet" href="loged.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<header class="container">
		<div>
			<a href="\index.html">
				<h1 class="color-white">Alive</h1>
			</a>
		</div>
		<div>
			<ul>
				<li><a href="dashboard.php">Inicio</a></li>
				<li><a href="/dietas/misdietas/misdietas.php">Tus dietas</a></li>
				<li><a href="/dietas/dietas.php">Dietas</a></li>
				<div class="profile-icon">
					<a href="/perfil/perfil.php">
						<img src="/images/default-user-icon-8.jpg" alt="logo" id="logo">
						<p class="color-white">
							<?php
								echo $_SESSION['nombre_usuario'];
							?>
						</p>
					</a>
				</div>
			</ul>
		</div>
	</header>

	<main>
		<h1 class="color-primary">Dietas principales</h1>
		<div class="card-container">
			<div class="card">
				<div>
					<h2 class="color-white">Dieta Mediterranea</h2>
					<p class="color-white">Se basa en los patrones alimenticios de las regiones mediterráneas y se
						centra en alimentos frescos, frutas, verduras, pescado, aceite de oliva y nueces. Limita el
						consumo de carnes rojas y procesadas.</p>
				</div>
				<div class="card-container">
					<img class="img-card" src="/images/img1.jpeg" alt="">
				</div>
			</div>
			<div class="card">
				<div>
					<h2 class="color-white">Dieta Vegetariana</h2>
					<p class="color-white">Excluye la carne, ya sea total o parcialmente. Los vegetarianos pueden
						consumir productos lácteos y huevos (ovo-lacto-vegetarianos), solo productos lácteos
						(lacto-vegetarianos) o solo vegetales (veganos).</p>
				</div>
				<div class="card-container">
					<img class="img-card" src="/images/img6.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="more">
			<button class="primary-button" onclick="redirect()">Ver mas dietas</button>
		</div>
	</main>
	<section>
		<div class="diet-header">
		<h1 class="color-white">Tus estadisticas</h1>
		</div>
		<div class="table-container">
			<h1 class="color-primary">Esta funcion estara disponble proximamente</h1>
		</div>
	</section>
	<footer>
		<div class="first">
			<div>
				<h1>Alive</h2>
			</div>
			<div>
				<button onclick="logout()" class="secondary-button">Cerrar Sesion</button>
			</div>
		</div>
		<div class="second color-white">
		Alive App. 2021-2023 Copyright © 2001-2023 
		</div>
	</footer>
	<script>
		function redirect () {
			window.location.href = "../dietas/dietas.php";
		}
		function logout () { 
			window.location.href= "../index.php";
		}
	</script>
</body>

</html>