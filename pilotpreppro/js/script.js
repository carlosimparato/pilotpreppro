const btnSignIn = document.getElementById("sign-in"),
      btnSignUp = document.getElementById("sign-up"),
      formRegister = document.querySelector(".register"),
      formLogin = document.querySelector(".login");

btnSignIn.addEventListener("click", e => {
    formRegister.classList.add("hide");
    formRegister.classList.remove("show");
    formLogin.classList.remove("hide");
    formLogin.classList.add("show");
});

btnSignUp.addEventListener("click", e => {
    formLogin.classList.add("hide");
    formLogin.classList.remove("show");
    formRegister.classList.remove("hide");
    formRegister.classList.add("show");
});

function togglePassword(fieldId, icon) {
    const passwordField = document.getElementById(fieldId);
    if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

function irADetalles() {
    const modalidadSeleccionada = document.querySelector('input[name="modalidad"]:checked');
    const examenSeleccionado = document.getElementById('examenes').value;

    if (modalidadSeleccionada && examenSeleccionado) {
        // Redirigir a una página de detalles (puedes ajustar la URL y lógica aquí)
        window.location.href = `../html/detalles-examenes.php?modalidad=${modalidadSeleccionada.value}&examen=${examenSeleccionado}`;
    } else {
        alert("Por favor, selecciona una modalidad y un examen.");
    }
}