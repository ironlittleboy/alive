<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="crear_dieta.css">
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
				<li><a href="../../inicio_logueado/dashboard.php">Inicio</a></li>
				<li><a href="/dietas/misdietas/misdietas.php">Volver</a></li>
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
    <h1 class="color-white shadow-sm">Crea tu dieta personalizada</h1>
    <div class="form-container">
      <form action="_crear_dieta.php" method="post">
        <div class="title">
          <h2 class="color-primary">Coloca un nombre y una descripcion de tu dieta</h2>
        </div>
        <div class="input-field">
          <label for="">Nombre de tu dieta</label>
          <input type="text" required id="nombre_dieta" name="nombre_dieta">
        </div>
        <div class="input-field">
          <label for="">Descripcion de tu dieta</label>
          <input type="text" required id="descripcion_dieta" name="descripcion_dieta">
        </div>
        <div class="btn-container">
        <button class="primary-button">Guardar mi dieta</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>