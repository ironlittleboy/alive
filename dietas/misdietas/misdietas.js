function eliminar(id_dieta) {
  if (confirm('¿Estás seguro de que quieres eliminar esta dieta y todo su contenido?')) {
    const data = new URLSearchParams();
    data.append('id_dieta', id_dieta);
    fetch("./_eliminar_dieta.php", {
      method: 'POST',
      body: data
    })
    .then(response => {
      if (!response.ok) {
          throw new Error('Error en la solicitud.');
      }
      return response.json();
  })
    .then(result => {
      if(result.success) {
        alert("Dieta eliminada");
        window.location.reload();
      } else {
        alert("Dieta no eliminada");
      }
    })
    .catch(error => {
      console.log(error);
    })
  }
}
function logout() {
  window.location.href = "../../index.php";
}

function showModal() {
  window.location.href = "../creardieta/crear_dieta.php";
}

function editarDietaVista(id_dieta, id_usuario, nombre_dieta, descripcion_dieta) {
  window.location.href = `../editardieta/editardieta.php?id_dieta=${id_dieta}&id_usuario=${id_usuario}&nombre_dieta=${nombre_dieta}&descripcion_dieta=${descripcion_dieta}`;
}

function redirect() {
  window.location.href = "./ingresar_comida.php";
}