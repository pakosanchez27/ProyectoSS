/*-- ---------------------------------------------------------- PRINCIPAL ---------------------------------------------------------- --*/

/* ===== ANIMACIÓN PENTÁGONOS ===== */

const pentagonImages = [
  ["PS-img-1.png", "PS-img-6.png", "PS-img-5.png"],
  ["PS-img-2.png", "PS-img-5.png", "PS-img-4.png"],
  ["PS-img-3.png", "PS-img-4.png", "PS-img-2.png"],
  ["PS-img-4.png", "PS-img-3.png", "PS-img-1.png"],
  ["PS-img-5.png", "PS-img-2.png", "PS-img-6.png"],
  ["PS-img-6.png", "PS-img-1.png", "PS-img-3.png"],
];

const pentagonTexts = [
  [
    "Pequeñas acciones puedes prevenir<br>grandes riesgos.",
    "Aprender a proteger tu hogar<br>y tu entorno reduce riesgos.",
    "Estar consciente de lo que sucede<br>a tu alrededor te ayuda a prevenir.",
  ],
  [
    "Conoce cómo protegerte en casa,<br>en la calle o ante una emergencia.",
    "Genera tranquilidad para ti<br>y tu familia.",
    "Ayuda a cuidar a quienes te rodean.",
  ],
  [
    "Prevención empieza por pequeñas<br>acciones diarias.",
    "Aprender hábitos de seguridad<br>reduce riesgos.",
    "Estar atento a tu entorno<br>previene incidentes.",
  ],
  [
    "Involucra a tu familia<br>en prácticas seguras.",
    "Conocer riesgos comunes<br>ayuda a evitarlos.",
    "Educación y conciencia<br>mejoran tu seguridad.",
  ],
  [
    "Mantén tu hogar protegido<br>con medidas simples.",
    "Saber qué hacer en emergencias<br>reduce daños.",
    "Detecta señales de alerta<br>y actúa rápido.",
  ],
  [
    "Cada acción cuenta<br>para tu seguridad.",
    "Estar preparado<br>evita riesgos innecesarios.",
    "Cuidar a los demás<br>refuerza la prevención.",
  ],
];

// Seleccionamos elementos de imágenes y textos
const pentagonElements = document.querySelectorAll(".PS-div-pentagonos > img");
const textElements = document.querySelectorAll(".PS-div-tex-1 > .PS-tex-1");

// Animación con setInterval
pentagonElements.forEach((img, index) => {
  let i = 0;
  setInterval(() => {
    i = (i + 1) % pentagonImages[index].length;

    // Cambiamos la imagen usando la variable BASE_IMG_URL que definimos en HTML
    img.src = BASE_IMG_URL + pentagonImages[index][i];

    // Cambiamos el texto si existe
    if (textElements[index]) {
      textElements[index].innerHTML = pentagonTexts[index][i];
    }
  }, 5000);
});

/*-- ---------------------------------------------------------- CASA  ---------------------------------------------------------- --*/

// ===== RENDERER =====
const canvasCasa = document.getElementById("lienzo-casa");
const rendererCasa = new THREE.WebGLRenderer({
  canvas: canvasCasa,
  antialias: true,
  alpha: true,
});
rendererCasa.setSize(window.innerWidth, window.innerHeight);

const sceneCasa = new THREE.Scene();

const cameraCasa = new THREE.PerspectiveCamera(
  60,
  window.innerWidth / window.innerHeight,
  0.1,
  1000
);
cameraCasa.position.set(12, 8, 12);
cameraCasa.lookAt(0, 2, 0);

sceneCasa.add(new THREE.AmbientLight(0xffffff, 0.5));
const dirLightCasa = new THREE.DirectionalLight(0xffffff, 0.8);
dirLightCasa.position.set(5, 10, 5);
sceneCasa.add(dirLightCasa);

// ===== CASA =====
const casa = new THREE.Group();

// Paredes
const paredesGeo = new THREE.BoxGeometry(4, 3, 4);
const paredesMat = new THREE.MeshStandardMaterial({
  color: "rgba(247,233,255,1)",
});
const paredes = new THREE.Mesh(paredesGeo, paredesMat);
casa.add(paredes);

