<?= view('head') ?>

<body class="formacion-policial">
    <?= view('header') ?>

    <script src="https://cdn.jsdelivr.net/npm/three@0.156.0/build/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <main class="FP-container">
        <section class="Formacion_Policial">
            <!-- ------------------------------------------------------------------------ PRINCIPAL ------------------------------------------------------------------------ -->

            <div class="FP-fondo">
                <div class="FP-fondo-1">
                    <div class="FP-tit-fondo">
                        <h1 class="FP-tit-1"><strong>Formación Policial Nezahualcóyotl</strong></h1>
                    </div>
                    <div>
                        <img class="FP-img-1" src="<?= base_url('/asset/img/FP-img-1.jpg') ?>" alt="">
                        <img class="FP-img-1" src="<?= base_url('/asset/img/FP-img-13.jpg') ?>" alt="">
                        <img class="FP-img-1" src="<?= base_url('/asset/img/FP-img-14.jpg') ?>" alt="">
                        <img class="FP-img-1" src="<?= base_url('/asset/img/FP-img-15.jpg') ?>" alt="">
                    </div>
                    <div class="FP-inf-1">
                        <p class="FP-p-1">La formación policial en Nezahualcóyotl se realiza principalmente en el
                            Instituto de Profesionalización de la Dirección General de Seguridad Ciudadana y en el
                            Plantel de Formación y Actualización de la Universidad Mexiquense de Seguridad ubicado en el
                            municipio.
                            <br><br>Incluye capacitación física, técnica y en derechos humanos; entrenamiento en tiro,
                            defensa personal y control de situaciones; así como programas con perspectiva de género como
                            Ser Mujer Policía.
                        </p>
                        <p class="FP-p-2">También se han implementado cursos de habilidades cognitivas y deportivas para
                            mejorar el desempeño y la cercanía con la comunidad.
                            <br><br>Los aspirantes deben cumplir requisitos de edad, educación, salud física y mental, y
                            superar evaluaciones físicas y de control de confianza. Una vez admitidos, reciben una beca
                            durante su formación inicial.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ HESTORIAS ------------------------------------------------------------------------ -->

            <div class="FP-inf-2">
                <div class="FP-sub-inf">
                    <div>
                        <img class="FP-img-2" src="<?= base_url('/asset/img/FP-img-2.svg') ?>" alt="">
                        <h5 class="FP-sub-1">Historias que inspiran</h5>
                        <p class="FP-p-3 FP-ocultar-celular">Relatos de policías, ciudadanos o acciones comunitarias que han marcado la
                            diferencia.</p>
                        <a class="FP-link-1" href="">Leer más</a>
                    </div>
                    <div>
                        <img class="FP-img-3" src="<?= base_url('/asset/img/FP-img-3.svg') ?>" alt="">
                        <h5 class="FP-sub-2">Comunidad en acción</h5>
                        <p class="FP-p-4 FP-ocultar-celular">Proyectos y actividades donde vecinos y autoridades trabajan juntos por un
                            entorno más seguro.</p>
                        <a class="FP-link-2" href="">Leer más</a>
                    </div>
                    <div>
                        <img class="FP-img-4" src="<?= base_url('/asset/img/FP-img-4.svg') ?>" alt="">
                        <h5 class="FP-sub-3">Valores que nos une</h5>
                        <p class="FP-p-5 FP-ocultar-celular">Acciones que fortalecen la cultura cívica, el respeto, la legalidad y la
                            empatía.</p>
                        <a class="FP-link-3" href="">Leer más</a>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ CONVOCATORIA ------------------------------------------------------------------------ -->

            <div class="FP-inf-3">
                <img class="FP-img-5 FP-ocultar-celular" src="<?= base_url('/asset/img/FP-img-5.jpg') ?>" alt="">
                <h2 class="FP-tit-2">¿Quieres formar parte de la Policía Municipal de Neza?</h2>
                <p class="FP-p-6">Esta es tu oportunidad de servir a tu comunidad, desarrollarte profesionalmente y
                    pertenecer a una corporación con vocación, disciplina y compromiso. Como policía municipal recibirás
                    capacitación física, técnica y en derechos humanos, además de beneficios laborales y oportunidades
                    de especialización.
                    Consulta los requisitos, presenta tus evaluaciones y prepárate para unirte a quienes trabajan día a
                    día por un Nezahualcóyotl más seguro.</p>
                <button class="FP-btn-inscripcion">Inscríbete ahora</button>
            </div>

            <!-- ------------------------------------------------------------------------ FORMACION-INGRESO ------------------------------------------------------------------------ -->

            <div class="FP-inf-4">
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

            <!-- ------------------------------------------------------------------------ CAPACITACIÓN ------------------------------------------------------------------------ -->

            <div class="FP-inf-5">
                <h1 class="FP-tit-4">Capacitación Continua e Infraestructura</h1>
                <div class="FP-cards-1">
                    <div class="FP-card-1">
                        <img class="FP-img-6" src="<?= base_url('/asset/img/FP-img-6.jpg') ?>" alt="">
                        <h4 class="FP-sub-4">+300 elementos capacitados al año</h4>
                    </div>
                    <div class="FP-card-2">
                        <img class="FP-img-7" src="<?= base_url('/asset/img/FP-img-7.jpg') ?>" alt="">
                        <h4 class="FP-sub-4">1 Instituto de Profesionalización Municipal</h4>
                    </div>
                    <div class="FP-card-3">
                        <img class="FP-img-8" src="<?= base_url('/asset/img/FP-img-8.jpg') ?>" alt="">
                        <h4 class="FP-sub-4">80% del personal recibe capacitación continua</h4>
                    </div>
                    <div class="FP-card-4">
                        <img class="FP-img-9" src="<?= base_url('/asset/img/FP-img-9.jpg') ?>" alt="">
                        <h4 class="FP-sub-4">1 stand de tiro digital, inaugurado en 2023</h4>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ ¿PORQUE POLICIA? ------------------------------------------------------------------------ -->

            <div class="FP-inf-6">
                <div class="FP-inf-6-1">
                    <h1 class="FP-tit-5">Más que un uniforme, una vocación de servicio</h1>
                    <!--                 <img class="FP-img-10" src="<?= base_url('/asset/img/FP-img-10.png') ?>" alt="">
 -->
                    <p class="FP-p-8">¿Por qué ser policía municipal?
                        <br><br>Ser parte de la Policía Municipal de Nezahualcóyotl es más que portar un uniforme: es
                        asumir el compromiso de proteger y servir a tu comunidad con dignidad, valentía y vocación.
                        Tendrás
                        la oportunidad de desarrollarte profesionalmente, recibir formación especializada y formar parte
                        de
                        una institución en constante crecimiento.
                    </p>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ FRASE ------------------------------------------------------------------------ -->

            <div class="FP-inf-7">
                <div class="FP-div-2">
                    <img class="FP-img-11" src="<?= base_url('/asset/img/FP-img-11.svg') ?>" alt="">
                </div>
                <p class="FP-p-9">“Siempre quise servir a mi comunidad. Hoy, soy policía municipal gracias a la
                    formación que recibí en Neza.”
                    <br><br>— Oficial P. Hernández, generación 2023
                </p>
                <button class="FP-btn-inscripcion-2">Inscríbete ahora</button>
            </div>

            <!-- ------------------------------------------------------------------------ OPORTUNIDAD ------------------------------------------------------------------------ -->

            <div class="FP-inf-8">
                <h1 class="FP-tit-6">No Pierdas tu Oportunidad</h1>
                <div class="FP-cards-2">
                    <div class="FP-card-5">
                        <img class="FP-img-12" src="<?= base_url('/asset/img/FP-img-12.jpg') ?>" alt="">
                        <h4 class="FP-sub-5">Convocatorias para ingresar a la policía municipal</h4>
                        <a class="FP-link-4" href="">Leer más</a>
                    </div>
                    <div class="FP-card-6">
                        <img class="FP-img-13" src="<?= base_url('/asset/img/FP-img-12.jpg') ?>" alt="">
                        <h4 class="FP-sub-5">Cursos de formación inicial para policías</h4>
                        <a class="FP-link-4" href="">Leer más</a>
                    </div>
                    <div class="FP-card-7">
                        <img class="FP-img-14" src="<?= base_url('/asset/img/FP-img-12.jpg') ?>" alt="">
                        <h4 class="FP-sub-5">Certificaciones en competencias policiales</h4>
                        <a class="FP-link-4" href="">Leer más</a>
                    </div>
                    <div class="FP-card-8">
                        <img class="FP-img-15" src="<?= base_url('/asset/img/FP-img-12.jpg') ?>" alt="">
                        <h4 class="FP-sub-5">Capacitación continua en derechos humanos, protocolos de actuación, cadena
                            de custodia, etc.</h4>
                        <a class="FP-link-4" href="">Leer más</a>
                    </div>
                    <div class="FP-card-9">
                        <img class="FP-img-16" src="<?= base_url('/asset/img/FP-img-12.jpg') ?>" alt="">
                        <h4 class="FP-sub-5">Diplomados o convenios con universidades en temas de seguridad</h4>
                        <a class="FP-link-4" href="">Leer más</a>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ COMUNIDAD ------------------------------------------------------------------------ -->

            <div class="FP-inf-9">
                <h1 class="FP-tit-7">Tu futuro como policía comienza aquí</h1>
                <p class="FP-p-10">En la Comisaría de Seguridad Ciudadana nos importa la formación y el bienestar de
                    nuestra comunidad. Por ello, ofrecemos diversos talleres y capacitaciones gratuitas que fomentan la
                    prevención, la cultura de la legalidad y la participación ciudadana.</p>
                <div class="FP-cards-3">
                    <div class="FP-card-10">
                        <img class="FP-img-17" src="<?= base_url('/asset/img/FP-img-12.jpg') ?>" alt="">
                        <h2 class="FP-sub-6">Simulacros y capacitación básica en protección civil</h2>
                        <a class="FP-link-5" href="">Leer más</a>
                    </div>
                    <div class="FP-card-11">
                        <img class="FP-img-18" src="<?= base_url('/asset/img/FP-img-12.jpg') ?>" alt="">
                        <h2 class="FP-sub-6">Simulacros y capacitación básica en protección civil</h2>
                        <a class="FP-link-5" href="">Leer más</a>
                    </div>
                </div>

            </div>
        </section>
    </main>
        <?= view('footer') ?>

</body>

<script src="<?= base_url('/asset/js/FP.js') ?>"></script>

</html>