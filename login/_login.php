<?php

// Conecta a tu base de datos (reemplaza con tus propias credenciales)
$servername = "212.1.208.199";
$username = "u312507976_db40";
$password = "5Ag123-2";
$dbname = "u312507976_db40";
session_start();
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Maneja la solicitud POST para el inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $usuario_email = $_POST['usuario_email'];
  $usuario_password = $_POST['usuario_password'];

  // Consulta la base de datos para validar las credenciales
  $sql = "SELECT * FROM usuario WHERE usuario_email = '$usuario_email' AND usuario_password = '$usuario_password'";
  $result = $conn->query($sql);
  if ($result === false) {
    // Manejo de errores para la consulta
    die("Error en la consulta: " . $conn->error);
  }

  if ($result->num_rows > 0) {
    $fila = $result->fetch_assoc();
    $_SESSION['id_usuario'] = $fila['id_usuario'];
    $_SESSION["nombre_usuario"] = $fila['nombre_usuario'];
    $_SESSION["nombres"] = $fila['nombres'];
    $_SESSION["fecha_nacimiento"] = $fila['fecha_nacimiento'];
    $_SESSION["usuario_email"] = $fila['usuario_email'];
    $_SESSION['isloged'] = true;
    // Las credenciales son válidas, puedes redirigir a otra página o establecer una sesión de usuario
    header("Location: ../inicio_logueado/dashboard.php");
  } else {
    // Las credenciales no son válidas
    echo "Inicio de sesión fallido. Verifica tu correo electrónico y contraseña.";
  }
}

// Cierra la conexión a la base de datos
$conn->close();