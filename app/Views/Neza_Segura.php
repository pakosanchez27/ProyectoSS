<?= view('head') ?>

<body class="seguridad-cerca">
    <?= view('header') ?>
    <main class="NS_container">
        <section class="row">
            <div class="NS-secciones">
                <!-- ------------------------------------------------------------------------ NEZA SEGURA ------------------------------------------------------------------------ -->

                <div class="NS-seccion">
                    <div class="NS-fondo-1"></div>
                    <div class="NS-div-img-1">
                        <img class="NS-img-1" src="<?= base_url('/asset/img/NS-img-1.png') ?>" alt="">
                    </div>
                    <h1 class="NS-tit-1">Neza Segura</h1>
                    <h1 class="NS-sub-1">"Tu seguridad, ahora en la palma de tu mano."</h1>
                    <p class="NS-p-1">Con la app Neza Segura, puedes reportar emergencias, solicitar ayuda inmediata,
                        hacer denuncias anónimas y recibir alertas sísmicas. Conéctate con la Dirección General de
                        Seguridad
                        Ciudadana de manera rápida y directa.</p>
                    <h1 class="NS-sub-2"> ¿Emergencia? ¡Actúa rápido!</h1>
                    <p class="NS-p-2">Descargue Neza Segura y reporta incidentes desde tu celular.
                        Protección, apoyo y comunicación directa con el C4.</p>
                    <button class="NS-btt-1">Descargar</button>
                </div>
                <!-- ------------------------------------------------------------------------ ¿QUE SE PUEDE? ------------------------------------------------------------------------ -->

                <div class="NS-seccion oculta">
                    <div class="NS-fondo-1"></div>
                    <div class="NS-div-img-2">
                        <img class="NS-img-2-1" src="<?= base_url('/asset/img/NS-img-2-1.png') ?>" alt="">
                        <img class="NS-img-2-2" src="<?= base_url('/asset/img/NS-img-2-2.png') ?>" alt="">
                        <img class="NS-img-2-3" src="<?= base_url('/asset/img/NS-img-2-3.png') ?>" alt="">
                    </div>
                    <h1 class="NS-tit-2">Neza Segura</h1>
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
                        <p class="NS-p-3">Activar un botón de pánico en caso de violencia o peligro.</p><br>
                        <p class="NS-p-4">Solicitar ayuda de ambulancias, bomberos o patrullas.</p>
                        <p class="NS-p-5">Reportar delitos, maltrato animal o personas desaparecidas.</p>
                        <p class="NS-p-6">Recibir alertas sísmicas en tiempo real.</p>
                        <p class="NS-p-7">Formar parte de las redes vecinales de seguridad.</p>
                    </div>
                    <button class="NS-btt-2">Descargar</button>
                </div>

                <!-- ------------------------------------------------------------------------ ¿PORQUE? ------------------------------------------------------------------------ -->

                <div class="NS-seccion oculta">
                    <div class="NS-fondo-2"></div>
                    <div class="NS-div-img-3">
                        <img class="NS-img-3" src="<?= base_url('/asset/img/NS-img-3.png') ?>" alt="">
                    </div>
                    <h1 class="NS-tit-3">Neza Segura</h1>
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
                </div>

                <!-- ------------------------------------------------------------------------ VIDEO ------------------------------------------------------------------------ -->
                <div class="NS-seccion oculta">
                    <div class="NS-fondo-2"></div>
                    <video class="NS-div-video" controls>
                        <source class="NS-video" src="<?= base_url('/asset/video/App.mp4') ?>" type="video/mp4"
                            alt="Tu navegador no soporta la etiqueta de video.">
                    </video>
                    <h1 class="NS-tit-4">Neza Segura</h1>
                    <h1 class="NS-sub-5">¿Como funciona?</h1>
                    <p class="NS-p-13">Con la app Neza Segura, puedes reportar emergencias, solicitar ayuda inmediata,
                        hacer denuncias anónimas y recibir alertas sísmicas. Conéctate con la Dirección General de Seguridad
                        Ciudadana de manera rápida y directa.
                    </p>
                    <button class="NS-btt-4">Descargar</button>
                </div>

                <!-- ------------------------------------------------------------------------ BOTONES ------------------------------------------------------------------------ -->

                <div class="NS-bolitas">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
        </section>
    </main>
</body>
<script src="<?= base_url('/asset/js/NS.js') ?>"></script>

</html>