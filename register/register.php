<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alive-register</title>
	<link rel="stylesheet" href="register.css">
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
				<li><a href="../login/login.php">Iniciar Sesion</a></li>
			</ul>
		</div>
	</header>
	<main>
		<div class="form-container">
			<form action="_register.php" method="post" onsubmit="(e) => e.preventDefault()">
				<div class="title">
					<h1 class="color-primary">Registrarse</h1>
				</div>
				<div class="input-field">
					<label for="">Nombre de usuario</label>
					<input type="text" name="nombre_usuario" id="nombre_usuario" required>
				</div>
				<div class="input-field">
					<label for="">Nombres y Apellidos</label>
					<input type="text" name="nombres" id="nombres" required>
				</div>
				<div class="input-field">
					<label for="">Fecha de nacimiento</label>
					<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
				</div>
				<div class="input-field">
					<label for="">Correo Electronico</label>
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
					<p>Si ya tienes una cuenta </p><a class="color-primary" href="../login/login.php">Inicia sesion</a>
				</div>
			</form>
		</div>
	</main>
</body>




</html>