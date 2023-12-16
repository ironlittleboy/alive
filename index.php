<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alive</title>
	<link rel="stylesheet" href="/index">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<header>
		<div>
			<a href="/index.php">
				<h1 class="color-white">Alive</h1>
			</a>
		</div>
		<div>
			<ul>
				<li><a href="/index.php">Inicio</a></li>
				<li><a href="/login/login.php">Iniciar Sesion</a></li>
				<li><a href="/register/register.php">Registrarse</a></li>
				<li><a href="/dietaspublic.php">Dietas</a></li>

			</ul>
		</div>
	</header>
	<main>
		<div>
			<div class="btn-container">
				<button class="primary-button" onclick="register()">Emepezar</button>
			</div>
		</div>
		<div>
			<h1>Bienvenido a Alive</h1>
			<p>Mejora tu calidad de vida con nuestra aplicación de salud y bienestar.</p>
		</div>
	</main>
	<script>
		function register() {
			window.location.href = "/register/register.php";
		}
	</script>
</body>

</html>