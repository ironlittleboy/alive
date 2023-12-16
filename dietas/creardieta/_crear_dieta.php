<?php
session_start();
$severname = "212.1.208.199";
$username = "u312507976_db40";
$password = "5Ag123-2";
$dbname = "u312507976_db40";
$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexion fallida: " . $conn ->error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_usuario = $_SESSION['id_usuario'];
  $nombre_dieta = $_POST['nombre_dieta'];
  $descripcion_dieta = $_POST['descripcion_dieta'];

  $sql = "INSERT INTO dieta (id_usuario,nombre_dieta,descripcion_dieta) VALUES ('$id_usuario', '$nombre_dieta', '$descripcion_dieta')";
  if ($conn->query($sql) === TRUE) {
    header("Location: ../misdietas/misdietas.php?status=200&message=OK");
  } else {
    header("Location: ../misdietas.php?error=true&message=Error");
  }
}