document.querySelectorAll(".Adm-S-opc-1").forEach((toggle) => {
  toggle.addEventListener("click", function () {
    this.parentElement.classList.toggle("open");
  });
});

/*-- ------------------------------------------- PELOTAS ------------------------------------------- --*/

const pelotas = document.querySelectorAll(".pelota");
const contenedor = document.querySelector(".S_contenedor_pelotas");
const limites = contenedor.getBoundingClientRect();

const props = [
  {
    x: 10,
    y: 10,
    vx: 4,
    vy: 2,
  },
  {
    x: 200,
    y: 150,
    vx: 3,
    vy: 3,
  },
  {
    x: 350,
    y: 50,
    vx: 2,
    vy: 4,
  },
];

const colores = ["red", "blue", "green", "brown", "navy", "gray"];

const textos = document.querySelectorAll(
  ".S-tit-3-Mision, .S-par-2, .S-tit-4-Vision, .S-par-3, .S-tit-5-Valores, .S-par-4 li"
);

function mover() {
  pelotas.forEach((pelota, i) => {
    const p = props[i];
    const size = 80;

    p.x += p.vx;
    p.y += p.vy;

    if (p.x <= 0 || p.x + size >= limites.width) p.vx *= -1;
    if (p.y <= 0 || p.y + size >= limites.height) p.vy *= -1;

    const rectPelota = {
      left: p.x + limites.left,
      right: p.x + size + limites.left,
      top: p.y + limites.top,
      bottom: p.y + size + limites.top,
    };

    textos.forEach((el) => {
      const rectTexto = el.getBoundingClientRect();
      if (
        rectPelota.left < rectTexto.right &&
        rectPelota.right > rectTexto.left &&
        rectPelota.top < rectTexto.bottom &&
        rectPelota.bottom > rectTexto.top
      ) {
        el.style.color = colores[Math.floor(Math.random() * colores.length)];
        pelota.style.background =
          colores[Math.floor(Math.random() * colores.length)];
      }
    });

    pelota.style.transform = `translate(${p.x}px, ${p.y}px)`;
  });

  requestAnimationFrame(mover);
}

mover();

/*-- ------------------------------------------- PRINCIPAL ------------------------------------------- --*/

let slides = document.querySelectorAll(".slide");
let index = 0;

function showSlide() {
  slides.forEach((s, i) => s.classList.remove("active"));
  slides[index].classList.add("active");
  index = (index + 1) % slides.length;
}

showSlide();

setInterval(showSlide, 5000);