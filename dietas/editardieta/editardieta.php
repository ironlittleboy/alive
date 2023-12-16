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
$sql = "SELECT * FROM comida WHERE id_dieta = " . $_GET['id_dieta'];
$resultado = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="editardieta.css">
	<title>Editar dietas</title>
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
				<li><a href="../misdietas/misdietas.php">Regresar</a></li>
				<div class="profile-icon" title="tu perfil 
					<?php
					echo $_SESSION["nombre_usuario"];
					?>">
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
		<h1 class="color-primary">Comidas de tu dieta</h1>
		<?php
		if ($resultado->num_rows > 0) {
			echo "<table>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>Nombre del plato</th>";
			echo "<th>Tipo de comida</th>";
			echo "<th>Descipcion del plato</th>";
			echo "<th>Opcion</th>";
			echo "<th>Opcion</th>";
			echo "</thead>";
			echo "<tbody>";
			foreach ($resultado as $fila) {
				echo "<tr>";
				echo "<td>" . $fila['nombre_plato'] . "</td>";
				echo "<td>" . $fila['tipo_comida'] . "</td>";
				echo "<td>" . $fila['descripcion_comida'] . "</td>";
				echo "<td><button class='primary-button'>Editar comida</button>";
				echo "<td><button class='secondary-button'>Eliminar comida</button></td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
			echo "<button class='primary-button' onclick='showComidaModal(". $_GET['id_dieta'] .")'>Agrega una comida a tu dieta</button>";
		} else {
			echo "<div class='crear-plato'>";
			echo "<h3 class='color-primary'>No hay platos de comida en tu dieta</h3>";
			echo "<button class='primary-button' onclick='showComidaModal(". $_GET['id_dieta'] .")'>Agrega una comida a tu dieta</button>";

			echo "</div>";
		}

		?>
	</main>
</body>
		<script>
			function showComidaModal(id_dieta) {
				window.location.href = `../ingresarcomida/ingresar_comida.php?id_dieta=${id_dieta}`;
			}
		</script>
</html>