// Techo
const techoGeo = new THREE.ConeGeometry(3, 2, 4);
const techoMat = new THREE.MeshStandardMaterial({
  color: 0xfdfb93,
});
const techo = new THREE.Mesh(techoGeo, techoMat);
techo.position.y = 2.5;
techo.rotation.y = Math.PI / 4;
casa.add(techo);

// Puerta
const puertaGeo = new THREE.BoxGeometry(1, 2, 0.1);
const puertaMat = new THREE.MeshStandardMaterial({
  color: "#654",
});
const puerta = new THREE.Mesh(puertaGeo, puertaMat);
puerta.position.set(0, -0.5, 2.05);
casa.add(puerta);

// Cerrojo dorado
const cerrojoGeo = new THREE.BoxGeometry(0.2, 0.4, 0.1);
const cerrojoMat = new THREE.MeshStandardMaterial({
  color: 0xffd700,
});
const cerrojo = new THREE.Mesh(cerrojoGeo, cerrojoMat);
cerrojo.position.set(0.35, 0, 0.05);
puerta.add(cerrojo);

// Ventanas dobles
const ventanaGeo = new THREE.BoxGeometry(0.5, 1, 0.1);
const ventanaMat = new THREE.MeshStandardMaterial({
  color: "#87ceeb",
  transparent: true,
  opacity: 0.7,
});

// Ventana 1
const ventana1Group = new THREE.Group();
const ventana1Izq = new THREE.Mesh(ventanaGeo, ventanaMat);
ventana1Izq.position.x = -0.25;
ventana1Group.add(ventana1Izq);
const ventana1Der = new THREE.Mesh(ventanaGeo, ventanaMat);
ventana1Der.position.x = 0.25;
ventana1Group.add(ventana1Der);
ventana1Group.position.set(-1.2, 0.5, 2.05);
casa.add(ventana1Group);

// Ventana 2
const ventana2Group = new THREE.Group();
const ventana2Izq = new THREE.Mesh(ventanaGeo, ventanaMat);
ventana2Izq.position.x = -0.25;
ventana2Group.add(ventana2Izq);
const ventana2Der = new THREE.Mesh(ventanaGeo, ventanaMat);
ventana2Der.position.x = 0.25;
ventana2Group.add(ventana2Der);
ventana2Group.position.set(1.2, 0.5, 2.05);
casa.add(ventana2Group);

// Cámara vigilancia
const camaraGeo = new THREE.CylinderGeometry(0.15, 0.15, 0.4, 16);
const camaraMat = new THREE.MeshStandardMaterial({
  color: 0x555555,
});
const camara = new THREE.Mesh(camaraGeo, camaraMat);

const lenteGeo = new THREE.CircleGeometry(0.12, 16);
const lenteMat = new THREE.MeshStandardMaterial({
  color: 0x000000,
});
const lente = new THREE.Mesh(lenteGeo, lenteMat);
lente.rotation.y = Math.PI / 2;
lente.position.set(0.2, 0, 0);

const camaraGroup = new THREE.Group();
camaraGroup.add(camara);
camaraGroup.add(lente);
camaraGroup.position.set(2.05, 1.2, 1);
camaraGroup.rotation.z = Math.PI / 8;
casa.add(camaraGroup);

// Escalar casa
casa.scale.set(1.7, 2, 2);
casa.position.y = -2;
sceneCasa.add(casa);

// Calendario
const calendario = new THREE.Group();
const baseGeo = new THREE.BoxGeometry(2, 2.5, 0.1);
const baseMat = new THREE.MeshStandardMaterial({
  color: 0xffffff,
});
const base = new THREE.Mesh(baseGeo, baseMat);
calendario.add(base);

const headerGeo = new THREE.BoxGeometry(2, 0.5, 0.11);
const headerMat = new THREE.MeshStandardMaterial({
  color: 0xff6f61,
});
const header = new THREE.Mesh(headerGeo, headerMat);
header.position.y = 1;
calendario.add(header);

