const btnIzq = document.querySelector(".TS-img-Izq");
const btnDer = document.querySelector(".TS-img-Der");

// Array de todos los círculos en orden
const circulos = Array.from(
  document.querySelectorAll(".TS-cir-1, .TS-cir-2, .TS-cir-3")
);

// Array de todas las secciones en el mismo orden que los círculos
const secciones = Array.from(
  document.querySelectorAll("div > h1.TS-tit-2")
).map((h) => h.parentElement);

// Número de círculos visibles
const visibles = 3;

// Índice del círculo que está en el centro
let centroIndex = 1; // inicializamos con el segundo de los 3 primeros

function actualizarCarrusel() {
  // Oculta todos los círculos primero
  circulos.forEach((c) => {
    c.style.display = "none";
    c.style.transform = "scale(1)";
    c.style.transition = "all 0.5s";
  });

  // Mostrar los 3 círculos visibles
  for (let i = -1; i <= 1; i++) {
    const index = (centroIndex + i + circulos.length) % circulos.length;
    const c = circulos[index];
    c.style.display = "block";

    // Agrandar el del centro
    if (i === 0) {
      c.style.transform = "scale(1.2)";
    }
  }

  // Mostrar solo la sección correspondiente al círculo del centro
  secciones.forEach((s, i) => {
    s.style.display = i === centroIndex ? "block" : "none";
  });
}

// Botón derecha
btnDer.addEventListener("click", () => {
  centroIndex = (centroIndex + 1) % circulos.length;
  actualizarCarrusel();
});

// Botón izquierda
btnIzq.addEventListener("click", () => {
  centroIndex = (centroIndex - 1 + circulos.length) % circulos.length;
  actualizarCarrusel();
});

// Inicializa el carrusel
actualizarCarrusel();

// Seleccionamos el contenedor específico
const contenedor = document.querySelector(".TS-inf-CB");

// Seleccionamos los botones (siguen siendo globales, pero solo afectarán al contenedor)
const btn1 = document.querySelector(".TS-btn-ext-1");
const btn2 = document.querySelector(".TS-btn-ext-2");
const btn3 = document.querySelector(".TS-btn-ext-3");
const btn4 = document.querySelector(".TS-btn-ext-4");

// Seleccionamos únicamente los contenidos dentro del contenedor
const contenidos = Array.from(contenedor.querySelectorAll(".TS-inf-ext-1"));

// Función para mostrar un contenido específico y ocultar los demás dentro del contenedor
function mostrarContenido(index) {
  contenidos.forEach((c, i) => {
    c.style.display = i === index ? "block" : "none";
  });
}

// Eventos para los botones
btn1.addEventListener("click", () => mostrarContenido(0));
btn2.addEventListener("click", () => mostrarContenido(1));
btn3.addEventListener("click", () => mostrarContenido(2));
btn4.addEventListener("click", () => mostrarContenido(3));

// Inicializamos mostrando el primer contenido
mostrarContenido(0);

document.addEventListener("DOMContentLoaded", function () {
  const btnNezaLink = document.getElementById("btnNezaLink");
  const btnCerrarNezaLink = document.getElementById("btnCerrarNezaLink");
  const seccionNezaLink = document.getElementById("seccionNezaLink");

  // Abrir NEZA LINK
  btnNezaLink.addEventListener("click", function (e) {
    e.preventDefault();
    seccionNezaLink.style.display = "block";
  });

  // Cerrar NEZA LINK
  btnCerrarNezaLink.addEventListener("click", function () {
    seccionNezaLink.style.display = "none";
  });
});

const slides = document.querySelectorAll(".TS-slide");
const botones = document.querySelectorAll(".TS-btn");
let index = 0;
let intervalo = setInterval(nextSlide, 5000); // cambia cada 5 segundos

function showSlide(i) {
  slides.forEach((slide) => slide.classList.remove("active"));
  botones.forEach((btn) => btn.classList.remove("active"));
  slides[i].classList.add("active");
  botones[i].classList.add("active");
  index = i;
}

function nextSlide() {
  index = (index + 1) % slides.length;
  showSlide(index);
}

// Cambiar al hacer clic en los botones
botones.forEach((btn) => {
  btn.addEventListener("click", () => {
    clearInterval(intervalo); // reinicia el carrusel al hacer clic
    showSlide(parseInt(btn.dataset.index));
    intervalo = setInterval(nextSlide, 5000);
  });
});

// Mostrar primer slide al cargar
showSlide(index);
