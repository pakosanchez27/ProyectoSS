// Globales
const base_url = "http://127.0.0.1/PakoFinal/public/";




// Utils

document.addEventListener('DOMContentLoaded', () => {
     const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.querySelector('i').classList.toggle('bi-eye');
      this.querySelector('i').classList.toggle('bi-eye-slash');
    });
});



// Funciones
function validateLogin(formSelector = "form") {

  $(formSelector).validate({
    errorElement: "span",
    errorClass: "text-danger mt-1 d-block",
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 6
      }
    },
    messages: {
      email: {
        required: "Por favor, ingresa tu correo electrónico.",
        email: "Introduce un correo válido (ej. usuario@dominio.com)."
      },
      password: {
        required: "Por favor, ingresa tu contraseña.",
        minlength: "Debe tener al menos 6 caracteres."
      }
    },
    highlight: function (element) {
      $(element).addClass("is-invalid");
    },
    unhighlight: function (element) {
      $(element).removeClass("is-invalid");
    },
    errorPlacement: function (error, element) {
      if (element.parent(".input-group").length) {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }
    },
    submitHandler: function (form, e) {
      e.preventDefault();

   
      // 🔹 Obtener datos del formulario
      const formData = {
        email: $("#email").val(),
        password: $("#password").val()
      };

      // 🔹 Deshabilitar el botón temporalmente
      const $btn = $(form).find("button[type=submit]");
      $btn.prop("disabled", true).html(`<span class="spinner-border spinner-border-sm me-2"></span>Validando...`);

      // 🔹 Petición AJAX
      $.ajax({
        url: base_url + "login/store",
        type: "POST",
        data: formData,
        // dataType: "json",
        success: function (response) {
          if (response.status === "success") {
            Swal.fire({
              icon: "success",
              title: "Bienvenido",
              text: response.message || "Inicio de sesión correcto.",
              timer: 1500,
              showConfirmButton: false
            });
            setTimeout(() => window.location.href = response.redirect || base_url + "/panel", 1200);
          } else {
            Swal.fire({
              icon: "error",
              title: "Error",
              text: response.message || "Credenciales incorrectas."
            });
          }
        },
        error: function (xhr) {
          Swal.fire({
            icon: "error",
            title: "Error de conexión",
            text: "No se pudo conectar con el servidor."
          });
          console.error(xhr.responseText);
        },
        complete: function () {
          $btn.prop("disabled", false).html("Ingresar");
        }
      });
    }
  });
}
