<?php
session_start();
$_SESSION['id_dieta'] = $_GET['id_dieta'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alive-login</title>
	<link rel="stylesheet" href="./ingresar_comida.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<header class="container">
		<div>
			<a href="/inicio_logueado/dashboard.php">
				<h1 class="color-white">Alive</h1>
			</a>
		</div>
		<div>
			<ul>
				<li><a href="/dietas/editardieta/editardieta.php?id_dieta=<?php $GET_['id_dieta']?>">Regresar</a></li>
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
		<h1 class="color-white shadow-sm ">
			Aqui puedes ingresar tus platillos de comida
		</h1>
		<div class="form-container">
			<form action="_ingresar_comida.php" method="post">
				<div class="title">
					<h2 class="color-primary">Rellena el formulario con los datos de tu platillo</h2>
				</div>
				<div class="input-field">
					<label class="color-primary text-bold" for="nombre_plato">Nombre del plato</label>
					<input type="text" name="nombre_plato" id="nombre_plato" required placeholder="Escribe el nombre de tu plato de comida">
				</div>
				<div class="input-field">
					<label class="color-primary text-bold" for="tipo_comida">Tipo de comida</label>
					<span class="color-gray">La comida del dia, deyasuno, comida de medio dia, etc</span>
					<select name="tipo_comida" id="tipo_comida">
						<option value="desayuno">Desayuno</option>
						<option value="comida_antes_de_medio_dia">Comida antes de medio dia</option>
						<option value="comida_de_medio_dia">Comida de medio dia</option>
						<option value="comida_de_media_tarde">Comida de media tarde</option>
						<option value="cena">Cena</option>
					</select>
				</div>
				<div class="input-field">
					<label class="color-primary text-bold" for="">Descrpicion de tu plato</label>
					<input type="text" name="descripcion_comida" id="descripcion_comida" required placeholder="Escribe la descipcion del plato de comida">
				</div>
				<div class="input-field">
					<label class="color-primary text-bold" for="">Calorias que aporta el plato de comida</label>
					<span class="color-gray">Este numero representa el valance de aportacion en un estimado de 2200–2600 para un hombre adulto sedentario, <a class="color-primary" href="https://www.msdmanuals.com/es-ec/hogar/multimedia/table/n%C3%BAmero-estimado-de-calor%C3%ADas-necesarias-basado-en-la-edad-el-sexo-y-el-nivel-de-actividad">saber mas sobre cuantas calorias debo consumir al dia</a></span>
					<input type="number" name="calorias_comida" id="calorias_comida" required placeholder="Calorias que aporta en el dia en numero">
				</div>
				<div class="btn-container">
					<button class="primary-button">Guardar mi plato de comida</button>
				</div>
			</form>
		</div>
	</main>

</body>