<?= view('head') ?>

<body>
    <?= view('header') ?>
    <!-- -------------------------------------------------------- CASA -------------------------------------------------------- -->

    <!-- <canvas id="lienzo"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/three@0.152.0/build/three.min.js"></script>
    <script>
    const canvas = document.getElementById("lienzo");
    const renderer = new THREE.WebGLRenderer({
        canvas,
        antialias: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);

    const scene = new THREE.Scene();
    scene.background = new THREE.Color("#aee");

    // Cámara
    const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.set(6, 6, 10);
    camera.lookAt(0, 0, 0);

    // Luz
    const ambient = new THREE.AmbientLight(0xffffff, 0.6);
    scene.add(ambient);

    const dirLight = new THREE.DirectionalLight(0xffffff, 1);
    dirLight.position.set(5, 10, 5);
    scene.add(dirLight);

    // ===== CASA =====
    const casa = new THREE.Group();

    // Paredes
    const paredesGeo = new THREE.BoxGeometry(4, 3, 4);
    const paredesMat = new THREE.MeshStandardMaterial({
        color: "rgba(247, 233, 255, 1)"
    });
    const paredes = new THREE.Mesh(paredesGeo, paredesMat);
    casa.add(paredes);

    // Techo amarillo
    const techoGeo = new THREE.ConeGeometry(3, 2, 4);
    const techoMat = new THREE.MeshStandardMaterial({
        color: 0xfdfb93
    });
    const techo = new THREE.Mesh(techoGeo, techoMat);
    techo.position.y = 2.5;
    techo.rotation.y = Math.PI / 4;
    casa.add(techo);

    // Puerta
    const puertaGeo = new THREE.BoxGeometry(1, 2, 0.1);
    const puertaMat = new THREE.MeshStandardMaterial({
        color: "#654"
    });
    const puerta = new THREE.Mesh(puertaGeo, puertaMat);
    puerta.position.set(0, -0.5, 2.05);
    casa.add(puerta);

    // Ventanas (2 frontales)
    const ventanaGeo = new THREE.BoxGeometry(1, 1, 0.1);
    const ventanaMat = new THREE.MeshStandardMaterial({
        color: "#87ceeb",
        transparent: true,
        opacity: 0.7
    });
    const ventana1 = new THREE.Mesh(ventanaGeo, ventanaMat);
    ventana1.position.set(-1.2, 0.5, 2.05);
    casa.add(ventana1);

    const ventana2 = new THREE.Mesh(ventanaGeo, ventanaMat);
    ventana2.position.set(1.2, 0.5, 2.05);
    casa.add(ventana2);

    // Posición general de la casa
    casa.position.y = 1.5; // Centrar sobre el piso
    scene.add(casa);

    // ===== ANIMACIÓN =====
    function animate() {
        requestAnimationFrame(animate);
        renderer.render(scene, camera);
    }
    animate();

    // ===== ROTACIÓN CON CURSOR =====
    document.addEventListener("mousemove", (e) => {
        let x = (e.clientX / window.innerWidth - 0.5) * 2;
        let y = (e.clientY / window.innerHeight - 0.5) * 2;
        casa.rotation.y = x * 0.5;
        casa.rotation.x = -y * 0.2;
    });

    // ===== RESIZE =====
    window.addEventListener("resize", () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
    </script> -->

    <!-- -------------------------------------------------------- OPCION 1 -------------------------------------------------------- -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/three@0.152.0/build/three.min.js"></script>
  <script>
    // Renderizador
    const renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    // Escena
    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0x87ceeb);

    // Cámara
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 100);
    camera.position.set(6, 6, 10);
    camera.lookAt(0, 0, 0);

    // Luces
    const light = new THREE.DirectionalLight(0xffffff, 1);
    light.position.set(5, 10, 5);
    scene.add(light);

    const ambient = new THREE.AmbientLight(0x404040, 1.5);
    scene.add(ambient);

    // Parámetros de la pirámide
    const radioBase = 5;
    const alturaTotal = 5;
    const niveles = 5;
    const gap = 0.3; // separación visible entre niveles

    for (let i = 0; i < niveles; i++) {
      const alturaNivel = alturaTotal / niveles;
      const radioInferior = radioBase * (1 - i / niveles);
      const radioSuperior = radioBase * (1 - (i + 1) / niveles);

      const geometry = new THREE.CylinderGeometry(radioSuperior, radioInferior, alturaNivel, 4, 1);
      const material = new THREE.MeshStandardMaterial({
        color: 0xffd700,
        flatShading: true
      });
      const segmento = new THREE.Mesh(geometry, material);

      // dejar espacio entre niveles
      segmento.position.y = (i * (alturaNivel + gap)) + alturaNivel / 2;
      scene.add(segmento);
    }

    // Animación
    function animate() {
      requestAnimationFrame(animate);
      scene.rotation.y += 0.01; // rotar toda la pirámide
      renderer.render(scene, camera);
    }
    animate();

    // Ajustar tamaño al cambiar ventana
    window.addEventListener("resize", () => {
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    });
  </script> -->

    <!-- -------------------------------------------------------- OPCION 2 -------------------------------------------------------- -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/three@0.152.0/build/three.min.js"></script>
    <script>
    // Renderizador
    const renderer = new THREE.WebGLRenderer({
        antialias: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    // Escena
    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0x87ceeb);

    // Cámara
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 100);
    camera.position.set(6, 6, 10);
    camera.lookAt(0, 0, 0);

    // Luces
    const light = new THREE.DirectionalLight(0xffffff, 1);
    light.position.set(5, 10, 5);
    scene.add(light);

    const ambient = new THREE.AmbientLight(0x404040, 1.5);
    scene.add(ambient);

    // Parámetros de la pirámide
    const radioBase = 5;
    const alturaTotal = 5;
    const niveles = 5;
    const gap = 0.3; // separación visible entre niveles

    for (let i = 0; i < niveles; i++) {
        const alturaNivel = alturaTotal / niveles;
        const radioInferior = radioBase * (1 - i / niveles);
        const radioSuperior = radioBase * (1 - (i + 1) / niveles);

        const geometry = new THREE.CylinderGeometry(radioSuperior, radioInferior, alturaNivel, 4, 1);
        const material = new THREE.MeshStandardMaterial({
            color: 0xffd700,
            flatShading: true
        });
        const segmento = new THREE.Mesh(geometry, material);

        // dejar espacio entre niveles
        segmento.position.y = (i * (alturaNivel + gap)) + alturaNivel / 2;
        scene.add(segmento);
    }

    // Animación
    function animate() {
        requestAnimationFrame(animate);
        scene.rotation.y += 0.01; // rotar toda la pirámide
        renderer.render(scene, camera);
    }
    animate();

    // Ajustar tamaño al cambiar ventana
    window.addEventListener("resize", () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
    </script> -->

    <!-- <canvas id="lienzo"></canvas>

  <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/build/three.min.js"></script>

  <script>
    const canvas = document.getElementById("lienzo");
    const renderer = new THREE.WebGLRenderer({ canvas, antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);

    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0xeeeeee);

    const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.set(5, 5, 5);
    camera.lookAt(0, 0, 0);

    const light = new THREE.DirectionalLight(0xffffff, 1);
    light.position.set(5, 5, 5);
    scene.add(light);
    scene.add(new THREE.AmbientLight(0x404040));

    const height = 3;
    const base = 2;

    const vertices = [
      [-base/2, 0, -base/2],
      [ base/2, 0, -base/2],
      [ base/2, 0,  base/2],
      [-base/2, 0,  base/2]
    ];

    const apex = [0, height, 0];

    const images = [
      "asset/img/PS-img-1.png",
      "asset/img/PS-img-2.png",
      "asset/img/PS-img-3.png",
      "asset/img/PS-img-4.png",
      "asset/img/PS-img-5.png" // base
    ];

    const loader = new THREE.TextureLoader();
    const pyramidGroup = new THREE.Group();

    // Crear los 4 lados
    for (let i = 0; i < 4; i++) {
      const next = (i + 1) % 4;
      const geometry = new THREE.BufferGeometry();
      const verticesArray = new Float32Array([...apex, ...vertices[i], ...vertices[next]]);
      geometry.setAttribute('position', new THREE.BufferAttribute(verticesArray, 3));

      const uvs = new Float32Array([
        0.5, 1.0,
        0.0, 0.0,
        1.0, 0.0
      ]);
      geometry.setAttribute('uv', new THREE.BufferAttribute(uvs, 2));
      geometry.computeVertexNormals();

      const material = new THREE.MeshStandardMaterial({
        map: loader.load(images[i]),
        side: THREE.DoubleSide
      });

      const mesh = new THREE.Mesh(geometry, material);
      pyramidGroup.add(mesh);
    }

    // Base con imagen
    const baseGeometry = new THREE.PlaneGeometry(base, base);
    const baseMaterial = new THREE.MeshStandardMaterial({
      map: loader.load(images[4]),
      side: THREE.DoubleSide
    });
    const baseMesh = new THREE.Mesh(baseGeometry, baseMaterial);
    baseMesh.rotation.x = -Math.PI / 2;
    pyramidGroup.add(baseMesh);

    scene.add(pyramidGroup);

    // Variables para control del mouse
    let mouseX = 0;
    let mouseY = 0;

    window.addEventListener("mousemove", (event) => {
      // Convertir coordenadas del ratón a rango -1 a 1
      mouseX = (event.clientX / window.innerWidth) * 2 - 1;
      mouseY = (event.clientY / window.innerHeight) * 2 - 1;
    });

    function animate() {
      requestAnimationFrame(animate);

      // Pirámide sigue el mouse
      pyramidGroup.rotation.y = mouseX * Math.PI;      // girar horizontal
      pyramidGroup.rotation.x = mouseY * 0.5 * Math.PI; // inclinar vertical

      renderer.render(scene, camera);
    }
    animate();

    window.addEventListener("resize", () => {
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    });
  </script> -->

    <!-- -------------------------------------------------------- SEGURIDAD VIAL -------------------------------------------------------- -->

    <!-- <svg viewBox="100 0 1500 2760">

        <path id="road" d="
        M 370 125
        L 1400 125
        L 1400 625
        L 380 625
        L 380 1125
        L 1400 1125
        L 1400 1625
        L 380 1625
        L 380 2125
        L 1410 2125
        L 1410 2125
        L 1415 2625
    " stroke="black" stroke-width="150" fill="none" stroke-linecap="round" stroke-linejoin="round" />

        <path id="line" d="
        M 370 125
        L 1400 125
        L 1400 625
        L 380 625
        L 380 1125
        L 1400 1125
        L 1400 1625
        L 380 1625
        L 380 2125
        L 1410 2125
        L 1410 2125
        L 1415 2625
    " stroke="white" stroke-width="15" stroke-dasharray="30 30" fill="none" stroke-linecap="round"
            stroke-linejoin="round" />

        <g id="car" transform="translate(0,0)">
            <rect x="-38" y="-75" width="75" height="150" rx="15" ry="15" fill="yellow" stroke="black"
                stroke-width="4" />
            <rect x="-27" y="-68" width="54" height="37" fill="lightblue" stroke="black" stroke-width="1" />
            <rect x="-27" y="55" width="54" height="37" fill="lightblue" stroke="black" stroke-width="1" />
            <rect x="-48" y="-52" width="22" height="37" fill="black" />
            <rect x="26" y="-52" width="22" height="37" fill="black" />
            <rect x="-48" y="37" width="22" height="37" fill="black" />
            <rect x="26" y="37" width="22" height="37" fill="black" />
        </g>

    </svg>

    <script>
    const path = document.getElementById("line");
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
    </script> -->

    <!-- -------------------------------------------------------- SEGURIDAD SISMO -------------------------------------------------------- -->

    <!-- <div class="PS-circle-img">
        <div class="PS-circle-ring"></div>
        <img class="PS-cir-img" src="<?= base_url('/asset/img/PS-img-21.png') ?>" alt="">
        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-22.png') ?>" alt="">
        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-23.png') ?>" alt="">
        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-24.png') ?>" alt="">
        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-25.png') ?>" alt="">
        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-26.png') ?>" alt="">
    </div> -->

    <!-- -------------------------------------------------------- SEGURIDAD PC -------------------------------------------------------- -->

    <!-- <div class="PS-div-img-8">
        <img class="PS-img-8" src="<?= base_url('/asset/img/PS-img-8.png') ?>" alt="">
        <div class="PS-div-croquis">
            <svg width="600" height="400" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
                <path d="M50 350 
                L150 300 
                L200 250 
                L300 300 
                L400 350 
                L450 200 
                L550 250 
                L500 300 
                L400 100 
                L300 150 
                L200 200 
                L150 100 
                L50 150" stroke="#333" stroke-width="3" fill="transparent" stroke-dasharray="1200"
                    stroke-dashoffset="1200">
                    <animate attributeName="stroke-dashoffset" from="1200" to="0" dur="8s" repeatCount="indefinite" />
                </path>
            </svg>
            <div class="person" style="position:absolute; left:50px; top:350px;"></div>
            <div class="person" style="position:absolute; left:150px; top:300px;"></div>
            <div class="person" style="position:absolute; left:200px; top:250px;"></div>
            <div class="person" style="position:absolute; left:300px; top:300px;"></div>
            <div class="person" style="position:absolute; left:400px; top:350px;"></div>
            <div class="person" style="position:absolute; left:450px; top:200px;"></div>
            <div class="person" style="position:absolute; left:550px; top:250px;"></div>
            <div class="person" style="position:absolute; left:500px; top:300px;"></div>
            <div class="person" style="position:absolute; left:400px; top:100px;"></div>
            <div class="person" style="position:absolute; left:300px; top:150px;"></div>
            <div class="person" style="position:absolute; left:200px; top:200px;"></div>
            <div class="person" style="position:absolute; left:150px; top:100px;"></div>
            <div class="person" style="position:absolute; left:50px; top:150px;"></div>
        </div>
    </div>  -->

    <!-- ------------------------------------------------------------------------ FORMACION-INGRESO ------------------------------------------------------------------------ -->

    <!-- <div class="FP-inf-4">
        <h1 class="FP-tit-3">Formación e Ingreso</h1>
        <div class="FP-estad-1">
            <div class="FP-estad-cir">
                <div class="FP-div-1">
                    <div class="FP-circulo-1" id="FP-cir-1" style="--percent: 0deg;">0%</div>
                    <p class="FP-p-7">Cadetes formados desde 2025</p>
                </div>

                <div class="FP-div-1">
                    <div class="FP-circulo-1" id="FP-cir-2" style="--percent: 0deg;">0%</div>
                    <p class="FP-p-7">Egresados que se integran a la corporación</p>
                </div>

                <div class="FP-div-1">
                    <div class="FP-circulo-1" id="FP-cir-3" style="--percent: 0deg;">0%</div>
                    <p class="FP-p-7">Instructores certificados en formación policial</p>
                </div>
            </div>
        </div>
    </div>
    <script>
    function updateCircle(id, value, max) {
        let percent = (value / max) * 100;
        let degrees = (percent / 100) * 360;
        document.getElementById(id).style.setProperty('--percent', degrees + 'deg');
        document.getElementById(id).textContent =
            max === 100 ? Math.round(percent) + '%' : '+' + value;
    }

    updateCircle('FP-cir-1', 20, 1000); 
    updateCircle('FP-cir-2', 65, 100); 
    updateCircle('FP-cir-3', 45, 50); 
    </script> -->

    <!-- ------------------------------------------------------------------------ ¿PORQUE POLICIA? ------------------------------------------------------------------------ -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/three@0.156.0/build/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script>
    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0xffffff);

    const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.set(4, 4, 6);
    camera.lookAt(0, 2, 0);

    const renderer = new THREE.WebGLRenderer({
        antialias: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    // ---------- LUCES ----------
    const directionalLight = new THREE.DirectionalLight(0xffffff, 2); // luz principal más intensa
    directionalLight.position.set(5, 10, 7);
    scene.add(directionalLight);

    const ambientLight = new THREE.AmbientLight(0xffffff, 1.5); // luz ambiental más brillante
    scene.add(ambientLight);

    const loader = new THREE.TextureLoader();

    // Ángulos de inclinación
    const inclinacionX = -Math.PI / -10; // hacia atrás
    const inclinacionZ = Math.PI / 100; // lateral izquierda → derecha

    // ---------- MATERIAL CON BRILLO Y EMISIÓN ----------
    function createShinyMaterial(url) {
        return new THREE.MeshPhongMaterial({
            map: loader.load(url),
            shininess: 150, // brillo especular fuerte
            specular: 0xffffff, // reflejo blanco intenso
            emissive: 0x444444 // ilumina un poco la figura para efecto cristal
        });
    }

    // ---------------- BASE ----------------
    const baseMaterial = createShinyMaterial('<?= base_url("/asset/img/PS-img-12.png") ?>');
    const base = new THREE.Mesh(new THREE.BoxGeometry(3, 0.6, 3), baseMaterial);
    base.position.set(0, 0.5, 0);
    base.rotation.x = inclinacionX;
    base.rotation.z = inclinacionZ;
    scene.add(base);

    // ---------------- RECTÁNGULO ----------------
    const rectMaterial = createShinyMaterial('<?= base_url("/asset/img/PS-img-5.png") ?>');
    const rect = new THREE.Mesh(new THREE.BoxGeometry(2, 0.6, 2), rectMaterial);
    rect.position.set(0, 0.5, 0);
    rect.rotation.x = inclinacionX;
    rect.rotation.z = inclinacionZ;
    scene.add(rect);

    // ---------------- CUBO ----------------
    const cubeMaterial = createShinyMaterial('<?= base_url("/asset/img/PS-img-18.png") ?>');
    const cube = new THREE.Mesh(new THREE.BoxGeometry(1, 1, 1), cubeMaterial);
    cube.position.set(0, 0.5, 0);
    cube.rotation.x = inclinacionX;
    cube.rotation.z = inclinacionZ;
    scene.add(cube);

    // ---------------- ANIMACIÓN SIMÉTRICA INFINITA ----------------
    const desplazamientoX = 0.3;
    const desplazamientoY1 = 1.6;
    const desplazamientoY2 = 3;

    const tl = gsap.timeline({
        repeat: -1,
        yoyo: true
    });

    tl.to(rect.position, {
        y: desplazamientoY1,
        x: desplazamientoX,
        duration: 2,
        delay: 0.5
    }, 0);

    tl.to(cube.position, {
        y: desplazamientoY2,
        x: 2 * desplazamientoX,
        duration: 2,
        delay: 0.5
    }, 0);

    // ---------------- ANIMACIÓN RENDER LOOP ----------------
    function animate() {
        requestAnimationFrame(animate);
        renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
    </script> -->

    <!-- ------------------------------------------------------------------------ NEZA SEGURA ------------------------------------------------------------------------ -->

    <!-- ------------------------------------------------------------------------ NEZA SEGURA ------------------------------------------------------------------------ -->

    <!--     <div class="NS-secciones">
 -->
    <!-- SECCIÓN 1 -->
    <!-- <div class="NS-fondo-1">
            <div class="NS-div-img-1">
                <img class="NS-img-1" src="<?= base_url('/asset/img/NS-img-1.png') ?>" alt="">
            </div>
            <h1 class="NS-tit-1">Neza Segura</h1>
            <h1 class="NS-sub-1">"Tu seguridad, ahora en la palma de tu mano."</h1>
            <p class="NS-p-1">Con la app Neza Segura, puedes reportar emergencias, solicitar ayuda inmediata, hacer
                denuncias anónimas y recibir alertas sísmicas. Conéctate con la Dirección General de Seguridad Ciudadana
                de manera rápida y directa.</p>
            <h1 class="NS-sub-2"> ¿Emergencia? ¡Actúa rápido!</h1>
            <p class="NS-p-2">Descargue Neza Segura y reporta incidentes desde tu celular.
                Protección, apoyo y comunicación directa con el C4.</p>
            <button class="NS-btt-1">Descargar</button>
        </div> -->

    <!-- SECCIÓN 2 -->
    <!-- <div class="NS-fondo-1 oculta">
            <div class="NS-div-img-2">
                <img class="NS-img-2" src="<?= base_url('/asset/img/NS-img-2.png') ?>" alt="">
            </div>
            <h1 class="NS-tit-1">Neza Segura</h1>
            <h1 class="NS-sub-3">¿Qué puedes hacer con la app?</h1>
            <div class="NS-circulos-1">
                <div class="NS-circ-1"></div>
                <div class="NS-circ-2"></div>
                <div class="NS-circ-3"></div>
                <div class="NS-circ-4"></div>
                <div class="NS-circ-5"></div>
            </div>
            <div class="NS-nums">
                <h1 class="NS-nums-1">1</h1>
                <h1 class="NS-nums-2">2</h1>
                <h1 class="NS-nums-3">3</h1>
                <h1 class="NS-nums-4">4</h1>
                <h1 class="NS-nums-5">5</h1>
                <p class="NS-p-3">Activar un botón de pánico en caso de violencia o peligro.</p>
                <p class="NS-p-4">Solicitar ayuda de ambulancias, bomberos o patrullas.</p>
                <p class="NS-p-5">Reportar delitos, maltrato animal o personas desaparecidas.</p>
                <p class="NS-p-6">Recibir alertas sísmicas en tiempo real.</p>
                <p class="NS-p-7">Formar parte de las redes vecinales de seguridad.</p>
            </div>
            <button class="NS-btt-2">Descargar</button>
        </div> -->

    <!-- SECCIÓN 3 -->
    <!-- <div class="NS-fondo-1 oculta">
            <div class="NS-div-img-3">
                <img class="NS-img-3" src="<?= base_url('/asset/img/NS-img-3.png') ?>" alt="">
            </div>
            <h1 class="NS-tit-1">Neza Segura</h1>
            <h1 class="NS-sub-4">¿Por qué usar Neza Segura?</h1>
            <div class="NS-cubos-1">
                <div class="NS-cubo-1"></div>
                <div class="NS-cubo-2"></div>
                <div class="NS-cubo-3"></div>
                <div class="NS-cubo-4"></div>
                <div class="NS-cubo-5"></div>
            </div>
            <div class="NS-nums">
                <h1 class="NS-nums-6">1</h1>
                <h1 class="NS-nums-7">2</h1>
                <h1 class="NS-nums-8">3</h1>
                <h1 class="NS-nums-9">4</h1>
                <h1 class="NS-nums-10">5</h1>
                <p class="NS-p-8">Es gratuita y fácil de usar.</p>
                <p class="NS-p-9">Funciona con atención directa del C4.</p>
                <p class="NS-p-10">Mejora la respuesta ante emergencias.</p>
                <p class="NS-p-11">Fomenta la particiáció ciudadana.</p>
                <p class="NS-p-12">Disponible para Android e iOS.</p>
            </div>
            <button class="NS-btt-3">Descargar</button>
        </div> -->

    <!-- SECCIÓN 4 -->
    <!-- <div class="NS-fondo-1 oculta">
            <video class="NS-div-video" controls>
                <source class="NS-video" src="<?= base_url('/asset/video/App.mp4') ?>" type="video/mp4"
                    alt="Tu navegador no soporta la etiqueta de video.">
            </video>
            <h1 class="NS-tit-1">Neza Segura</h1>
            <h1 class="NS-sub-4">¿Como funciona?</h1>
            <p class="NS-p-1">Con la app Neza Segura, puedes reportar emergencias,solicitar ayuda inmediata, hacer
                denuncias
                anónimas y recibir alertas sísmicas. Conéctate con la Dirección General de Seguridad Ciudadana
                de manera rápida y directa.
            </p>
            <button class="NS-btt-4">Descargar</button>
        </div>
    </div> -->

    <!-- Bolitas de navegación -->
    <!-- <div class="NS-bolitas">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <script>
    const secciones = document.querySelectorAll(".NS-fondo-1");
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
    </script> -->

    <!-- ------------------------------------------------------------------------ SEGURIDAD CERCA ------------------------------------------------------------------------ -->

    <!-- <div class="SC-img">
        <div class="SC-petalo top"><img class="SC-img-1" src="<?= base_url('/asset/img/SC-img-1-1.png') ?>" alt="">
        </div>
        <div class="SC-petalo right"><img class="SC-img-1" src="<?= base_url('/asset/img/SC-img-1-2.png') ?>" alt="">
        </div>
        <div class="SC-petalo bottom"><img class="SC-img-1" src="<?= base_url('/asset/img/SC-img-1-3.png') ?>" alt="">
        </div>
        <div class="SC-petalo left"><img class="SC-img-1" src="<?= base_url('/asset/img/SC-img-1-4.png') ?>" alt="">
        </div>
    </div> -->

    <!-- ------------------------------------------------------------------------ TIPS ------------------------------------------------------------------------ -->

    <!-- ======================= SECCIÓN TIPS ======================= -->
    <!-- <div class="SC-tips">
        <h2 class="SC-tit-4">Tips de Seguridad Vecinal</h2>
        <p class="SC-p-4">Organízate con tus vecinos: mantengan comunicación por grupo de WhatsApp o reuniones
            periódicas.</p>

        <div class="SC-cuadros-tips"> -->
    <!-- ---------------- BLOQUE 1 ---------------- -->
    <!--  <div class="SC-bloque-1">
                <div class="SC-c-1">
                    <img class="SC-img" data-id="1" src="<?= base_url('/asset/img/SC-img-5.jpg') ?>" alt="">
                    <p class="SC-p-5">Organízate con tus vecinos</p>
                </div>
                <div class="SC-c-2">
                    <img class="SC-img" data-id="2" src="<?= base_url('/asset/img/SC-img-6.jpg') ?>" alt="">
                    <p class="SC-p-6">Mantén iluminadas calles y entradas</p>
                </div>
                <div class="SC-c-3">
                    <img class="SC-img" data-id="3" src="<?= base_url('/asset/img/SC-img-7.jpg') ?>" alt="">
                    <p class="SC-p-7">Reporta personas o vehículos sospechosos</p>
                </div>
                <div class="SC-c-4">
                    <img class="SC-img" data-id="4" src="<?= base_url('/asset/img/SC-img-8.jpg') ?>" alt="">
                    <p class="SC-p-8">Asegura puertas, ventanas y accesos</p>
                </div>
                <div class="SC-c-5">
                    <img class="SC-img" data-id="5" src="<?= base_url('/asset/img/SC-img-9.png') ?>" alt="">
                    <p class="SC-p-9">Conoce a tus vecinos</p>
                </div>
            </div> -->

    <!-- ---------------- BLOQUE 2 ---------------- -->
    <!-- <div class="SC-bloque-2">
                <div class="SC-c-6">
                    <img class="SC-img" data-id="6" src="<?= base_url('/asset/img/SC-img-10.jpg') ?>" alt="">
                    <p class="SC-p-10">No compartas tu rutina en redes sociales</p>
                </div>
                <div class="SC-c-7">
                    <img class="SC-img" data-id="7" src="<?= base_url('/asset/img/SC-img-11.jpg') ?>" alt="">
                    <p class="SC-p-11">Participa en simulacros y talleres</p>
                </div>
                <div class="SC-c-8">
                    <img class="SC-img" data-id="8" src="<?= base_url('/asset/img/SC-img-12.jpg') ?>" alt="">
                    <p class="SC-p-12">Ten visibles los números de emergencia</p>
                </div>
                <div class="SC-c-9">
                    <img class="SC-img" data-id="9" src="<?= base_url('/asset/img/SC-img-13.jpg') ?>" alt="">
                    <p class="SC-p-13">Evita dejar objetos de valor a la vista</p>
                </div>
                <div class="SC-c-10">
                    <img class="SC-img" data-id="10" src="<?= base_url('/asset/img/SC-img-14.jpg') ?>" alt="">
                    <p class="SC-p-14">Denuncia cualquier situación sospechosa</p>
                </div>
            </div>
        </div> -->

    <!-- ======================= MODAL ======================= -->
    <!-- <div id="SC-modal" class="SC-modal">
            <div class="SC-modal-content">
                <span class="SC-close">&times;</span>
                <h2 id="SC-modal-title"></h2>
                <img id="SC-modal-img" src="" alt="" style="width:100%; max-width:400px; margin: 10px 0;">
                <p id="SC-modal-text"></p>
            </div>
        </div>
    </div> -->

    <!-- ======================= JAVASCRIPT ======================= -->
    <!-- <script>
    document.addEventListener("DOMContentLoaded", () => {
        // Datos de los tips con título, texto y imagen
        const infoFichas = {
            1: {
                title: "Organízate con tus vecinos",
                text: `<p><strong>Por qué es importante:</strong> Un vecindario unido puede detectar problemas más rápido y actuar coordinadamente ante incidentes.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Crear grupos de comunicación digital (WhatsApp, Telegram) para alertas.</li> 
                     <li>Establecer “vigías” por zonas o calles.</li> 
                     <li>Coordinar reuniones periódicas para discutir seguridad y mejoras.</li> 
                   </ul>`,
                img: "<?= base_url('/asset/img/SC-img-5.jpg') ?>"
            },
            2: {
                title: "Mantén iluminadas calles y entradas",
                text: `<p><strong>Por qué es importante:</strong> La oscuridad facilita la comisión de delitos. Un área bien iluminada disuade a delincuentes.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Instalar luces LED en entradas, portones y pasillos comunes.</li> 
                     <li>Usar temporizadores o sensores de movimiento para que las luces se enciendan automáticamente.</li> 
                     <li>Mantener lámparas y faroles en buen estado y reemplazar focos quemados rápidamente.</li> 
                   </ul>`,
                img: "<?= base_url('/asset/img/SC-img-6.jpg') ?>"
            },
            3: {
                title: "Reporta personas o vehículos sospechosos",
                text: `<p><strong>Por qué es importante:</strong> Detectar comportamientos inusuales ayuda a prevenir delitos.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Anotar descripción de personas o placas de vehículos.</li> 
                     <li>No confrontar directamente; primero reportar a autoridades.</li> 
                     <li>Compartir la información con vecinos para que estén alerta.</li> 
                   </ul>`,
                img: "<?= base_url('/asset/img/SC-img-7.jpg') ?>"
            },
            4: {
                title: "Asegura puertas, ventanas y accesos",
                text: `<p><strong>Por qué es importante:</strong> La mayoría de robos ocurre por entradas mal aseguradas.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Usar cerraduras de buena calidad y pestillos adicionales.</li> 
                     <li>Instalar rejas o mallas en ventanas accesibles.</li> 
                     <li>Revisar periódicamente que puertas, portones y candados estén funcionando correctamente.</li> 
                   </ul>`,
                img: "<?= base_url('/asset/img/SC-img-8.jpg') ?>"
            },
            5: {
                title: "Conoce a tus vecinos",
                text: `<p><strong>Por qué es importante:</strong> Conocer a quienes viven cerca permite identificar rápidamente a extraños y crea una comunidad más segura.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Presentarte a los vecinos nuevos y compartir información de contacto.</li> 
                     <li>Organizar reuniones vecinales o actividades comunitarias.</li> 
                     <li>Fomentar confianza para que todos puedan alertar sobre situaciones sospechosas.</li> 
                   </ul>`,
                img: "<?= base_url('/asset/img/SC-img-9.png') ?>"
            },
            6: {
                title: "No compartas tu rutina en redes sociales",
                text: `<p><strong>Por qué es importante:</strong> Los delincuentes pueden usar información de redes sociales para planear robos o seguir hábitos de las personas.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Evitar publicar horarios, vacaciones o ausencia prolongada.</li> 
                     <li>Revisar configuraciones de privacidad y limitar la visibilidad de publicaciones.</li> 
                     <li>Evitar etiquetar la ubicación en tiempo real.</li> 
                   </ul>`,
                img: "<?= base_url('/asset/img/SC-img-10.jpg') ?>"
            },
            7: {
                title: "Participa en simulacros y talleres",
                text: `<p><strong>Por qué es importante:</strong> Saber cómo actuar en emergencias reduce riesgos y mejora la respuesta de toda la comunidad.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Asistir a talleres de prevención de delitos, incendios y primeros auxilios.</li> 
                     <li>Practicar simulacros de evacuación periódicamente.</li> 
                     <li>Enseñar a niños y adultos sobre rutas de escape y puntos de encuentro seguros.</li> 
                   </ul>`,
                img: "<?= base_url('/asset/img/SC-img-11.jpg') ?>"
            },
            8: {
                title: "Ten visibles los números de emergencia",
                text: `<p><strong>Por qué es importante:</strong> En situaciones críticas, cada segundo cuenta.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Colocar números de policía, bomberos y hospitales en lugares visibles como puertas, refrigeradores o portales digitales vecinales.</li> 
                     <li>Asegurarse de que todos los miembros del hogar conozcan estos números.</li> 
                     <li>Mantener contactos de vecinos confiables para ayuda inmediata.</li> 
                   </ul>`,
                img: "<?= base_url('/asset/img/SC-img-12.jpg') ?>"
            },
            9: {
                title: "Evita dejar objetos de valor a la vista",
                text: `<p><strong>Por qué es importante:</strong> Objetos visibles atraen a delincuentes y aumentan el riesgo de robo.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Guardar electrónicos, dinero y joyas fuera de ventanas y patios.</li> 
                     <li>Usar cortinas o persianas para impedir que se vea el interior.</li> 
                     <li>No dejar herramientas o llaves a la vista en el exterior.</li> 
                   </ul>`,
                img: "<?= base_url('/asset/img/SC-img-13.jpg') ?>"
            },
            10: {
                title: "Denuncia cualquier situación sospechosa",
                text: `<p><strong>Por qué es importante:</strong> La denuncia oportuna permite que las autoridades actúen antes de que ocurra un delito.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Reportar hechos a la policía local o al grupo vecinal.</li> 
                     <li>Registrar detalles importantes: hora, lugar, descripción de personas o vehículos.</li> 
                     <li>Mantener un historial de incidentes para identificar patrones y riesgos frecuentes.</li> 
                   </ul>`,
                img: "<?= base_url('/asset/img/SC-img-14.jpg') ?>"
            }
        };

        // Elementos del modal
        const modal = document.getElementById("SC-modal");
        const modalTitle = document.getElementById("SC-modal-title");
        const modalText = document.getElementById("SC-modal-text");
        const modalImg = document.getElementById("SC-modal-img");
        const closeBtn = document.querySelector(".SC-close");

        // Abrir modal al hacer clic en cualquier imagen
        document.querySelectorAll(".SC-img").forEach(img => {
            img.addEventListener("click", () => {
                const id = img.dataset.id;
                const info = infoFichas[id];
                if (info) {
                    modalTitle.textContent = info.title;
                    modalText.innerHTML = info.text;
                    modalImg.src = info.img || "";
                    modal.style.display = "flex";
                }
            });
        });

        // Cerrar modal al hacer clic en la X
        closeBtn.onclick = () => modal.style.display = "none";

        // Cerrar modal al hacer clic fuera del contenido
        window.onclick = e => {
            if (e.target === modal) modal.style.display = "none";
        }
    });
    </script> -->

    <!---------------------------------------------------------------------------------------------------- MENU ---------------------------------------------------------------------------------------------------->
    <!-- <div class="TS-fondo">
        <div class="TS-fondo-p-1"></div>
        <div class="TS-fondo-img">
            <img class="TS-img-fondo" src="<?= base_url('/asset/img/TS-img-fondo-1.png') ?>" alt="">
        </div>
        <div class="TS-textos">
            <div class="TS-slide active">
                <h1 class="TS-tit-1">Trámites y Servicios</h1>
                <p class="TS-p-1">Consulta y realiza de forma rápida y segura los principales trámites relacionados con
                    seguridad ciudadana. Aquí encontrarás información sobre constancias, reportes, atención a víctimas,
                    permisos especiales y más, con orientación clara y atención cercana para la ciudadanía.</p>
            </div>

            <div class="TS-slide">
                <h1 class="TS-tit-1-1">Enfoque en Atención a la Comunidad</h1>
                <p class="TS-p-1-1">Nuestro compromiso es brindar a la ciudadanía orientación clara y apoyo cercano en
                    todos los procesos relacionados con seguridad. Contamos con servicios diseñados para prevenir
                    riesgos, atender emergencias y facilitar trámites de manera ágil y confiable.</p>
            </div>

            <div class="TS-slide">
                <h1 class="TS-tit-1-2">Enfoque en Prevención y Participación</h1>
                <p class="TS-p-1-2">Además de los trámites, promovemos la participación vecinal y la prevención del
                    delito. A través de programas comunitarios y redes de seguridad, buscamos que cada ciudadano pueda
                    colaborar en la construcción de un entorno más seguro para todos.
                </p>
            </div>

            <div class="TS-slide">
                <h1 class="TS-tit-1-3">Enfoque en Tecnología y Rapidez</h1>
                <p class="TS-p-1-3">La Comisaría pone a tu disposición herramientas digitales y líneas de atención para
                    que puedas realizar tus trámites y reportes desde cualquier lugar, de forma rápida, segura y con
                    seguimiento constante, garantizando eficiencia y transparencia.
                </p>
            </div>

            <div class="TS-botones">
                <span class="TS-btn active" data-index="0"></span>
                <span class="TS-btn" data-index="1"></span>
                <span class="TS-btn" data-index="2"></span>
                <span class="TS-btn" data-index="3"></span>
            </div>
        </div>
    </div> -->

    <!---------------------------------------------------------------------------------------------------- CÉDULA DE BÚSQUEDA ---------------------------------------------------------------------------------------------------->

    <!-- <div>
        <h1 class="TS-tit-2">Célula de Búsqueda</h1>
        <div class="TS-circulo-img">
            <img class="TS-img-user" src="<?= base_url('/asset/img/S-lider-img-1.png') ?>" alt="">
        </div>
        <div class="TS-cuadro-encargado">
            <h2 class="TS-dir">Director:</h2>
            <h3 class="TS-dir-nombre">Lic.Fernando Lopez</h3>
        </div>
        <p class="TS-p-2">Encabezó el arranque del operativo “Difusiones Masivas de Búsqueda de Personas”, en el
            que participan Células de Búsqueda de los municipios de Nezahualcóyotl, La Paz, Chimalhuacán,
            Chicoloapan, Chalco, Valle de Chalco e Ixtapaluca, así como de la Secretaría de Seguridad del Estado
            de México.</p>
        <p class="TS-p-3">Este esfuerzo conjunto busca optimizar la búsqueda y localización de personas
            extraviadas o desaparecidas de mayor antigüedad, realizando difusión masiva con lonas de boletines
            en vehículos que recorrerán el municipio, además de pega de más de 1,500 boletines de búsqueda en
            diferentes puntos y recorridos en lugares estratégicos con personas en situación de calle</p>
        <div>
            <button class="TS-btn-ext-1">Desaparición</button>
            <button class="TS-btn-ext-2">Línea sin violencia (EDOMEX)</button>
            <button class="TS-btn-ext-3">Línea Mujeres (CDMX)</button>
            <button class="TS-btn-ext-4">Línea U.E.A.V.I.G Neza</button>
        </div>
        <div class="TS-inf-CB">
            <div class="TS-inf-ext-1">
                <h3 class="TS-sub-1">¿Qué hacer en caso de una desaparición?</h3>
                <div class="TS-card-1">
                    <div class="TS-card-inf">
                        <h5 class="TS-sub-2">Acerca de ALERTA AMBER México</h5>
                        <p class="TS-p-4"> Es un programa de difusión que facilita la rápida localización de niñas,
                            niños y adolescentes en riesgo grave, sin depender de una denuncia o proceso penal.</p>
                    </div>
                </div>
                <div class="TS-card-2">
                    <div class="TS-card-inf">
                        <h5 class="TS-sub-2">¿Cómo funciona Alerta AMBER México?</h5>
                        <p class="TS-p-4">Programa de difusión para localizar y recuperar menores en riesgo grave,
                            independiente de
                            cualquier denuncia o proceso penal.</p>
                    </div>
                </div>
                <div class="TS-card-3">
                    <div class="TS-card-inf">
                        <h5 class="TS-sub-2">¿Quién es la autoridad encargada de autorizar y activar la Alerta AMBER
                            México?</h5>
                        <p class="TS-p-4">La PGR, a través de la FEVIMTRA, evalúa y puede activar la Alerta
                            AMBER México, con apoyo de un Comité Nacional integrado por varias instituciones. El
                            programa se coordina a nivel nacional y estatal, con enlaces en todas las
                            delegaciones de la PGR.
                        </p>
                    </div>
                </div>
                <div class="TS-card-4">
                    <div class="TS-card-inf">
                        <h5 class="TS-sub-2">¿Cuáles son los criterios que se valoran para la activación de la
                            Alerta AMBER México?</h5>
                        <p class="TS-p-4">La PGR, a través de la FEVIMTRA, decide su activación con apoyo de un
                            Comité Nacional integrado por diversas dependencias, operando mediante una coordinación
                            nacional, estatales y enlaces en todas las delegaciones de la PGR.
                        </p>
                    </div>
                </div>
            </div>
            <div class="TS-inf-ext-1">
                <h3 class="TS-sub-3">Línea sin violencia (EDOMEX)</h3>
                <p class="TS-p-5">
                    Una línea telefónica que atiende a mujeres, sus hijas e hijos en situación de violencia de
                    género, en cualquiera de sus modalidades y tipos, proporcionando intervención en crisis, apoyo
                    psicológico y asesoría jurídica de primer contacto. Si necesitas ayuda, ponte en contacto.
                </p>
                <div class="TS-img-">
                    <img class="TS-img-2" src="<?= base_url('/asset/img/TS-img-2.jpg') ?>" alt="">
                </div>
            </div>
            <div class="TS-inf-ext-1">
                <h3 class="TS-sub-3">Línea MUJERES (CDMX)</h3>
                <p class="TS-p-6">
                    Línea Mujeres es un servicio especializado que brinda 0311 Locatel, para detectar y atender la
                    violencia contra las mujeres y niñas en la Ciudad de México, mediante asesoría jurídica,
                    psicológica y médica, vía telefónica y chat. Para mayor información, comunícate al 0311 o 55
                    5658 1111 y solicita la Línea Mujeres de los Servicios Especializados, te atendemos
                    telefónicamente las 24 horas y vía chat de 10 a 18 horas, los 365 días del año.
                </p>
                <div class="TS-img-">
                    <img class="TS-img-3" src="<?= base_url('/asset/img/TS-img-3.jpg') ?>" alt="">
                </div>
            </div>
            <div class="TS-inf-ext-1">
                <h3 class="TS-sub-3">Línea U.E.A.V.I.G NEZA</h3>
                <p class="TS-p-7">
                    La Unidad Especializada en Atención a Víctimas de Violencia Intrafamiliar y de Género. Actúa
                    como instrumento de guía para disminuir la violencia intrafamiliar y de género, salvaguardar la
                    integridad física y los derechos humanos de las personas y como única alternativa incentivar y
                    facilitar la denuncia ante las Autoridades o Instituciones Jurídicas, de Salud y canalizar a las
                    instancias correspondientes dependiendo del tipo de violencia. Atención vía telefónica al número
                    26 19 79 79 Ext. 33171 o visítanos en: https://goo.gl/maps/NXFLp8Cc1ju2uwnz6
                </p>
                <div class="TS-img-">
                    <img class="TS-img-4" src="<?= base_url('/asset/img/TS-img-5.jpg') ?>" alt="">
                </div>
            </div>
        </div>
    </div> -->

    <!---------------------------------------------------------------------------------------------------- ATENCIÓN-VIOLENCIA ---------------------------------------------------------------------------------------------------->

    <!-- <div>
        <h1 class="TS-tit-2">Atención a Víctimas de Violencia Intrafamiliar y de Género</h1>
        <div class="TS-circulo-img">
            <img class="TS-img-user" src="<?= base_url('/asset/img/S-lider-img-1.png') ?>" alt="">
        </div>
        <div class="TS-cuadro-encargado">
            <h2 class="TS-dir">Director:</h2>
            <h3 class="TS-dir-nombre">Lic.Fernando Lopez</h3>
        </div>
        <p class="TS-p-8">Brindamos atención inmediata a personas que sufren violencia, protegiendo su
            integridad y derechos,
            evitando la revictimización. Facilitamos la denuncia y canalizamos a las instituciones adecuadas,
            además de realizar acciones preventivas para disminuir y erradicar la violencia en el municipio.
        </p>
        <p class="TS-p-9">Si denuncias a un familiar o conocido, ellos no sabrán quién lo hizo, ya que tu
            información se mantiene confidencial según las leyes del Estado de México.
            <br><br>
            Para denunciar un delito, llama al 5557434343. Si es un menor quien denuncia, debe ir acompañado de
            un adulto responsable para presentar la denuncia ante el Ministerio Público.
        </p>
        <div class="TS-img-">
            <img class="TS-img-5" src="<?= base_url('/asset/img/TS-img-5.jpg') ?>" alt="">
        </div>

        <div class="TS-inf-ext-1">
            <h3 class="TS-sub-3">Método de prestación del servicio:</h3>
            <p class="TS-p-10">
                El personal de la Unidad Especializada en Violencia Intrafamiliar y de Género, proporciona un
                formato que lleva por nombre Cédula de Atención a Mujeres Victimas de Violencia de Género, que
                deberá ser llenado por la víctima con los datos esenciales del hecho ocurrido tales como
            </p>
            <div>
                <h3 class="TS-sub-4">Documentos necesarios:</h3>
                <ul class="TS-doc-list-1">
                    <li>Nombre del solicitante</li>
                    <li>Edad</li>
                    <li>Domicilio</li>
                    <li>Télefono de contacto</li>
                    <li>Tipo de violencia recibida</li>
                    <li>Narración breve de los hechos y otros datos relevantes</li>
                    <li>Apartado de observaciones. Donde se plasma el tipo de atención que requiere la víctima
                        para iniciar con la canalización de la misma,(Orientación jurídica y/o Atención
                        psicológica)</li>
                </ul>
            </div>
        </div>
    </div> -->

    <!---------------------------------------------------------------------------------------------------- PROTECCIÓN CANINA ---------------------------------------------------------------------------------------------------->

    <!-- <div id="seccionProteccionCanina">
        <h1 class="TS-tit-2">Unidad de Protección Animal y Canina K9</h1>
        <div class="TS-circulo-img">
            <img class="TS-img-user" src="<?= base_url('/asset/img/S-lider-img-1.png') ?>" alt="">
        </div>
        <div class="TS-cuadro-encargado">
            <h2 class="TS-dir">Director:</h2>
            <h3 class="TS-dir-nombre">Lic.Fernando Lopez</h3>
        </div>
        <p class="TS-p-11">¿Extraviaste a tu mascota?
            <br><br>
            Sigue estos pasos para reportarla y evitar ser víctima de algún delito. ¡Tu seguridad y la de tu
            mascota son lo más importante!
        </p>

        <div class="TS-img-">
            <img class="TS-img-6" src="<?= base_url('/asset/img/TS-img-6.jpg') ?>" alt="">
        </div>
        <div>
            <h3 class="TS-sub-5">Pasos a seguir:</h3>
            <ul class="TS-doc-list-2">
                <li>Ingresa a la app NezaLink y selecciona "Reporte de mascota extraviada".</li>
                <li>Llena los datos: nombre, raza, color, zona y una foto reciente.</li>
                <li>Envía el reporte para su difusión inmediata con las unidades de proximidad.</li>
            </ul>
        </div>
        <a id="btnNezaLink" href="#">
            <img class="TS-btn-img-7" src="<?= base_url('/asset/img/TS-btn-img-7.svg') ?>" alt="">
            <span class="TS-btn-palabra">NezaLink</span>
        </a>
    </div> -->

    <!---------------------------------------------------------------------------------------------------- NEZA-LINK ---------------------------------------------------------------------------------------------------->

    <!-- <div id="seccionNezaLink"
        style="display: none; position: fixed; top:0; left:0; width:100%; height:100%; background-color: #fff; z-index: 9999; overflow-y: auto; padding: 40px;">
        <button id="btnCerrarNezaLink" style="position: absolute; top: 20px; right: 20px; font-size: 18px;">Cerrar
            X</button>
        <h1 class="TS-tit-3">Alertamiento Silencioso
            Neza Link!</h1>
        <div class="TS-circulo-img"></div>
        <div class="TS-cuadro-encargado">
            <h2 class="TS-dir">Director:</h2>
            <h3 class="TS-dir-nombre">Lic.Fernando Lopez</h3>
        </div>
        <p class="TS-p-20">El Programa NEZA Link es un botón de pánico digital que alerta al C4 y a la unidad de
            proximidad vecinal con un clic, brindando respuesta rápida ante emergencias en negocios. No comparte
            ubicación en tiempo real, pero indica la emergencia; es fácil de configurar y ofrece mayor seguridad
            para empleados y clientes.
        </p>
        <p class="TS-p-21">Conoce más sobre su funcionamiento
            <br>
            El Programa de Alertamiento Silencioso #NezaLink, prioriza la seguridad de tu negocio, con un botón
            de pánico digital que alerta a tu unidad de proximidad con un solo clic.
            Regístrate en la siguiente liga para obtener tu botón de pánico digital, es gratuito.
        </p>
        <button class="TS-btn-registro-1">Regist</button>
        <div class="TS-inf-ext-1">
            <h3 class="TS-sub-9">Beneficios Clave del Programa NEZA Link</h3>
            <p class="TS-p-10"><br>
                Además de su funcionalidad principal, NEZA Link destaca por su facilidad de uso, rapidez de
                activación y alcance directo a cuerpos de seguridad municipales. Entre los beneficios más
                relevantes se encuentran:
            </p>
            <div>
                <h3 class="TS-sub-4">Beneficios</h3>
                <ul class="TS-doc-list-6">
                    <li>Implementación rápida y sin costo</li>
                    <li>Activación discreta del botón de pánico</li>
                    <li>Atención prioritaria</li>
                    <li>Soporte técnico disponible</li>
                    <li>Ideal para pequeños, medios y grandes negocios</li>
                </ul>
            </div>
            <button class="TS-btn-emergencia"></button>
        </div>
    </div> -->

    <!---------------------------------------------------------------------------------------------------- VICTIMAS ---------------------------------------------------------------------------------------------------->

    <!-- <div>
        <h1 class="TS-tit-2">Atencion a victimas</h1>
        <div class="TS-circulo-img">
            <img class="TS-img-user" src="<?= base_url('/asset/img/S-lider-img-1.png') ?>" alt="">
        </div>
        <div class="TS-cuadro-encargado">
            <h2 class="TS-dir">Director:</h2>
            <h3 class="TS-dir-nombre">Lic.Fernando Lopez</h3>
        </div>
        <p class="TS-p-12">¿Qué tengo que hacer para solicitar el servicio?
            <br>
            El servicio puede solicitarse en la Comisaría o al 5557434343, disponible 24/7, para canalizar a
            víctimas a la unidad correspondiente o a instancias de apoyo.
        </p>
        <p class="TS-p-13">¿Puedo solicitar información sobre el seguimiento de mi caso?
            <br>
            El seguimiento de casos solo lo brinda la autoridad competente; se acompaña a la víctima en procesos
            judiciales, trámites y notificaciones cuando lo soliciten dichas autoridades.
        </p>
        <p class="TS-p-14">¿El denunciado puede tener acceso a la identidad del denunciante?
            <br>
            El denunciado no puede conocer la identidad del denunciante; su resguardo es responsabilidad de esta
            área y del Ministerio Público durante todo el proceso.
        </p>
        <div class="TS-inf-ext-1">
            <h3 class="TS-sub-6">La atención a victimas del delito es brindada de la siguiente manera</h3>
            <p class="TS-p-10"><br>
                Personal de Atención a víctimas del Delito, proporcionará un formato que deberá ser llenado y
                firmado por los usuarios; con los datos esenciales del hecho ocurrido, tales como:
            </p>
            <div>
                <h3 class="TS-sub-4">Documentos necesarios:</h3>
                <ul class="TS-doc-list-3">
                    <li>Nombre del solicitante</li>
                    <li>Edad</li>
                    <li>Domicilio</li>
                    <li>Télefono de contacto</li>
                    <li>De que delito fue victima el ciudadano o ciudadana</li>
                    <li>Narración breve de los hechos y otros datos relevantes</li>
                    <li>Apartado de observaciones. Donde se plasma el tipo de atención que requiere la víctima
                        para iniciar con la canalización de la misma,(Orientación jurídica y/o Atención
                        psicológica) acompañamiento a la victima a las instancias que se requieran</li>
                </ul>
            </div>
        </div>
    </div> -->

    <!---------------------------------------------------------------------------------------------------- COMENTARIOS ---------------------------------------------------------------------------------------------------->

    <!-- <div>
        <h1 class="TS-tit-2">¿Tienes algún comentario?</h1>
        <p class="TS-p-15">"¡Hola! Si tienes alguna queja o felicitación, puedes enviarnos un mensaje aquí
            mismo. Estaremos encantados de asistirte."
            <br><br>
            Por favor llena los campos del formulario.
        </p>
        <div class="TS-img-">
            <img class="TS-img-8" src="<?= base_url('/asset/img/TS-img-8.svg') ?>" alt="">
        </div>
        <p class="TS-p-16">Emergencias
            <br><br>
            55 5743 4343
        </p>
        <div class="TS-img-">
            <img class="TS-img-9" src="<?= base_url('/asset/img/TS-img-9.jpg') ?>" alt="">
        </div>
        <div class="TS-inf-ext-1">
            <h3 class="TS-sub-7">Formulario</h3>
            <div class="TS-form">
                <div class="TS-bloque-form">
                    <form class="row g-2">
                        <div class="form-floating col-md-6 pe-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="nombre">
                            <label for="floatingInput">Primer nombre</label>
                        </div>
                        <div class="form-floating col-md-6 pe-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="nombre">
                            <label for="floatingInput">Segundo nombre</label>
                        </div>
                        <div class="form-floating col-md-6 mt-4 pe-2">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating col-md-6 mt-4 pe-2">
                            <input type="number" class="form-control" id="floatingInput" placeholder="telefono">
                            <label for="floatingInput">Telefono</label>
                        </div>
                        <div class="form-floating mt-4 col-12">
                            <textarea class="form-control" placeholder=" " id="floatingMensaje"
                                style="height: 150px"></textarea>
                            <label for="floatingMensaje">Mensaje</label>
                        </div>
                        <button type="submit" class="TS-btn-enviar btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <!---------------------------------------------------------------------------------------------------- LLAMADAS-EMERGENCIAS ---------------------------------------------------------------------------------------------------->

    <!-- <div>
        <h1 class="TS-tit-2">Protocolo para Llamadas de Emergencia</h1>
        <div class="TS-circulo-img">
            <img class="TS-img-user" src="<?= base_url('/asset/img/S-lider-img-1.png') ?>" alt="">
        </div>
        <div class="TS-cuadro-encargado">
            <h2 class="TS-dir">Director:</h2>
            <h3 class="TS-dir-nombre">Lic.Fernando Lopez</h3>
        </div>
        <p class="TS-p-17">¿A qué número debo llamar?
            <br>
            El solicitante deberá comunicarse a la Unidad de Mando C4, con número telefónico 57434343
        </p>
        <p class="TS-p-18">¿Qué hago si no se la ubicación exacta?
            <br>
            Si no conoces la ubicación exacta, proporciona referencias cercanas como calles, esquinas o
            establecimientos para agilizar la atención.
        </p>
        <p class="TS-p-19">¿Qué servicios intervienen?</p>
        <div>
            <h3 class="TS-sub-4">Documentos necesarios:</h3>
            <ul class="TS-doc-list-4">
                <li>Servicios de Seguridad Pública y Tránsito (Federal, Estatal y Municipal)</li>
                <li>Ambulancias (Lesionados, enfermos y accidentes, etc) </li>
                <li>Bomberos (Incendios, inundaciones y enjambres de abejas, etc) </li>
                <li>Protección Civil (Inundaciones y desastres, etc)</li>
                <li>Servicios Generales (Luminarias, bacheo, semáforos descompuestos y alcantarillas, etc)</li>
                <li>Sí eres testigo de un hecho, puedes denunciarlo.</li>
            </ul>
        </div>
        <div class="TS-inf-ext-1">
            <h3 class="TS-sub-8">La atención a llamadas de emergencia se brinda de la siguiente forma</h3>
            <p class="TS-p-10"><br>
                El solicitante proporcionará los siguientes datos a la hora de comunicarse a la Unidad de Mando
                C4, con número telefónico 57 43 43 43, o hacer contacto personalmente con cualquier personal
                operativo
            </p>
            <div>
                <h3 class="TS-sub-4">Documentos necesarios:</h3>
                <ul class="TS-doc-list-5">
                    <li>Nombre del solicitante</li>
                    <li>Número telefónico</li>
                    <li>Ubicación donde está ocurriendo el suceso</li>
                    <li>Tipo de auxilio o servicio que requiere o a través de la aplicación móvil NEZASEGURA,
                        que se encuentra disponible para sistemas operativos ANDROID e IOS</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="TS-sub-menu">
        <div class="TS-cir-1">
            <img class="TS-img-1" src="<?= base_url('/asset/img/dgsc2025-01.png') ?>" alt="">
            <h4 class="TS-opc-1">Célula de Búsqueda</h4>
        </div>
        <div class="TS-cir-2">
            <img class="TS-img-1" src="<?= base_url('/asset/img/dgsc2025-01.png') ?>" alt="">
            <h5 class="TS-opc-2">Atención intrafamiliar y de género</h5>
        </div>
        <div class="TS-cir-3">
            <img class="TS-img-1" src="<?= base_url('/asset/img/dgsc2025-01.png') ?>" alt="">
            <h5 class="TS-opc-2">Unidad de protección animal y canica K9</h5>
        </div>
        <div class="TS-cir-1">
            <img class="TS-img-1" src="<?= base_url('/asset/img/dgsc2025-01.png') ?>" alt="">
            <h4 class="TS-opc-1">Atención a victimas del delito</h4>
        </div>
        <div class="TS-cir-2">
            <img class="TS-img-1" src="<?= base_url('/asset/img/dgsc2025-01.png') ?>" alt="">
            <h5 class="TS-opc-2">Queja o felicitación Ciudadana</h5>
        </div>
        <div class="TS-cir-3">
            <img class="TS-img-1" src="<?= base_url('/asset/img/dgsc2025-01.png') ?>" alt="">
            <h5 class="TS-opc-2">Prótocolo en llamadas de emergencia</h5>
        </div>
        <img class="TS-img-Izq" src="<?= base_url('/asset/img/TS-img-Izq.svg') ?>" alt="Icono">
        <img class="TS-img-Der" src="<?= base_url('/asset/img/TS-img-Der.svg') ?>" alt="Icono">
    </div> -->

    <!---------------------------------------------------------------------------------------------------- RESPONSIVO 1 ---------------------------------------------------------------------------------------------------->

    <div class="NS-secciones">
        <div class="NS-fondo-1"></div>
        <div class="NS-div-img-1">
            <img class="NS-img-1" src="<?= base_url('/asset/img/NS-img-1.png') ?>" alt="">
        </div>
        <h1 class="NS-tit-1">Neza Segura</h1>
        <h1 class="NS-sub-1">"Tu seguridad, ahora en la palma de tu mano."</h1>
        <p class="NS-p-1">Con la app Neza Segura, puedes reportar emergencias, solicitar ayuda inmediata,
            hacer denuncias anónimas y recibir alertas sísmicas. Conéctate con la Dirección General de Seguridad
            Ciudadana de manera rápida y directa.</p>
        <h1 class="NS-sub-2"> ¿Emergencia? ¡Actúa rápido!</h1>
        <p class="NS-p-2">Descargue Neza Segura y reporta incidentes desde tu celular.
            Protección, apoyo y comunicación directa con el C4.</p>
        <button class="NS-btt-1">Descargar</button>
    </div>

    <!-- <div class="NS-fondo-1">
        <div class="NS-contenido">
            <div class="NS-div-texto">
                <h1 class="NS-tit-1">Neza Segura</h1>
                <h1 class="NS-sub-1">"Tu seguridad, ahora en la palma de tu mano."</h1>
                <p class="NS-p-1">
                    Con la app Neza Segura, puedes reportar emergencias, solicitar ayuda inmediata,
                    hacer denuncias anónimas y recibir alertas sísmicas. Conéctate con la Dirección General de Seguridad
                    Ciudadana de manera rápida y directa.
                </p>
                <h1 class="NS-sub-2">¿Emergencia? ¡Actúa rápido!</h1>
                <p class="NS-p-2">
                    Descargue Neza Segura y reporta incidentes desde tu celular.
                    Protección, apoyo y comunicación directa con el C4.
                </p>
                <button class="NS-btt-1">Descargar</button>
            </div>

            <div class="NS-div-img-1">
                <img class="NS-img-1" src="<?= base_url('/asset/img/NS-img-1.png') ?>" alt="">
            </div>
        </div>
    </div> -->


    <!-- <header class="header">
        <h1>Mi Página Responsiva</h1>
    </header>

    <main class="container">
        <section class="card">Sección 1</section>
        <section class="card">Sección 2</section>
        <section class="card">Sección 3</section>
    </main>

    <footer class="footer">
        <p>© 2025 Mi Sitio Web</p>
    </footer> -->


    <script>
    const btnIzq = document.querySelector('.TS-img-Izq');
    const btnDer = document.querySelector('.TS-img-Der');

    // Array de todos los círculos en orden
    const circulos = Array.from(document.querySelectorAll('.TS-cir-1, .TS-cir-2, .TS-cir-3'));

    // Array de todas las secciones en el mismo orden que los círculos
    const secciones = Array.from(document.querySelectorAll('div > h1.TS-tit-2')).map(h => h.parentElement);

    // Número de círculos visibles
    const visibles = 3;

    // Índice del círculo que está en el centro
    let centroIndex = 1; // inicializamos con el segundo de los 3 primeros

    function actualizarCarrusel() {
        // Oculta todos los círculos primero
        circulos.forEach(c => {
            c.style.display = 'none';
            c.style.transform = 'scale(1)';
            c.style.transition = 'all 0.5s';
        });

        // Mostrar los 3 círculos visibles
        for (let i = -1; i <= 1; i++) {
            const index = (centroIndex + i + circulos.length) % circulos.length;
            const c = circulos[index];
            c.style.display = 'block';

            // Agrandar el del centro
            if (i === 0) {
                c.style.transform = 'scale(1.2)';
            }
        }

        // Mostrar solo la sección correspondiente al círculo del centro
        secciones.forEach((s, i) => {
            s.style.display = (i === centroIndex) ? 'block' : 'none';
        });
    }

    // Botón derecha
    btnDer.addEventListener('click', () => {
        centroIndex = (centroIndex + 1) % circulos.length;
        actualizarCarrusel();
    });

    // Botón izquierda
    btnIzq.addEventListener('click', () => {
        centroIndex = (centroIndex - 1 + circulos.length) % circulos.length;
        actualizarCarrusel();
    });

    // Inicializa el carrusel
    actualizarCarrusel();
    </script>

    <script>
    // Seleccionamos el contenedor específico
    const contenedor = document.querySelector('.TS-inf-CB');

    // Seleccionamos los botones (siguen siendo globales, pero solo afectarán al contenedor)
    const btn1 = document.querySelector('.TS-btn-ext-1');
    const btn2 = document.querySelector('.TS-btn-ext-2');
    const btn3 = document.querySelector('.TS-btn-ext-3');
    const btn4 = document.querySelector('.TS-btn-ext-4');

    // Seleccionamos únicamente los contenidos dentro del contenedor
    const contenidos = Array.from(contenedor.querySelectorAll('.TS-inf-ext-1'));

    // Función para mostrar un contenido específico y ocultar los demás dentro del contenedor
    function mostrarContenido(index) {
        contenidos.forEach((c, i) => {
            c.style.display = (i === index) ? 'block' : 'none';
        });
    }

    // Eventos para los botones
    btn1.addEventListener('click', () => mostrarContenido(0));
    btn2.addEventListener('click', () => mostrarContenido(1));
    btn3.addEventListener('click', () => mostrarContenido(2));
    btn4.addEventListener('click', () => mostrarContenido(3));

    // Inicializamos mostrando el primer contenido
    mostrarContenido(0);
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const btnNezaLink = document.getElementById("btnNezaLink");
        const btnCerrarNezaLink = document.getElementById("btnCerrarNezaLink");
        const seccionNezaLink = document.getElementById("seccionNezaLink");

        // Abrir NEZA LINK
        btnNezaLink.addEventListener("click", function(e) {
            e.preventDefault();
            seccionNezaLink.style.display = "block";
        });

        // Cerrar NEZA LINK
        btnCerrarNezaLink.addEventListener("click", function() {
            seccionNezaLink.style.display = "none";
        });
    });
    </script>

    <script>
    const slides = document.querySelectorAll('.TS-slide');
    const botones = document.querySelectorAll('.TS-btn');
    let index = 0;
    let intervalo = setInterval(nextSlide, 5000); // cambia cada 5 segundos

    function showSlide(i) {
        slides.forEach(slide => slide.classList.remove('active'));
        botones.forEach(btn => btn.classList.remove('active'));
        slides[i].classList.add('active');
        botones[i].classList.add('active');
        index = i;
    }

    function nextSlide() {
        index = (index + 1) % slides.length;
        showSlide(index);
    }

    // Cambiar al hacer clic en los botones
    botones.forEach(btn => {
        btn.addEventListener('click', () => {
            clearInterval(intervalo); // reinicia el carrusel al hacer clic
            showSlide(parseInt(btn.dataset.index));
            intervalo = setInterval(nextSlide, 5000);
        });
    });

    // Mostrar primer slide al cargar
    showSlide(index);
    </script>

    <script>
    const seccionesNZ = document.querySelectorAll(".NS-fondo-1");
    const dots = document.querySelectorAll(".dot");

    function mostrarSeccion(i) {
        seccionesNZ.forEach((sec, index) => {
            sec.classList.toggle("oculta", index !== i);
            dots[index].classList.toggle("active", index === i);
        });
    }

    dots.forEach((dot, i) => {
        dot.addEventListener("click", () => mostrarSeccion(i));
    });
    </script>
    </main>
</body>

</html>