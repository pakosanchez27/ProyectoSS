<?= view('head') ?>

<body>
    <?= view('header') ?>

    <main class="container py-4">
        <section class="row">
            <div class="col-12">
                <div class="N-img-fondo-1">
                    <!-- <img id="N-img-fondo-1" src="<?= base_url('/asset/img/N-img-fondo-1.jpg') ?>" alt=""
                        class="img-fluid border border-2 border-black w-100">
                    <img id="N-img-fondo-2" src="<?= base_url('/asset/img/N-img-fondo-2.jpg') ?>" alt=""
                        class="img-fluid border border-2 border-black w-100">
                    <img id="N-img-fondo-3" src="<?= base_url('/asset/img/N-img-fondo-1.jpg') ?>" alt=""
                        class="img-fluid border border-2 border-black w-100"> -->
                </div>
                <p class="tit1">Comisaría General de la Seguridad Ciudadana (Seguridad Neza)</p>
                <br><br>
                <svg class="N-flecha" width="200" height="60" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="N-poli-flecha" points="70,32 30,10 120,10 150,32 118,50 30,50" fill="#0057b7" />
                </svg>
                <br>
                <!--                 <h1 class="N-flecha">🡺</h1>
 -->
                <div class="N-noticia-dia">
                    <div class="N-text-noticia">
                        🚨 Asalto frustrado en Av. Central — 👮 Nueva unidad de proximidad en Valle de Aragón — 📢
                        Alerta Amber activada por menor desaparecida — 🚔 Detienen a banda dedicada al robo de autos
                    </div>
                </div>
            </div>

            <div id="titular1" class="col-12 my-3">
                <h4 id="titular1">#Detenido en Nezahualcóyotl, por robo de moto en el municipio de Chimalhuacán</h4>
            </div>

            <div id="tex-noticia" class="col-12 mb-1">
                <p>Policías adscritos a la Direccion de Tránsito Municipal,
                    realizaron la detención de Javier Armando N. de 34
                    años, por su presunta responsabilidad en robo de
                    vehículo con violencia.
                </p>
            </div>

            <div id="N-img-Noticia-contenedor" class="col-12 mb-4">
                <img id="N-img-Noticia-principal" src="<?= base_url('/asset/img/img-noticias.jpeg') ?>" alt=""
                    class="img-fluid border border-2 border-black w-100">
            </div>

            <!-- ------------------------------------------------------------------------ NOTICIAS EXTRAS ------------------------------------------------------------------------ -->

            <div id="img-noticias" class="N-noticias-container">
                <div class="N-noticia-card">
                    <img src="<?= base_url('/asset/img/img-noticias-extra.jpg') ?>" alt="">
                    <div class="N-noticia-titulo">Aquí va el título de la noticia 1</div>
                </div>
                <div class="N-noticia-card">
                    <img src="<?= base_url('/asset/img/img-noticias-extra.jpg') ?>" alt="">
                    <div class="N-noticia-titulo">Aquí va el título de la noticia 2</div>
                </div>
                <div class="N-noticia-card">
                    <img src="<?= base_url('/asset/img/img-noticias-extra.jpg') ?>" alt="">
                    <div class="N-noticia-titulo">Aquí va el título de la noticia 3</div>
                </div>
                <div class="N-noticia-card">
                    <img src="<?= base_url('/asset/img/img-noticias-extra.jpg') ?>" alt="">
                    <div class="N-noticia-titulo">Aquí va el título de la noticia 4</div>
                </div>
            </div>

            <div id="titular3" class="col-12 my-5">
                <div class="señalador"></div>
            </div>

            <div>
                <h1 class="tit3">Boletín: Alerta Neza</h1>
            </div>

            <div id="N-img-alertas">
                <img class="img-noticia-alertas-1" src="/CGSC/public/asset/img/buscar.jpg" alt="">
                <img class="img-noticia-alertas-2" src="/CGSC/public/asset/img/localizada.jpg" alt="">
            </div>

            <div id="N-mensajes">
                <h2 class="N-mensaje-1">#BusquemosJuntos</h2>
                <h2 class="N-mensaje-2">#PersonaLocalizada</h2>
            </div>

            <div id="titular4" class="col-12 mb-3">
                <h4>¿Necesitas ayuda?</h4>
            </div>

            <div id="tex-ayuda" class="col-12 mb-5">
                <p>¡Estamos para apoyarte!</p>
                <p>Ante cualquier emergencia, situación de riesgo o si necesitas asistencia inmediata, comunícate a los
                    siguientes números:</p>
                <div class="div-num-emergencia">
                    <ul>
                        <li>Emergencias: 911</li>
                        <li>Policía Municipal Nezahualcótl: [Teléfono]</li>
                        <li>Bomberos y Protección Civil [Teléfono]</li>
                        <li>Atención a víctimas: [Teléfono o núm. de extensión]</li>
                    </ul>
                </div>
                <p>Tu seguridad es nuestra prioridad.</p>
                <p>Llámanos las 24 horas, los 7 días de la semana</p>
            </div>
        </section>
    </main>
        <?= view('footer') ?>

</body>
<script src="<?= base_url('/asset/js/noticias.js') ?>"></script>

</html>