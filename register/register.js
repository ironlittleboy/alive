function handleSubmit(e) {
  e.preventDefault();
  const nombre_usuario = document.getElementById("nombre_usuario").value;
  const nombres = document.getElementById("nombres").value;
  const date = document.getElementById("fecha_nacimiento").value;
  const usuario_email = document.getElementById("usuario_email").value;
  const usuario_password = document.getElementById("usuario_password").value;

  const data = {
    nombre_usuario: nombre_usuario,
    nombres: nombres,
    date: date,
    usuario_email: usuario_email,
    usuario_password: usuario_password,
  };
  function register() {
    document.getElementById("nombreError").textContent = "";
    document.getElementById("apellidoError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("passwordError").textContent = "";
    document.getElementById("confirmarPasswordError").textContent = "";
    document.getElementById("fechaNacimientoError").textContent = "";

    const nombre = document.getElementById("nombre").value;
    const apellido = document.getElementById("apellido").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmarPassword =
      document.getElementById("confirmarPassword").value;
    const fechaNacimiento = document.getElementById("fechaNacimiento").value;

    let isValid = true;
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

    function showError(fieldId, message) {
      const errorElement = document.getElementById(fieldId + "Error");
      if (errorElement) {
        errorElement.textContent = message;
      }
      isValid = false;
    }

    if (nombre === "") {
      showError("nombre", "Por favor, ingresa un nombre.");
    } else if (nombre.length > 10) {
      showError("nombre", "El nombre debe tener un máximo de 10 caracteres.");
    }

    if (apellido === "") {
      showError("apellido", "Por favor, ingresa un apellido.");
    } else if (apellido.length > 10) {
      showError(
        "apellido",
        "El apellido debe tener un máximo de 10 caracteres."
      );
    }

    if (email === "") {
      showError("email", "Por favor, ingresa un email.");
    } else if (!regexEmail.test(email)) {
      showError("email", "El email no es valido");
    } else {
      document.getElementById("emailError").textContent = "";
    }

    if (password.length < 7) {
      showError("password", "La contraseña debe tener al menos 7 caracteres.");
    } else if (!/[A-Z]/.test(password)) {
      showError(
        "password",
        "La contraseña debe contener al menos una letra mayúscula."
      );
    }

    if (password !== confirmarPassword) {
      showError("confirmarPassword", "Las contraseñas no coinciden.");
    }

    if (!fechaNacimiento) {
      showError(
        "fechaNacimiento",
        "Por favor, selecciona una fecha de nacimiento."
      );
    }

    if (isValid) {
      alert("Registro exitoso");
    }
  }
  const dataJson = JSON.stringify(data);
  localStorage.setItem("data", dataJson);
}
