// Obtener elementos
var menu = document.getElementById("menu");
var dropdownMenu = document.getElementById("dropdownMenu");

// Agregar evento de clic al menú
menu.addEventListener("click", function () {
  // Alternar clase "active" en el menú desplegable
  dropdownMenu.classList.toggle("active");
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form_contact");

  form.addEventListener("submit", function (event) {
    const names = document.getElementById("names").value.trim();
    const email = document.getElementById("email").value.trim();
    const mensaje = document.getElementById("mensaje").value.trim();

    if (!names || !email || !mensaje) {
      alert("Por favor, complete todos los campos obligatorios.");
      event.preventDefault(); // Prevent form submission
    } else if (!validateEmail(email)) {
      alert("Por favor, ingrese un correo electrónico válido.");
      event.preventDefault();
    }
  });

  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
  }
});
