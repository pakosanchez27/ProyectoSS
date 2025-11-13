document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("toggleMenu");
  const menu = document.getElementById("Adm-M-menus-opc");

  let isVisible = true;

  toggleButton.addEventListener("click", function () {
    if (isVisible) {
      menu.style.display = "none";
      // toggleButton.src = "img/iconos/arrow-right-solid-full.svg"; // ya no la necesitas
    } else {
      menu.style.display = "flex";
      // toggleButton.src = "img/iconos/bars-solid-full.svg"; // ya no la necesitas
    }
    isVisible = !isVisible;
  });
});


  function agregarOpcion(texto) {
      const menuTexts = document.getElementById("Adm-M-menus-opc");
      const menuIcons = document.getElementById("Adm-M-menus-img");

      // Crear nuevo texto
      const nuevoSpan = document.createElement("span");
      nuevoSpan.className = "Adm-M-sub-1";
      nuevoSpan.textContent = texto;
      menuTexts.appendChild(nuevoSpan);

      // Crear nueva imagen
      const nuevaImg = document.createElement("img");
      nuevaImg.src = "img/iconos/carpeta-vacia.png";
      nuevaImg.alt = "";
      nuevaImg.className = "Adm-M-img-1";
      menuIcons.appendChild(nuevaImg);
    }
