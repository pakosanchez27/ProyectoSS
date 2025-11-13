function updateCircle(id, value, max) {
  let percent = (value / max) * 100;
  let degrees = (percent / 100) * 360;
  document.getElementById(id).style.setProperty("--percent", degrees + "deg");
  document.getElementById(id).textContent =
    max === 100 ? Math.round(percent) + "%" : "+" + value;
}

updateCircle("FP-cir-1", 20, 1000); 
updateCircle("FP-cir-2", 65, 100);
updateCircle("FP-cir-3", 45, 50);

/* ------------------------------------------------------------------------ ¿PORQUE POLICIA? ------------------------------------------------------------------------ --*/

const divContainer = document.querySelector(".FP-inf-6");

const scene = new THREE.Scene();
scene.background = new THREE.Color(0xffffff);

// ---------------- CÁMARA ----------------
const camera = new THREE.PerspectiveCamera(
  45,
  divContainer.clientWidth / divContainer.clientHeight,
  0.1,
  1000
);
camera.position.set(4, 4, 6);
camera.lookAt(0, 2, 0);

// ---------------- RENDERER ----------------
const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
renderer.setSize(divContainer.clientWidth, divContainer.clientHeight);
divContainer.appendChild(renderer.domElement);

// ---------- LUCES ----------
const directionalLight = new THREE.DirectionalLight(0xffffff, 2);
directionalLight.position.set(5, 10, 7);
scene.add(directionalLight);

const ambientLight = new THREE.AmbientLight(0xffffff, 1.5);
scene.add(ambientLight);

// ---------------- MATERIALES ----------------
const loader = new THREE.TextureLoader();

function createShinyMaterial(url) {
  return new THREE.MeshPhongMaterial({
    map: loader.load(url),
    shininess: 150,
    specular: 0xffffff,
    emissive: 0x444444,
  });
}

// ---------------- GRUPO ----------------
const figureGroup = new THREE.Group();
scene.add(figureGroup);

// ---------------- FUNCIÓN RECTÁNGULOS CON HUECO ----------------
function createHollowRect(width, height, depth, holeSize, material) {
  const shape = new THREE.Shape();
  shape.moveTo(-width / 2, -height / 2);
  shape.lineTo(-width / 2, height / 2);
  shape.lineTo(width / 2, height / 2);
  shape.lineTo(width / 2, -height / 2);
  shape.lineTo(-width / 2, -height / 2);

  const hole = new THREE.Path();
  const hs = holeSize / 2;
  hole.moveTo(-hs, -hs);
  hole.lineTo(-hs, hs);
  hole.lineTo(hs, hs);
  hole.lineTo(hs, -hs);
  hole.lineTo(-hs, -hs);
  shape.holes.push(hole);

  const geometry = new THREE.ExtrudeGeometry(shape, { depth: depth, bevelEnabled: false });
  return new THREE.Mesh(geometry, material);
}

// ---------------- BASE ----------------
const baseMaterial = createShinyMaterial("asset/img/PS-img-21.png");
const base = createHollowRect(3, 3, 1, 2, baseMaterial);
base.position.set(0, 0.5, 0);
base.rotation.x = -250 * Math.PI / 180;
base.rotation.z = 10 * Math.PI / 180;
figureGroup.add(base);

// ---------------- RECTÁNGULO INTERMEDIO ----------------
const rectMaterial = createShinyMaterial("asset/img/PS-img-22.png");
const rect = createHollowRect(2, 2, 0.8, 1.1, rectMaterial);
rect.position.set(0, 0.5, 0);
rect.rotation.x = -250 * Math.PI / 180;
rect.rotation.z = 10 * Math.PI / 180;
figureGroup.add(rect);

// ---------------- CUBO SUPERIOR ----------------
const cubeMaterial = createShinyMaterial("asset/img/PS-img-23.png");
const cube = new THREE.Mesh(new THREE.BoxGeometry(1.1, 1.4, 1.2), cubeMaterial);
cube.position.set(0, -0.1, 0);
cube.rotation.x = -250 * Math.PI / 180;
cube.rotation.z = 10 * Math.PI / 180;
figureGroup.add(cube);

// ---------------- MOVER EL GRUPO ----------------
figureGroup.position.x = -5;

// ---------------- ANIMACIÓN ----------------
const desplazamientoX = 0;
const desplazamientoY1 = 1.6;

const rectDepth = 0.5;
const cubeHeight = 5;
const rectBottomY = rect.position.y - rectDepth / 2;
const cubeTargetY = rectBottomY + cubeHeight / 2;

const tl = gsap.timeline({ repeat: -1, yoyo: true });

tl.to(rect.position, { y: desplazamientoY1, duration: 2, delay: 0.5 }, 0);
tl.to(cube.position, { y: cubeTargetY, duration: 2, delay: 0.5 }, 0);

// ---------------- RENDER LOOP ----------------
function animate() {
  requestAnimationFrame(animate);
  renderer.render(scene, camera);
}
animate();

// ---------------- AJUSTE AL TAMAÑO ----------------
window.addEventListener("resize", () => {
  camera.aspect = divContainer.clientWidth / divContainer.clientHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(divContainer.clientWidth, divContainer.clientHeight);
});

function ajustarEscalaFigura() {
  const ancho = window.innerWidth;

  if (ancho < 600) {
    // 📱 Móvil
    figureGroup.scale.set(0.4, 0.4, 0.4);
    camera.position.set(3, 3, 4);
  } else if (ancho < 1024) {
    // 💻 Tablet
    figureGroup.scale.set(0.5, 0.5, 0.5);
    camera.position.set(3.5,3, 2);
  } else {
    // 🖥️ Escritorio
    figureGroup.scale.set(1, 1, 1);
    camera.position.set(4, 4, 6);
  }

  camera.lookAt(0, 2, 0);
}

// Ejecutar al cargar y al redimensionar
ajustarEscalaFigura();
window.addEventListener("resize", ajustarEscalaFigura);

function manejarCanvasResponsivo() {
  const ancho = window.innerWidth;
  const contenedor = document.querySelector(".FP-inf-6");
  const canvas = contenedor?.querySelector("canvas");

  if (!canvas) return; // si no existe, salir

  if (ancho < 600) {
    // 📱 Pantalla pequeña: ocultar canvas
    canvas.style.display = "none";
  } else {
    // 💻 Pantalla mediana/grande: mostrar canvas
    canvas.style.display = "block";
  }
}

// Ejecutar al cargar y al cambiar tamaño
manejarCanvasResponsivo();
window.addEventListener("resize", manejarCanvasResponsivo);
