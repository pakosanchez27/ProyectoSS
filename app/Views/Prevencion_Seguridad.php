<?= view('head') ?>

<body>
    <?= view('header') ?>

    <!-- CASA -->
    <canvas id="lienzo-casa"></canvas>

    <!-- PIRÁMIDE -->
    <canvas id="lienzo-piramide"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/three@0.152.0/build/three.min.js"></script>

    <!-- <canvas id="lienzo"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/three@0.152.0/build/three.min.js"></script>-->

    <main class="PS-container">
        <section class="Prevencion_Seguridad">

            <!-- ------------------- CONTENEDOR COMPLETO------------------- -->

            <div class="PS-intro">
                <h1 class="PS-tit-1">Prevención y Seguridad</h1>

                <div class="PS-div-tex-1">
                    <p class="PS-tex-1">Pequeñas acciones puedes prevenir<br>grandes riesgos. Conoce como<br>protegerte
                        en casa, en la calle o ante<br>una emergencia.</p>

                </div>

                <img class="PS-img-2" src="<?= base_url('/asset/img/PS-img-2.png') ?>" alt="">

                <div class="PS-div-pentagonos">
                    <img class="PS-pentagono-1" src="<?= base_url('/asset/img/PS-img-1.png') ?>" alt="">
                    <img class="PS-pentagono-2" src="<?= base_url('/asset/img/PS-img-2.png') ?>" alt="">
                    <img class="PS-pentagono-3" src="<?= base_url('/asset/img/PS-img-3.png') ?>" alt="">
                    <img class="PS-pentagono-4" src="<?= base_url('/asset/img/PS-img-4.png') ?>" alt="">
                    <img class="PS-pentagono-5" src="<?= base_url('/asset/img/PS-img-5.png') ?>" alt="">
                    <img class="PS-pentagono-6" src="<?= base_url('/asset/img/PS-img-6.png') ?>" alt="">
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ SEGURIDAD HOGAR ------------------------------------------------------------------------ -->

            <div class="PS-sh">
                <h1 class="PS-tit-2">Seguridad en el Hogar</h1>
                <p class="PS-tex-2">Mantén tu hogar protegido con medidas simples que previenen accidentes y riesgos
                    innecesarios.</p>
                <div class="PS-div-H">
                    <div class="PS-circulos-1">
                        <div class="PS-circ-1"></div>
                        <div class="PS-circ-2"></div>
                        <div class="PS-circ-3"></div>
                        <div class="PS-circ-4"></div>
                        <div class="PS-circ-5"></div>
                    </div>
                    <div class="PS-div-nums-1">
                        <h1 class="PS-nums-1">1</h1>
                        <h1 class="PS-nums-2">2</h1>
                        <h1 class="PS-nums-3">3</h1>
                        <h1 class="PS-nums-4">4</h1>
                        <h1 class="PS-nums-5">5</h1>
                        <p class="PS-tex-3">Verificar que puertas y ventanas estén bien
                            <br>cerradas al salir.
                        </p>
                        <p class="PS-tex-4">No compartas tus rutinas o ausencias en
                            <br>redes sociales.
                        </p>
                        <p class="PS-tex-5">Instala cerraduras seguras y, si es posible,
                            <br>cámaras o alarmas.
                        </p>
                        <p class="PS-tex-6">No abras la puerta a desconocidos; verifica la
                            <br>identidad antes.
                        </p>
                        <p class="PS-tex-7">Enseña a los niños a no revelar información
                            <br>personal por teléfono.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ SEGURIDAD ESCUELA ------------------------------------------------------------------------ -->

            <div class="PS-esc">
                <h1 class="PS-tit-3">Seguridad en la Escuela</h1>
                <p class="PS-tex-8">Enseñar a niñas y niños a cuidarse es el primer paso para una comunidad segura.</p>

                <div class="PS-div-E">
                    <div class="PS-circulos-2">
                        <div class="PS-circ-6"></div>
                        <div class="PS-circ-7"></div>
                        <div class="PS-circ-8"></div>
                        <div class="PS-circ-9"></div>
                        <div class="PS-circ-10"></div>
                    </div>
                    <div class="PS-nums-2">
                        <h1 class="PS-nums-6">1</h1>
                        <h1 class="PS-nums-7">2</h1>
                        <h1 class="PS-nums-8">3</h1>
                        <h1 class="PS-nums-9">4</h1>
                        <h1 class="PS-nums-10">5</h1>
                        <p class="PS-tex-9">Asegúrate de que tus hijos conozcan
                            <br>números de emergencia.
                        </p>
                        <p class="PS-tex-10">Recuérdales no hablar con extraños fuera de
                            <br>la escuela.
                        </p>
                        <p class="PS-tex-11">Establece rutas seguras y puntos de
                            <br>encuentro en caso de emergencia.
                        </p>
                        <p class="PS-tex-12">Mantente en contacto con los docentes y
                            <br>participar en simulacros.
                        </p>
                        <p class="PS-tex-13">Reporta cualquier situación sospechosa a la
                            <br>dirección o autoridades.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ SEGURIDAD VIAL ------------------------------------------------------------------------ -->

            <div class="PS-sv">
                <h1 class="PS-tit-4">Seguridad Vial</h1>
                <p class="PS-tex-8">Conducir con responsabilidad y respetar las señales salva tu vida y la de otros.</p>
                <div class="PS-div-img-5" style="height: 3000px; position: relative;">
                    <svg viewBox="100 0 1500 2760" width="100%" height="100%">
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
                        " stroke="black" stroke-width="150" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" />

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
                            <rect x="-27" y="-68" width="54" height="37" fill="lightblue" stroke="black"
                                stroke-width="1" />
                            <rect x="-27" y="55" width="54" height="37" fill="lightblue" stroke="black"
                                stroke-width="1" />
                            <rect x="-48" y="-52" width="22" height="37" fill="grey" />
                            <rect x="26" y="-52" width="22" height="37" fill="grey" />
                            <rect x="-48" y="37" width="22" height="37" fill="grey" />
                            <rect x="26" y="37" width="22" height="37" fill="grey" />
                        </g>
                    </svg>
                </div>
                <div class="PS-div-nums-3">
                    <p class="PS-tex-15">Respeta los límites de velocidad y
                        <br>señalamientos.
                    </p>
                    <p class="PS-tex-16">Usa siempre el cinturón de
                        <br>seguridad.
                    </p>
                    <p class="PS-tex-17">No uses el celular al conducir.</p>
                    <p class="PS-tex-18">Si eres peatón, cruza en zonas
                        <br>señaladas y con precaución.
                    </p>
                    <p class="PS-tex-19">En motocicleta, usa casco y
                        <br>equipo adecuado.
                    </p>
                </div>

                <div class="PS-div-img-5-1" id="PS-div-img-5-1">
                    <img class="PS-img-5-1" src="<?= base_url('/asset/img/PS-img-9.png') ?>" alt="">
                    <img class="PS-img-5-2" src="<?= base_url('/asset/img/PS-img-10.png') ?>" alt="">
                    <img class="PS-img-5-3" src="<?= base_url('/asset/img/PS-img-11.png') ?>" alt="">
                    <img class="PS-img-5-4" src="<?= base_url('/asset/img/PS-img-12.png') ?>" alt="">
                    <img class="PS-img-5-5" src="<?= base_url('/asset/img/PS-img-13.png') ?>" alt="">
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ SEGURIDAD INCENDIO ------------------------------------------------------------------------ -->

            <div class="PS-sci">
                <h1 class="PS-tit-5">Seguridad en Caso de Incendio</h1>
                <p class="PS-tex-8">Revisa tus instalaciones, mantén la calma y actúa rápido ante cualquier señal de
                    fuego.</p>
                <!-- <div class="PS-div-img-6" id="PS-div-img-6">
                    <img class="PS-img-6" src="<?= base_url('/asset/img/PS-img-9.png') ?>" alt="">
                </div> -->

                <!-- <div class="PS-div-img-6">
                    <img class="PS-img-6" src="<?= base_url('/asset/img/PS-img-9.png') ?>" alt="">
                    <img class="PS-img-6" src="<?= base_url('/asset/img/PS-img-9.png') ?>" alt="">
                    <img class="PS-img-6" src="<?= base_url('/asset/img/PS-img-9.png') ?>" alt="">
                    <img class="PS-img-6" src="<?= base_url('/asset/img/PS-img-9.png') ?>" alt="">
                    <img class="PS-img-6" src="<?= base_url('/asset/img/PS-img-9.png') ?>" alt="">

                    <svg class="PS-ring" viewBox="0 0 120 120">
                        <circle cx="60" cy="60" r="55" stroke="red" stroke-width="6" fill="none"
                            stroke-dasharray="160 200" stroke-dashoffset="0" />
                        <circle cx="60" cy="60" r="55" stroke="blue" stroke-width="6" fill="none"
                            stroke-dasharray="160 200" stroke-dashoffset="180" />
                    </svg>
                </div> -->

                <?php 
                    $imagenes = ['PS-img-14.jpg', 'PS-img-15.png', 'PS-img-16.png', 'PS-img-17.png', 'PS-img-18.png'];
                    $tamanos = ['300px','300px','300px','310px','300px']; // todos casi iguales
                    ?>

                <div class="PS-div-img-6">
                    <?php foreach ($imagenes as $i => $img): ?>
                    <div class="PS-img-container">
                        <img class="PS-img-6" src="<?= base_url("/asset/img/$img") ?>" alt="Imagen <?= $i+1 ?>"
                            style="width: <?= $tamanos[$i] ?>; height: <?= $tamanos[$i] ?>;">
                        <svg class="PS-ring" viewBox="0 0 120 120">
                            <circle cx="60" cy="60" r="55" stroke="red" stroke-width="6" fill="none"
                                stroke-dasharray="160 200" stroke-dashoffset="0" />
                            <circle cx="60" cy="60" r="55" stroke="blue" stroke-width="6" fill="none"
                                stroke-dasharray="160 200" stroke-dashoffset="180" />
                        </svg>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="PS-div-nums-4">
                    <p class="PS-tex-21">Revisa periódicamente instalaciones de gas y eléctricas.</p>
                    <p class="PS-tex-22">No sobrecargues contactos o enchufes múltiples.</p>
                    <p class="PS-tex-23">Ten a la mano un extintor y conoce su uso básico.</p>
                    <p class="PS-tex-24">Si se inicia un incendio, sal de inmediato; no intentes apagarlo si es grande.
                    </p>
                    <p class="PS-tex-25">No uses elevadores en caso de evaciación.</p>
                </div>
                <!-- <div class="PS-div-img-6-1">
                    <img class="PS-img-6-1" src="<?= base_url('/asset/img/PS-img-6-1.png') ?>" alt="">
                    <img class="PS-img-6-2" src="<?= base_url('/asset/img/PS-img-6-1.png') ?>" alt="">
                </div> -->

                <?php 
                    $imagenes2 = ['PS-img-19.png', 'PS-img-20.jpg']; 
                    $tamanos2 = ['300px','300px']; 
                ?>

                <div class="PS-div-img-6-1">
                    <?php foreach ($imagenes2 as $i => $img): ?>
                    <div class="PS-img-container">
                        <img class="PS-img-6" src="<?= base_url("/asset/img/$img") ?>" alt="Imagen <?= $i+1 ?>"
                            style="width: <?= $tamanos2[$i] ?>; height: <?= $tamanos2[$i] ?>; border-radius: 50%;">
                        <svg class="PS-ring" viewBox="0 0 120 120">
                            <circle cx="60" cy="60" r="55" stroke="red" stroke-width="6" fill="none"
                                stroke-dasharray="160 200" stroke-dashoffset="0" />
                            <circle cx="60" cy="60" r="55" stroke="blue" stroke-width="6" fill="none"
                                stroke-dasharray="160 200" stroke-dashoffset="180" />
                        </svg>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="PS-div-nums-4-1">
                    <p class="PS-tex-26">Si hay humo, agáchate y cubre nariz y boca con un trapo húmedo.</p>
                    <p class="PS-tex-27">Llama al 911 o a los Bomberos de Neza de inmediato.</p>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ SEGURIDAD SISMO ------------------------------------------------------------------------ -->

            <div class="PS-scs">
                <h1 class="PS-tit-6">Seguridad en Caso de Sismo</h1>
                <p class="PS-tex-8">Tener un plan y saber como actuar en un sismo puede marcar la diferencia en una
                    emergencia.</p>
                <div class="PS-div-img-7">
                    <!-- <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-7.png') ?>" alt=""> -->
                    <div class="PS-circle-img">
                        <div class="PS-circle-ring"></div>
                        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-21.png') ?>" alt="">
                        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-22.png') ?>" alt="">
                        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-23.png') ?>" alt="">
                        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-24.png') ?>" alt="">
                        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-25.png') ?>" alt="">
                        <img class="PS-img-7" src="<?= base_url('/asset/img/PS-img-26.png') ?>" alt="">
                    </div>
                </div>
                <div class="PS-nums-4">
                    <p class="PS-tex-29">Identifica zonas seguras dentro y fuera de tu casa, escuela u oficina.</p>
                    <p class="PS-tex-30">Participa en simulacros y elabora un plan familiar de emergencia.</p>
                    <p class="PS-tex-31">Durante el sismo: manten la calma, ubícate en zonas de seguridad y aléjate
                        de
                        ventanas.</p>
                    <p class="PS-tex-32">Mantente informado por canales oficiales y no difundas rumores.</p>
                    <p class="PS-tex-33">Después del sismo: revisa daños, apaga gas y electricidad si es necesario.
                    </p>
                    <p class="PS-tex-34">No corras ni grites; evita usar elevadores.</p>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ SEGURIDAD PC ------------------------------------------------------------------------ -->

            <div class="PS-spc">
                <h1 class="PS-tit-7">Seguridad Personal y Comunitaria</h1>
                <p class="PS-tex-2" id="PS-tex-2">La prevención comienza en tu entorno; cuida tu seguridad y la de quienes te
                    rodean.
                </p>
                <div class="PS-div-img-8">
                    <img class="PS-img-8" src="<?= base_url('/asset/img/PS-img-8.png') ?>" alt="">
                    <div class="PS-div-croquis">
                        <svg class="svg-camino" width="600" height="400" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
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
                                <animate attributeName="stroke-dashoffset" from="1200" to="0" dur="8s"
                                    repeatCount="indefinite" />
                            </path>
                        </svg>
                        <!-- <div class="person" style="position:absolute; left:50px; top:350px;"></div>
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
                        <div class="person" style="position:absolute; left:50px; top:150px;"></div> -->
                        <div class="person person-1"></div>
                        <div class="person person-2"></div>
                        <div class="person person-3"></div>
                        <div class="person person-4"></div>
                        <div class="person person-5"></div>
                        <div class="person person-6"></div>
                        <div class="person person-7"></div>
                        <div class="person person-8"></div>
                        <div class="person person-9"></div>
                        <div class="person person-10"></div>
                        <div class="person person-11"></div>
                        <div class="person person-12"></div>
                        <div class="person person-13"></div>

                    </div>
                </div>

                <div class="PS-nums-S">
                    <div class="PS-tex-div-36"></div>
                    <p class="PS-tex-36">Evitar caminar por zonas solitarias o mal iluminadas.</p>
                    <div class="PS-tex-div-37"></div>
                    <p class="PS-tex-37">Informa a alguien de confianza sobre tus trayectos.</p>
                    <div class="PS-tex-div-38"></div>
                    <p class="PS-tex-38">No portes grandes cantidades de dinero en efectivo.</p>
                    <div class="PS-tex-div-39"></div>
                    <p class="PS-tex-39">Si notas algo sospechoso en tu colonia, repórtalo al módulo más cercano.
                    </p>
                    <div class="PS-tex-div-40"></div>
                    <p class="PS-tex-40">Participa en redes vecinales o programas de prevención del delito.</p>
                </div>
            </div>


        </section>
    </main>
    <?= view('footer') ?>

    <!-- ------------------- opcion 1 INCENDIO------------------- -->

    <!-- <script>
    const card = document.getElementById("PS-div-img-6");
    const img = card.querySelector(".PS-img-6");

    card.addEventListener("mousemove", e => {
        let x = (e.offsetX / card.offsetWidth - 0.5) * 30; 
        let y = (e.offsetY / card.offsetHeight - 0.5) * -30; 
        img.style.transform = `rotateY(${x}deg) rotateX(${y}deg) scale(1.05)`;
    });

    card.addEventListener("mouseleave", () => {
        img.style.transform = "rotateY(0deg) rotateX(0deg) scale(1)";
    });
    </script> -->

    <!-- ------------------- PRINCIPAL ------------------- -->

    <!-- <script>
    const pentagonImages = [
        ["PS-img-1.png", "PS-img-6.png", "PS-img-5.png"],
        ["PS-img-2.png", "PS-img-5.png", "PS-img-4.png"],
        ["PS-img-3.png", "PS-img-4.png", "PS-img-2.png"],
        ["PS-img-4.png", "PS-img-3.png", "PS-img-1.png"],
        ["PS-img-5.png", "PS-img-2.png", "PS-img-6.png"],
        ["PS-img-6.png", "PS-img-1.png", "PS-img-3.png"]
    ];
    const pentagonTexts = [
        ["Pequeñas acciones puedes prevenir<br>grandes riesgos.",
            "Aprender a proteger tu hogar<br>y tu entorno reduce riesgos.",
            "Estar consciente de lo que sucede<br>a tu alrededor te ayuda a prevenir."
        ],

        ["Conoce cómo protegerte en casa,<br>en la calle o ante una emergencia.",
            "Genera tranquilidad para ti<br>y tu familia.",
            "Ayuda a cuidar a quienes te rodean."
        ],

        ["Prevención empieza por pequeñas<br>acciones diarias.",
            "Aprender hábitos de seguridad<br>reduce riesgos.",
            "Estar atento a tu entorno<br>previene incidentes."
        ],

        ["Involucra a tu familia<br>en prácticas seguras.",
            "Conocer riesgos comunes<br>ayuda a evitarlos.",
            "Educación y conciencia<br>mejoran tu seguridad."
        ],

        ["Mantén tu hogar protegido<br>con medidas simples.",
            "Saber qué hacer en emergencias<br>reduce daños.",
            "Detecta señales de alerta<br>y actúa rápido."
        ],

        ["Cada acción cuenta<br>para tu seguridad.",
            "Estar preparado<br>evita riesgos innecesarios.",
            "Cuidar a los demás<br>refuerza la prevención."
        ]
    ];

    const pentagonElements = document.querySelectorAll(".PS-div-pentagonos > img");

    const textElements = document.querySelectorAll(".PS-div-tex-1 > .PS-tex-1");

    pentagonElements.forEach((img, index) => {
        let i = 0;
        setInterval(() => {
            i = (i + 1) % pentagonImages[index].length;
            img.src = "<?= base_url('/asset/img/') ?>" + pentagonImages[index][i];

            if (textElements[index]) {
                textElements[index].innerHTML = pentagonTexts[index][i];
            }
        }, 5000);
    });
    </script>  -->

    <!-- ------------------- CASA ------------------- -->

    <!-- <script>
    // ===== RENDERER =====
    const canvas = document.getElementById("lienzo");
    const renderer = new THREE.WebGLRenderer({
        canvas,
        antialias: true,
        alpha: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);

    // ===== ESCENA =====
    const scene = new THREE.Scene();

    // ===== CÁMARA =====
    const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.set(12, 8, 12);
    camera.lookAt(0, 2, 0);

    // ===== LUCES =====
    const ambient = new THREE.AmbientLight(0xffffff, 0.5);
    scene.add(ambient);
    const dirLight = new THREE.DirectionalLight(0xffffff, 0.8);
    dirLight.position.set(5, 10, 5);
    scene.add(dirLight);

    // ===== CASA =====
    const casa = new THREE.Group();

    // Paredes
    const paredesGeo = new THREE.BoxGeometry(4, 3, 4);
    const paredesMat = new THREE.MeshStandardMaterial({
        color: "rgba(247,233,255,1)"
    });
    const paredes = new THREE.Mesh(paredesGeo, paredesMat);
    casa.add(paredes);

    // Techo
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

    // Cerrojo dorado
    const cerrojoGeo = new THREE.BoxGeometry(0.2, 0.4, 0.1);
    const cerrojoMat = new THREE.MeshStandardMaterial({
        color: 0xFFD700
    });
    const cerrojo = new THREE.Mesh(cerrojoGeo, cerrojoMat);
    cerrojo.position.set(0.35, 0, 0.05);
    puerta.add(cerrojo);

    // Ventanas dobles
    const ventanaGeo = new THREE.BoxGeometry(0.5, 1, 0.1);
    const ventanaMat = new THREE.MeshStandardMaterial({
        color: "#87ceeb",
        transparent: true,
        opacity: 0.7
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
        color: 0x555555
    });
    const camara = new THREE.Mesh(camaraGeo, camaraMat);

    const lenteGeo = new THREE.CircleGeometry(0.12, 16);
    const lenteMat = new THREE.MeshStandardMaterial({
        color: 0x000000
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
    scene.add(casa);

    // Calendario
    const calendario = new THREE.Group();
    const baseGeo = new THREE.BoxGeometry(2, 2.5, 0.1);
    const baseMat = new THREE.MeshStandardMaterial({
        color: 0xffffff
    });
    const base = new THREE.Mesh(baseGeo, baseMat);
    calendario.add(base);

    const headerGeo = new THREE.BoxGeometry(2, 0.5, 0.11);
    const headerMat = new THREE.MeshStandardMaterial({
        color: 0xff6f61
    });
    const header = new THREE.Mesh(headerGeo, headerMat);
    header.position.y = 1;
    calendario.add(header);

    const lineMat = new THREE.MeshStandardMaterial({
        color: 0xcccccc
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
        color: 0xFFF1C7
    });
    const cabeza = new THREE.Mesh(cabezaGeo, cabezaMat);
    cabeza.position.y = 0.6;
    visitante.add(cabeza);

    // Cuerpo
    const cuerpoGeo = new THREE.CylinderGeometry(0.15, 0.2, 0.5, 16);
    const cuerpoMat = new THREE.MeshStandardMaterial({
        color: 0x8FCB7E
    });
    const cuerpo = new THREE.Mesh(cuerpoGeo, cuerpoMat);
    cuerpo.position.y = 0.2;
    visitante.add(cuerpo);

    // Piernas
    const piernaGeo = new THREE.CylinderGeometry(0.05, 0.05, 0.3, 8);
    const piernaPieMat = new THREE.MeshStandardMaterial({
        color: 0x4A6FA5
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
        color: 0xffffff
    });
    const sobre = new THREE.Mesh(sobreGeo, sobreMat);
    mensajeGroup.add(sobre);

    const pliegueGeo = new THREE.ConeGeometry(0.3, 0.2, 3);
    const pliegueMat = new THREE.MeshStandardMaterial({
        color: 0xe0e0e0
    });
    const pliegue = new THREE.Mesh(pliegueGeo, pliegueMat);
    pliegue.rotation.z = Math.PI;
    pliegue.position.set(0, 0.2, 0);
    mensajeGroup.add(pliegue);

    const candadoGeo = new THREE.BoxGeometry(0.15, 0.2, 0.05);
    const candadoMat = new THREE.MeshStandardMaterial({
        color: 0xFFD700
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
        visitante.scale.lerp(new THREE.Vector3(targetScale, targetScale, targetScale), 0.05);

        // Animación mensaje bloqueado
        mensajeGroup.position.z += (targetMensajeZ - mensajeGroup.position.z) * 0.05;
        mensajeGroup.scale.lerp(new THREE.Vector3(targetMensajeScale, targetMensajeScale, targetMensajeScale), 0.05);

        renderer.render(scene, camera);
    }
    animate();

    // ===== ROTACIÓN CURSOR =====
    document.addEventListener("mousemove", e => {
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

    // ===== EVENTOS TEXTO =====
    // Abrir puerta/ventanas
    const num1 = document.querySelector(".PS-nums-1");
    const tex3 = document.querySelector(".PS-tex-3");
    [num1, tex3].forEach(el => {
        el.addEventListener("mouseenter", () => abrir = true);
        el.addEventListener("mouseleave", () => abrir = false);
    });

    // Abrir techo/calendario
    const num2 = document.querySelector(".PS-nums-2");
    const tex4 = document.querySelector(".PS-tex-4");
    [num2, tex4].forEach(el => {
        el.addEventListener("mouseenter", () => abrirTecho = true);
        el.addEventListener("mouseleave", () => abrirTecho = false);
    });

    // Zoom cámara/cerrojo
    const num3 = document.querySelector(".PS-nums-3");
    const tex5 = document.querySelector(".PS-tex-5");
    [num3, tex5].forEach(el => {
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
    [num4, tex6].forEach(el => {
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
    [num5, tex7].forEach(el => {
        el.addEventListener("mouseenter", () => {
            targetMensajeZ = 4;
            targetMensajeScale = 2;
        });
        el.addEventListener("mouseleave", () => {
            targetMensajeZ = 3;
            targetMensajeScale = 1.5;
        });
    });
    </script> -->


</body>

<script>
const BASE_IMG_URL = "<?= base_url('/asset/img/') ?>";
</script>
<script src="<?= base_url('/asset/js/PS.js') ?>"></script>



</html>