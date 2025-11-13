const secciones = document.querySelectorAll(".NS-seccion");
const dots = document.querySelectorAll(".dot");

function mostrarSeccion(i) {
  secciones.forEach((sec, index) => {
    sec.classList.toggle("oculta", index !== i);
    dots[index].classList.toggle("active", index === i);
  });
}

dots.forEach((dot, i) => {
  dot.addEventListener("click", () => mostrarSeccion(i));
});
