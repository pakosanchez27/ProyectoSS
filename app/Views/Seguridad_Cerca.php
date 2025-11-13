<?= view('head') ?>

<body>
    <?= view('header') ?>
    <main class="SC-container">
        <section class="Seguridad_Cerca">

            <!-- ------------------------------------------------------------------------ PRINCIPAL ------------------------------------------------------------------------ -->

            <div class="SC-fondo">
                <div class="SC-fondo-1"></div>
                <div class="SC-fondo-2"></div>
                <!-- <div class="SC-fondo-3">
                    <img class="SC-fondo-img" src="<?= base_url('/asset/img/FP-img-6.jpg') ?>" alt="">
                </div> -->
                <h1 class="SC-tit-1"> Tu Seguridad Más Cerca</h1>
                <p class="SC-p-1">La Comisaría de Seguridad Ciudadana trabaja de manera cercana con la comunidad
                    para brindar atención rápida, prevenir el delito y fortalecer la confianza vecinal.
                    <br>Aquí encontrarás herramientas y servicios que te ayudan a mantener tu entorno más seguro.
                </p>
                <div class="SC-img">
                    <div class="SC-petalo top"><img class="SC-img-1" src="<?= base_url('/asset/img/SC-img-1-1.png') ?>"
                            alt="">
                    </div>
                    <div class="SC-petalo right"><img class="SC-img-1"
                            src="<?= base_url('/asset/img/SC-img-1-2.png') ?>" alt="">
                    </div>
                    <div class="SC-petalo bottom"><img class="SC-img-1"
                            src="<?= base_url('/asset/img/SC-img-1-3.png') ?>" alt="">
                    </div>
                    <div class="SC-petalo left"><img class="SC-img-1" src="<?= base_url('/asset/img/SC-img-1-4.png') ?>"
                            alt="">
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ UBICACION ------------------------------------------------------------------------ -->

            <div class="SC-ubicacion">
                <h2 class="SC-tit-2">Ubicación de Módulos y Patrullas</h2>
                <p class="SC-p-2">Direccion de módulos de vigilancia
                    <br>Horarios de atención
                    <br>Teléfonos de contacto
                    <br>Cuadrantes asignados (si aplica)
                </p>
                <iframe class="SC-ubi"
                    src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d60209.09469708001!2d-99.0393448!3d19.4094496!3m2!1i1024!2i768!4f13.1!2m1!1smodulos%20de%20patrullas%20de%20nezahualc%C3%B3yotl!5e0!3m2!1ses!2smx!4v1755539467251!5m2!1ses!2smx"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- ------------------------------------------------------------------------ DENUNCIAS ------------------------------------------------------------------------ -->

            <div class="SC-denuncias">
                <h2 class="SC-tit-3">Denuncia Anónima</h2>
                <p class="SC-p-3">Si conoces algún hecho delictivos o situación de riesgo en tu comunidad, puedes
                    reportarlo de forma anónima.
                    <br>Tu identidad está protegida, y tu información puede ayudar a prevenir delitos y proteger
                    vidas.
                </p>
                <div class="SC-inf-1">
                    <!-- --------------------------------- FICHA 1 --------------------------------- -->

                    <div class="SC-ficha-1">
                        <h2 class="SC-sub-1">¿Qué tipo de cosas se puede denunciar?</h2>
                        <img class="SC-img-2" src="<?=base_url('/asset/img/SC-img-2.png') ?>" alt="">
                        <ul class="SC-list-1">
                            <li>Violencia familiar o de género</li>
                            <li>Venta de drogas</li>
                            <li>Extorsiones</li>
                            <li>Robo de vehículos o casa habitación</li>
                            <li>Personas armadas o sospechosas</li>
                            <li>Maltrato infantil</li>
                            <li>Punto de riesgo o inseguridad</li>
                        </ul>
                        <svg class="SC-line-1" viewBox="0 0 635 50" preserveAspectRatio="xMidYMid meet">
                            <line x1="50" y1="25" x2="635" y2="25" stroke="#000000ff" stroke-width="7" />
                        </svg>

                    </div>
                    <!-- --------------------------------- FICHA 2 --------------------------------- -->
                    <div class="SC-ficha-2">
                        <h2 class="SC-sub-2">¿Qué debes incluir en la denuncia?</h2>
                        <img class="SC-img-3" src="<?=base_url('/asset/img/SC-img-3.png') ?>" alt="">
                        <ul class="SC-list-2">
                            <li>Lugar de los hechos (colonia, calle, punto de referencia)</li>
                            <li>Día y hora aproximada</li>
                            <li>Descripción de presonas, vehículos o situación</li>
                            <li>Si ocurre con frecuencia (sí/no)</li>
                            <li>Tolo lo que crear que puede ayudar</li>
                        </ul>
                        <svg class="SC-line-2" viewBox="0 0 950 800" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid meet">
                            <path d="M 0 100 L 750 100 C 1200 100, 600 450, 500 500" stroke="#000000ff" stroke-width="7"
                                fill="transparent" />
                        </svg>

                    </div>
                    <!-- --------------------------------- FICHA 3 --------------------------------- -->
                    <div class="SC-ficha-3">
                        <h2 class="SC-sub-3">Botón o llamada a la acción:</h2>
                        <img class="SC-img-4" src="<?=base_url('/asset/img/SC-img-4.png') ?>" alt="">
                        <ul class="SC-list-3">
                            <li>Enviar denuncia anónima (si es un formulario web)</li>
                            <li>Denuncia vía WhatsApp (si tiene línea habilitada)</li>
                            <li>Llama al 098-Línea anónima nacional</li>
                        </ul>
                        <button class="SC-btn-1">Denunciar Anonimamente</button>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ TIPS ------------------------------------------------------------------------ -->

            <div class="SC-tips">
                <h2 class="SC-tit-4">Tips de Seguridad Vecinal</h2>
                <p class="SC-p-4">Organízate con tus vecinos: mantengan comunicación por grupo de WhatsApp o
                    reuniones
                    periódicas.</p>
                <div class="SC-cuadros-tips">
                    <div class="SC-bloque-1">
                        <div class="SC-c-1">
                            <img class="SC-img-5" data-id="1" src="<?=base_url('/asset/img/SC-img-5.jpg') ?>" alt="">
                            <p class="SC-p-5">Organízate con tus vecinos</p>
                        </div>
                        <div class="SC-c-2">
                            <img class="SC-img-5" data-id="2" src="<?=base_url('/asset/img/SC-img-6.jpg') ?>" alt="">
                            <p class="SC-p-6">Mantén iluminadas calles y entradas</p>
                        </div>
                        <div class="SC-c-3">
                            <img class="SC-img-5" data-id="3" src="<?=base_url('/asset/img/SC-img-7.jpg') ?>" alt="">
                            <p class="SC-p-7">Reporta personas o vehículos sospechosos</p>
                        </div>
                        <div class="SC-c-4">
                            <img class="SC-img-5" data-id="4" src="<?=base_url('/asset/img/SC-img-8.jpg') ?>" alt="">
                            <p class="SC-p-8">Asegura puertas, ventanas y accesos</p>
                        </div>
                        <div class="SC-c-5">
                            <img class="SC-img-5" data-id="5" src="<?=base_url('/asset/img/SC-img-9.png') ?>" alt="">
                            <p class="SC-p-9">Conoce a tus vecinos</p>
                        </div>
                    </div>
                    <div class="SC-bloque-2">
                        <div class="SC-c-6">
                            <img class="SC-img-5" data-id="6" src="<?=base_url('/asset/img/SC-img-10.jpg') ?>" alt="">
                            <p class="SC-p-10">No compartas tu rutina en redes sociales</p>
                        </div>
                        <div class="SC-c-7">
                            <img class="SC-img-5" data-id="7" src="<?=base_url('/asset/img/SC-img-11.jpg') ?>" alt="">
                            <p class="SC-p-11">Participa en simulacros y talleres</p>
                        </div>
                        <div class="SC-c-8">
                            <img class="SC-img-5" data-id="8" src="<?=base_url('/asset/img/SC-img-12.jpg') ?>" alt="">
                            <p class="SC-p-12">Ten visibles los números de emergencia</p>
                        </div>
                        <div class="SC-c-9">
                            <img class="SC-img-5" data-id="9" src="<?=base_url('/asset/img/SC-img-13.jpg') ?>" alt="">
                            <p class="SC-p-13">Evita dejar objetos de valor a la vista</p>
                        </div>
                        <div class="SC-c-10">
                            <img class="SC-img-5" data-id="10" src="<?=base_url('/asset/img/SC-img-14.jpg') ?>" alt="">
                            <p class="SC-p-14">Denuncia cualquier situación sospechosa</p>
                        </div>
                    </div>
                </div>
                <!-- --------------------------------- MODAL --------------------------------- -->
                <div id="SC-modal" class="SC-modal">
                    <div class="SC-modal-content">
                        <span class="SC-close">&times;</span>
                        <h2 id="SC-modal-title"></h2>
                        <img id="SC-modal-img" src="" alt="">
                        <p id="SC-modal-text"></p>
                    </div>
                </div>
            </div>

            <!-- ------------------------------------------------------------------------ CONTACTOS ------------------------------------------------------------------------ -->

            <div class="SC-contactos">
                <h2 class="SC-tit-5">Actúa Rápido, Llama Ya</h2>
                <p class="SC-p-15">Tenerlos siempre a la mano, actúa con rapidez y seguridad</p>

                <div class="SC-contactos-num">
                    <h2 class="SC-tit-6">Emergencias Generales</h2>
                    <p class="SC-p-16">911
                        <br><br>Atención inmediata para casos de riesgo, accidente, delitos o urgencias médicas.
                    </p>
                    <img class="SC-img-15" src="<?=base_url('/asset/img/SC-img-15.jpg') ?>" alt="">

                    <h2 class="SC-tit-7">Policía Municipal de Nezahualcóyotl</h2>
                    <p class="SC-p-17">Teléfono: 55 5743 4343
                        <br><br>Dirección general: [coloca la ubicación si aplica]
                        <br><br>Atención 24/7
                    </p>
                    <img class="SC-img-16" src="<?=base_url('/asset/img/SC-img-16.jpg') ?>" alt="">

                    <h2 class="SC-tit-8">Protección Civil y Bomberos</h2>
                    <p class="SC-p-18">Teléfono: 55 5743 2313 / 55 5743 2047
                        <br><br>Para reportes de incendios, fugas de gas o emergencias por fenómenos naturales.
                    </p>
                    <img class="SC-img-17" src="<?=base_url('/asset/img/SC-img-17.jpg') ?>" alt="">

                    <h2 class="SC-tit-9">Contacto Digital o Buzón Ciudadano</h2>
                    <p class="SC-p-19">Correo: contacto@seguridadneza.gob.mx
                        <br><br>WhatsApp (si aplica): [número]
                        <br><br>Formulario en línea: [botón]
                    </p>
                    <img class="SC-img-18" src="<?=base_url('/asset/img/SC-img-18.png') ?>" alt="">
                </div>
                <br><br>
            </div>
        </section>
    </main>
        <?= view('footer') ?>
</body>
<script>
const BASE_URL = "<?= base_url() ?>";
</script>
<script src="<?= base_url('/asset/js/SC.js') ?>"></script>

</html>