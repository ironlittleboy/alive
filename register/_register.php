<?php

// Conecta a tu base de datos (reemplaza con tus propias credenciales)
$servername = "212.1.208.199";
$username = "u312507976_db40";
$password = "5Ag123-2";
$dbname = "u312507976_db40";


$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

// Maneja la solicitud POST para guardar en la base de datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nombre_usuario = $_POST['nombre_usuario'];
	$nombres = $_POST['nombres'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];
	$usuario_email = $_POST['usuario_email'];
	$usuario_password = $_POST['usuario_password'];

	// Consulta para insertar datos en la base de datos
	$sql = "INSERT INTO usuario (nombre_usuario, nombres, fecha_nacimiento, usuario_email, usuario_password)
            VALUES ('$nombre_usuario', '$nombres', '$fecha_nacimiento', '$usuario_email', '$usuario_password')";

	if ($conn->query($sql) === TRUE) {
		header("Location: ../login/login.php");
	} else {
		echo "Error al guardar datos en la base de datos: " . $conn->error;
	}
}

// Cierra la conexión a la base de datos
$conn->close();
