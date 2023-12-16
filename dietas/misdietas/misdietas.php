<?php
session_start();
$severname = "212.1.208.199";
$username = "u312507976_db40";
$password = "5Ag123-2";
$dbname = "u312507976_db40";
$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Conexion fallida: " . $conn->error);
}
$sql = "SELECT * FROM dieta WHERE id_usuario = " . $_SESSION['id_usuario'];
$resultado = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alive-dietas</title>
	<link rel="stylesheet" href="./misdietas.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<header class="container">
		<div>
			<a href="../../inicio_logueado/dashboard.php">
				<h1 class="color-white">Alive</h1>
			</a>
		</div>
		<div>
			<ul>
				<li><a href="../../inicio_logueado/dashboard.php">Inicio</a></li>
				<li><a href="/recordatorios/calendario.html">Tus recordatoios</a></li>
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
	<main class="main">
		<h1 class="color-primary title">Tu dieta de la semana</h1>
		<p>Estas son tus comidas de la semana, ¿no sabes que dieta seguir? <a href="" class="color-primary">Mira nuetros catalogo de dietas</a></p>
		<div class="cards">
			<?php
			if ($resultado->num_rows > 0) {
				foreach ($resultado as $fila) {
					echo "<div class='card'>";
					echo "<div class='text'>";
					echo "<h1 class='color-primary'>" . $fila["nombre_dieta"] . "</h1>";
					echo "<p>" . $fila["descripcion_dieta"] . "</p>";
					echo "</div>";
					echo "<div class='btn-container'>";
					echo "<button class='primary-button' onclick='editarDietaVista(" . $fila["id_dieta"] . ", " . $fila["id_usuario"] . ", \"" . $fila["nombre_dieta"] . "\", \"" . $fila["descripcion_dieta"] . "\")'>Ver dieta</button>";

					echo "<button class='secondary-button' onclick='eliminar(" . $fila["id_dieta"] . ")'>Eliminar dieta</button>";
					echo "</div>";
					echo "</div>";
				}
				echo "<div class='create-card'>";
				echo "<button class='secondary-button' onclick='showModal()'>Crear Dieta</button>";
				echo "</div>";
			} else {
				echo "<div class='create-card'>";
				echo "<h4 class='color-primary'>No hay dietas</h1>";
				echo "<button class='secondary-button' onclick='showModal()'>Crear Dieta</button>";
				echo "</div>";
			}

			?>
		</div>
	</main>
	<footer>
		<div class="first">
			<div>
				<h1>Alive</h2>
			</div>
			<div>
				<button onclick="logout()" class="outline-button">Cerrar Sesion</button>
			</div>
		</div>
		<div class="second color-white">
			Alive App. 2021-2023 Copyright © 2001-2023
		</div>
	</footer>
	<script src="misdietas.js"></script>
</body>

</html>