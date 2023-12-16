<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alive-login</title>
	<link rel="stylesheet" href="./login.css">
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
				<li><a href="/index.php">Inicio</a></li>
				<li><a href="/register/register.php">Registrarse</a></li>
			</ul>
		</div>
	</header>
	<main>
		<div class="form-container">
			<form onsubmit="return handleSubmit(e)" action="_login.php" method="post">
				<div class="title">
					<h2 class="color-primary">Iniciar Sesion</h2>

				</div>
				<div class="input-field">
					<label for="">Email</label>
					<input type="email" name="usuario_email" id="usuario_email" required>
				</div>
				<div class="input-field">
					<label for="">Contraseña</label>
					<input type="password" name="usuario_password" id="usuario_password" required>
				</div>
				<div class="btn-container">
					<button type="submit">Enviar</button>
				</div>
				<div class="underlink">
					<p>Si no tienes una cuenta </p><a class="color-primary" href="../register/register.php">Registrate</a>
				</div>
			</form>
		</div>
	</main>


</body>