const lineMat = new THREE.MeshStandardMaterial({
  color: 0xcccccc,
});
for (let i = 0; i < 5; i++) {
  const hLineGeo = new THREE.BoxGeometry(1.8, 0.02, 0.12);
  const hLine = new THREE.Mesh(hLineGeo, lineMat);
  hLine.position.y = 0.75 - i * 0.4;
  calendario.add(hLine);
}
for (let j = 0; j < 6; j++) {
  const vLineGeo = new THREE.BoxGeometry(0.02, 1.8, 0.12);
  const vLine = new THREE.Mesh(vLineGeo, lineMat);
  vLine.position.set(-0.85 + j * 0.34, -0.25, 0);
  calendario.add(vLine);
}
calendario.position.set(0, 2, 0);
calendario.visible = false;
casa.add(calendario);

// Silueta visitante
const visitante = new THREE.Group();
// Cabeza
const cabezaGeo = new THREE.SphereGeometry(0.2, 16, 16);
const cabezaMat = new THREE.MeshStandardMaterial({
  color: 0xfff1c7,
});
const cabeza = new THREE.Mesh(cabezaGeo, cabezaMat);
cabeza.position.y = 0.6;
visitante.add(cabeza);

// Cuerpo
const cuerpoGeo = new THREE.CylinderGeometry(0.15, 0.2, 0.5, 16);
const cuerpoMat = new THREE.MeshStandardMaterial({
  color: 0x8fcb7e,
});
const cuerpo = new THREE.Mesh(cuerpoGeo, cuerpoMat);
cuerpo.position.y = 0.2;
visitante.add(cuerpo);

// Piernas
const piernaGeo = new THREE.CylinderGeometry(0.05, 0.05, 0.3, 8);
const piernaPieMat = new THREE.MeshStandardMaterial({
  color: 0x4a6fa5,
});
const piernaIzq = new THREE.Mesh(piernaGeo, piernaPieMat);
piernaIzq.position.set(-0.07, -0.15, 0);
visitante.add(piernaIzq);
const piernaDer = new THREE.Mesh(piernaGeo, piernaPieMat);
piernaDer.position.set(0.07, -0.15, 0);
visitante.add(piernaDer);

// Brazos
const brazoGeo = new THREE.CylinderGeometry(0.05, 0.05, 0.3, 8);
const brazoIzq = new THREE.Mesh(brazoGeo, cabezaMat);
brazoIzq.position.set(-0.2, 0.35, 0);
brazoIzq.rotation.z = Math.PI / 8;
visitante.add(brazoIzq);
const brazoDer = new THREE.Mesh(brazoGeo, cabezaMat);
brazoDer.position.set(0.2, 0.35, 0);
brazoDer.rotation.z = -Math.PI / 8;
visitante.add(brazoDer);

visitante.position.set(0, -0.5, 3);
visitante.scale.set(1.5, 1.5, 1.5);
casa.add(visitante);

// ===== ICONO MENSAJE BLOQUEADO =====
const mensajeGroup = new THREE.Group();
const sobreGeo = new THREE.BoxGeometry(0.6, 0.4, 0.05);
const sobreMat = new THREE.MeshStandardMaterial({
  color: 0xffffff,
});
const sobre = new THREE.Mesh(sobreGeo, sobreMat);
mensajeGroup.add(sobre);

const pliegueGeo = new THREE.ConeGeometry(0.3, 0.2, 3);
const pliegueMat = new THREE.MeshStandardMaterial({
  color: 0xe0e0e0,
});
const pliegue = new THREE.Mesh(pliegueGeo, pliegueMat);
pliegue.rotation.z = Math.PI;
pliegue.position.set(0, 0.2, 0);
mensajeGroup.add(pliegue);

const candadoGeo = new THREE.BoxGeometry(0.15, 0.2, 0.05);
const candadoMat = new THREE.MeshStandardMaterial({
  color: 0xffd700,
});
const candado = new THREE.Mesh(candadoGeo, candadoMat);
candado.position.set(0, -0.1, 0.03);
mensajeGroup.add(candado);

const arcoGeo = new THREE.TorusGeometry(0.08, 0.02, 8, 20, Math.PI);
const arco = new THREE.Mesh(arcoGeo, candadoMat);
arco.rotation.z = Math.PI / 2;
arco.position.set(0, 0, 0.03);
mensajeGroup.add(arco);

mensajeGroup.position.set(3, 1.5, 1);
mensajeGroup.scale.set(1.5, 1.5, 1.5);
casa.add(mensajeGroup);

