<?php
session_start();
$severname = "212.1.208.199";
$username = "u312507976_db40";
$password = "5Ag123-2";
$dbname = "u312507976_db40";
$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn ->connect_error) {
  die("Conexion fallida: " . $conn ->error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_dieta = $_SESSION['id_dieta'];
  $nombre_plato = $_POST['nombre_plato'];
  $tipo_comida = $_POST['tipo_comida'];
  $descripcion_comida = $_POST['descripcion_comida'];
  $calorias_comida = $_POST['calorias_comida'];

  $sql = "INSERT INTO comida(id_dieta, nombre_plato, tipo_comida, descripcion_comida, calorias_comida) VALUES ('$id_dieta', '$nombre_plato', '$tipo_comida', '$descripcion_comida', '$calorias_comida')";
  if ($conn -> query($sql) === TRUE) {
    header("Location: ../editardieta/editardieta.php?status=200&message=OK&id_dieta=$id_dieta");
  } else {
    header("Location: ./ingresar_comida.php?error=true");
  } 
}
