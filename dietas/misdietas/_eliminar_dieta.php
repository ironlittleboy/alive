<?php
session_start();
$servername = "212.1.208.199";
$username = "u312507976_db40";
$password = "5Ag123-2";
$dbname = "u312507976_db40";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexion fallida: " . $conn->error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_dieta = $_POST["id_dieta"];
  
  // Comprobar si la dieta no tiene registros en comida
  $comida = "SELECT * FROM comida WHERE id_dieta=" . $id_dieta;
  $result = $conn->query($comida);

  if ($result === false) {
    // Manejo de errores para la consulta
    $response = ['error' => 'Error en la consulta de comida: ' . $conn->error];
  } else {
    // Si encuentra registros, procede a eliminarlos
    if ($result->num_rows > 0) {
      $borrar_comida = "DELETE FROM comida WHERE id_dieta=" . $id_dieta;
      $conn->query($borrar_comida);

      // Ahora borra la dieta
      $result2 = $conn->query("DELETE FROM dieta WHERE id_dieta=" . $id_dieta);

      if ($result2 === TRUE) {
        $response = ['success' => true];
      } else {
        $response = ['error' => 'Error al borrar la dieta: ' . $conn->error];
      }
    } else {
      // Solo borra la dieta
      $result2 = $conn->query("DELETE FROM dieta WHERE id_dieta=" . $id_dieta);

      if ($result2 === TRUE) {
        $response = ['success' => true];
      } else {
        $response = ['error' => 'Error al borrar la dieta: ' . $conn->error];
      }
    }
  }

  $conn->close();
  
  // Devolver la respuesta en formato JSON
  header('Content-Type: application/json');
  echo json_encode($response);
}
?>