// ===== VARIABLES ANIMACIÓN =====
let abrir = false;
let abrirTecho = false;
let targetZ = 3,
  targetScale = 1.5;
let targetMensajeZ = 3,
  targetMensajeScale = 1.5;

// ===== ANIMACIÓN =====
function animate() {
  requestAnimationFrame(animate);

  // Puerta y ventanas
  if (abrir) {
    if (puerta.rotation.y > -Math.PI / 2) puerta.rotation.y -= 0.05;
    if (ventana1Izq.rotation.y < Math.PI / 2) ventana1Izq.rotation.y += 0.05;
    if (ventana1Der.rotation.y > -Math.PI / 2) ventana1Der.rotation.y -= 0.05;
    if (ventana2Izq.rotation.y < Math.PI / 2) ventana2Izq.rotation.y += 0.05;
    if (ventana2Der.rotation.y > -Math.PI / 2) ventana2Der.rotation.y -= 0.05;
  } else {
    if (puerta.rotation.y < 0) puerta.rotation.y += 0.05;
    if (ventana1Izq.rotation.y > 0) ventana1Izq.rotation.y -= 0.05;
    if (ventana1Der.rotation.y < 0) ventana1Der.rotation.y += 0.05;
    if (ventana2Izq.rotation.y > 0) ventana2Izq.rotation.y -= 0.05;
    if (ventana2Der.rotation.y < 0) ventana2Der.rotation.y += 0.05;
  }

  // Techo/calendario
  if (abrirTecho) {
    if (techo.position.y < 5) techo.position.y += 0.05;
    if (calendario.position.y < 2.5) calendario.position.y += 0.05;
    calendario.visible = true;
  } else {
    if (techo.position.y > 2.5) techo.position.y -= 0.05;
    if (calendario.position.y > 2) calendario.position.y -= 2;
    if (techo.position.y <= 3.5) calendario.visible = false;
  }

  // Animación visitante
  visitante.position.z += (targetZ - visitante.position.z) * 0.05;
  visitante.scale.lerp(
    new THREE.Vector3(targetScale, targetScale, targetScale),
    0.05
  );

  // Animación mensaje bloqueado
  mensajeGroup.position.z += (targetMensajeZ - mensajeGroup.position.z) * 0.05;
  mensajeGroup.scale.lerp(
    new THREE.Vector3(
      targetMensajeScale,
      targetMensajeScale,
      targetMensajeScale
    ),
    0.05
  );

  rendererCasa.render(sceneCasa, cameraCasa);
}
animate();

// ===== ROTACIÓN CURSOR =====
document.addEventListener("mousemove", (e) => {
  let x = (e.clientX / window.innerWidth - 0.5) * 2;
  let y = (e.clientY / window.innerHeight - 0.5) * 2;
  casa.rotation.y = x * 0.5;
  casa.rotation.x = -y * 0.2;
});

// ===== RESIZE =====
window.addEventListener("resize", () => {
  cameraCasa.aspect = window.innerWidth / window.innerHeight;
  cameraCasa.updateProjectionMatrix();
  rendererCasa.setSize(window.innerWidth, window.innerHeight);
});

// ===== EVENTOS TEXTO =====
// Abrir puerta/ventanas
const num1 = document.querySelector(".PS-nums-1");
const tex3 = document.querySelector(".PS-tex-3");
[num1, tex3].forEach((el) => {
  el.addEventListener("mouseenter", () => (abrir = true));
  el.addEventListener("mouseleave", () => (abrir = false));
});

// Abrir techo/calendario
const num2 = document.querySelector(".PS-nums-2");
const tex4 = document.querySelector(".PS-tex-4");
[num2, tex4].forEach((el) => {
  el.addEventListener("mouseenter", () => (abrirTecho = true));
  el.addEventListener("mouseleave", () => (abrirTecho = false));
});

// Zoom cámara/cerrojo
const num3 = document.querySelector(".PS-nums-3");
const tex5 = document.querySelector(".PS-tex-5");
[num3, tex5].forEach((el) => {
  el.addEventListener("mouseenter", () => {
    camaraGroup.scale.set(1.5, 1.5, 1.5);
    cerrojo.scale.set(1.5, 1.5, 1.5);
  });
  el.addEventListener("mouseleave", () => {
    camaraGroup.scale.set(1, 1, 1);
    cerrojo.scale.set(1, 1, 1);
  });
});

// Zoom visitante
const num4 = document.querySelector(".PS-nums-4");
const tex6 = document.querySelector(".PS-tex-6");
[num4, tex6].forEach((el) => {
  el.addEventListener("mouseenter", () => {
    targetZ = 2.5;
    targetScale = 1.7;
  });
  el.addEventListener("mouseleave", () => {
    targetZ = 3;
    targetScale = 1.5;
  });
});

// Zoom mensaje bloqueado
const num5 = document.querySelector(".PS-nums-5");
const tex7 = document.querySelector(".PS-tex-7");
[num5, tex7].forEach((el) => {
  el.addEventListener("mouseenter", () => {
    targetMensajeZ = 4;
    targetMensajeScale = 2;
  });
  el.addEventListener("mouseleave", () => {
    targetMensajeZ = 3;
    targetMensajeScale = 1.5;
  });
});

// ===== ESCALA RESPONSIVA =====
function ajustarEscalaCasa() {
  const ancho = window.innerWidth;

  if (ancho < 600) {
    casa.scale.set(1, 1, 1); // más pequeña para móvil
    cameraCasa.position.set(8, 6, 8);
  } else if (ancho < 1024) {
    casa.scale.set(1.2, 1.5, 1.2); // tablet
    cameraCasa.position.set(10, 7, 10);
  } else {
    casa.scale.set(1.7, 2, 2); // escritorio (por defecto)
    cameraCasa.position.set(12, 8, 12);
  }
  cameraCasa.lookAt(0, 2, 0);
}

// Ejecutar al cargar y al redimensionar
ajustarEscalaCasa();
window.addEventListener("resize", ajustarEscalaCasa);

/*-- ---------------------------------------------------------- PIRAMIDE  ---------------------------------------------------------- --*/
(function () {
  const canvasPiramide = document.getElementById("lienzo-piramide");
  const rendererPiramide = new THREE.WebGLRenderer({
    canvas: canvasPiramide,
    antialias: true,
    alpha: true,
  });
  const ancho = 800;
  const alto = 1000;

  rendererPiramide.setSize(ancho, alto);

  const scenePiramide = new THREE.Scene();

  const cameraPiramide = new THREE.PerspectiveCamera(
    60,
    window.innerWidth / window.innerHeight,
    0.1,
    1000
  );

  cameraPiramide.position.set(5, 5, 5);
  cameraPiramide.lookAt(0, 0, 0);

  const light = new THREE.DirectionalLight(0xffffff, 1);
  light.position.set(5, 5, 5);
  scenePiramide.add(light);
  scenePiramide.add(new THREE.AmbientLight(0x404040));

  const height = 5;
  const base = 6;

  const vertices = [
    [-base / 2, 0, -base / 2],
    [base / 2, 0, -base / 2],
    [base / 2, 0, base / 2],
    [-base / 2, 0, base / 2],
  ];
  const apex = [0, height, 0];

  const images = [
    "asset/img/PS-img-1.png",
    "asset/img/PS-img-2.png",
    "asset/img/PS-img-3.png",
    "asset/img/PS-img-4.png",
    "asset/img/PS-img-5.png",
  ];

  const loader = new THREE.TextureLoader();
  const pyramidGroup = new THREE.Group();

  for (let i = 0; i < 4; i++) {
    const next = (i + 1) % 4;
    const geometry = new THREE.BufferGeometry();
    const verticesArray = new Float32Array([
      ...apex,
      ...vertices[i],
      ...vertices[next],
    ]);
    geometry.setAttribute(
      "position",
      new THREE.BufferAttribute(verticesArray, 3)
    );

    const uvs = new Float32Array([0.5, 1.0, 0.0, 0.0, 1.0, 0.0]);
    geometry.setAttribute("uv", new THREE.BufferAttribute(uvs, 2));
    geometry.computeVertexNormals();

    const material = new THREE.MeshStandardMaterial({
      map: loader.load(images[i]),
      side: THREE.DoubleSide,
    });

    const mesh = new THREE.Mesh(geometry, material);
    pyramidGroup.add(mesh);
  }

  // Base
  const baseGeometry = new THREE.PlaneGeometry(base, base);
  const baseMaterial = new THREE.MeshStandardMaterial({
    map: loader.load(images[4]),
    side: THREE.DoubleSide,
  });
  const baseMesh = new THREE.Mesh(baseGeometry, baseMaterial);
  baseMesh.rotation.x = -Math.PI / 2;
  pyramidGroup.add(baseMesh);

  scenePiramide.add(pyramidGroup);
  pyramidGroup.position.y = -2; // prueba con -2, -5, -10 según qué tan abajo la quieras

  let mouseX = 0,
    mouseY = 0;
  window.addEventListener("mousemove", (event) => {
    mouseX = (event.clientX / window.innerWidth) * 2 - 1;
    mouseY = (event.clientY / window.innerHeight) * 2 - 1;
  });

  function animatePiramide() {
    requestAnimationFrame(animatePiramide);

    // 🔹 Rotación automática constante
    pyramidGroup.rotation.y += 0.01; // eje Y
    pyramidGroup.rotation.x += 0.005; // eje X (puedes quitarlo si no quieres que "tambalee")

    // 🔹 Movimiento adicional por mouse (suave)
    pyramidGroup.rotation.y += mouseX * 0.02;
    pyramidGroup.rotation.x += mouseY * 0.01;

    rendererPiramide.render(scenePiramide, cameraPiramide);
  }
  animatePiramide();

  window.addEventListener("resize", () => {
    cameraPiramide.aspect = window.innerWidth / window.innerHeight;
    cameraPiramide.updateProjectionMatrix();
    rendererPiramide.setSize(window.innerWidth, window.innerHeight);
  });

  // ===== ESCALA RESPONSIVA PIRÁMIDE =====
function ajustarEscalaPiramide() {
  const ancho = window.innerWidth;

  if (ancho < 600) {
    pyramidGroup.scale.set(0.4, 0.4, 0.4); // móvil
    cameraPiramide.position.set(4, 4, 4);
  } else if (ancho < 1024) {
    pyramidGroup.scale.set(0.6, 0.6, 0.6); // tablet
    cameraPiramide.position.set(5, 5, 5);
  } else {
    pyramidGroup.scale.set(1, 1, 1); // escritorio
    cameraPiramide.position.set(6, 6, 6);
  }

  cameraPiramide.lookAt(0, 0, 0);
}

// Ejecutar al cargar y al redimensionar
ajustarEscalaPiramide();
window.addEventListener("resize", ajustarEscalaPiramide);
})();


/*-- ---------------------------------------------------------- CARRETERA ---------------------------------------------------------- --*/

/* const path = document.getElementById("line"); 
const car = document.getElementById("car");

const pathLength = path.getTotalLength();

window.addEventListener("scroll", () => {
    let scrollTop = window.scrollY;
    let docHeight = document.body.scrollHeight - window.innerHeight;
    let progress = scrollTop / docHeight;

    let minProgress = 0.05; 
    let maxProgress = 0.95;  
    let mappedProgress = minProgress + progress * (maxProgress - minProgress);

    let point = path.getPointAtLength(mappedProgress * pathLength);

    car.setAttribute("transform", `translate(${point.x}, ${point.y})`);
});
 */
const path = document.getElementById("line");
const car = document.getElementById("car");
const pathLength = path.getTotalLength();

window.addEventListener("scroll", () => {
  const container = document.querySelector(".PS-div-img-5");
  const rect = container.getBoundingClientRect();
  const containerHeight = rect.height;

  // progreso relativo solo mientras el div está visible
  let scrollProgress = Math.min(
    Math.max(-rect.top / (containerHeight - window.innerHeight), 0),
    1
  );

  // punto en el path
  const point = path.getPointAtLength(scrollProgress * pathLength);

  // centramos el carro verticalmente y lo bajamos un poco
  const bbox = car.getBBox();
  const offset = 55; // ajusta este valor para mover el carro hacia abajo o arriba
  let y = point.y - bbox.height / 2 + offset;

  car.setAttribute("transform", `translate(${point.x}, ${y})`);
});
