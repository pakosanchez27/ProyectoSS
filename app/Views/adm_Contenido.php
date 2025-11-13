<?= view('header_adm') ?>
  <body>
    <main class="Adm-C-container">
      <section>
        <!-------------------------------------------------------- MENUS -------------------------------------------------------->
        <h1 class="Adm-C-tit-principal">Gestión de Menús</h1>
        <div class="Adm-M-bloque-1-Memu">
          <div class="Adm-M-Menu-Seccion-tit">
            <img
              src="img/iconos/cubes-solid-full.svg"
              class="Adm-M-img-ico-Estructura"
              alt
            />
            <h5 class="Adm-M-M-tit-Est">Estructura de Menú</h5>
          </div>
          <div class="Adm-M-bloque-Menu-lista">
            <span class="Adm-M-opc-1">⮞ Requisitos de la norma</span>
            <img
              src="img/iconos/pen-to-square-solid-full.svg"
              class="Adm-M-img-edit"
              alt="Editar"
            /><span class="Adm-M-opc-1">⮞ Requisitos de la norma</span>
            <img
              src="img/iconos/pen-to-square-solid-full.svg"
              class="Adm-M-img-edit"
              alt="Editar"
            />
          </div>
        </div>
        <!-------------------------------------------------------- Formulario -------------------------------------------------------->
        <div class="Adm-M-Menu-Seccion-tit-Edit">
          <img src="img/iconos/pen-to-2.svg" class="Adm-M-img-ico-edit" alt />
          <h5 class="Adm-M-M-tit-Edit-M">Editar Menú</h5>
        </div>
        <div class="Adm-M-contorno-Edit">
          <div class="Adm-M-bloque-Edit">
            <form class="row g-3">
              <div class="col-md-8">
                <label for="validationDefault01" class="form-label"
                  >Título del menú</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="validationDefault01"
                  placeholder="Ingresa el título"
                  required
                />
              </div>
              <div class="col-md-4">
                <label for="validationDefault02" class="form-label"
                  >Posición</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="validationDefault02"
                  placeholder="0"
                  required
                />
              </div>
              <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Tipo</label>
                <select class="form-select" id="validationDefault04" required>
                  <option selected disabled aria-placeholder>
                    Navegación...
                  </option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="validationDefault04" class="form-label"
                  >¿Es submenú de?</label
                >
                <select class="form-select" id="validationDefault04" required>
                  <option selected disabled aria-placeholder>
                    -- Menún principal--
                  </option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="validationDefault05" class="form-label"
                  >URL (opcional)</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="validationDefault03"
                  placeholder="ej: /contacto"
                  required
                />
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value
                    id="invalidCheck2"
                    required
                  />
                  <label class="form-check-label" for="invalidCheck2"
                    >Activo</label
                  >
                </div>
              </div>
              <div class="col-12 d-flex justify-content-end gap-2">
                <button class="btn btn-danger" type="button">
                  <img
                    class="Adm-M-img-iconos-B-1"
                    src="img/iconos/xmark-solid-full.svg"
                    alt
                  />
                  Cancelar
                </button>
                <button class="btn btn-success" type="submit">
                  <img
                    class="Adm-M-img-iconos-B-1"
                    src="img/iconos/floppy-disk-solid-full.svg"
                    alt
                  />
                  Guardar menú
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-------------------------------------------------------- GESTION DE CONTENIDOS -------------------------------------------------------->
         <!-- <h1 class="Adm-C-tit-principal">Gestión de Contenido</h1>  -->
         <!--<div class="Adm-C-bloque-1-Memu">
          <div class="Adm-C-Menu-Seccion-tit">
            <img
              src="img/iconos/cubes-solid-full.svg"
              class="Adm-C-img-ico-Estructura"
              alt
            />
            <h5 class="Adm-C-M-tit-Est">Menús Disponibles</h5>
          </div>
          <div class="Adm-C-bloque-Menu-lista">
            <nav class="navbar">
              <div class="container-fluid">
                <form class="d-flex">
                  <input
                    class="form-control-Adm-C-Buscar me-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <button
                    style="display: flex; align-items: center"
                    class="btn btn-outline-success Buscar"
                    type="submit"
                  >
                    Search
                  </button>
                </form>
              </div>
            </nav>
            <ul>
              <li class="Adm-C-Menus-opc">
                <span class="Adm-C-opc-1">Opción 1</span>
                <ul class="Adm-C-Lista-Menu">
                  <li>
                    Noticia principal
                    <img
                      src="img/iconos/pen-to-square-solid-full.svg"
                      class="Adm-C-img-edit"
                      alt="Editar"
                    />
                  </li>
                  <li>
                    Noticias secundarias
                    <img
                      src="img/iconos/pen-to-square-solid-full.svg"
                      class="Adm-C-img-edit"
                      alt="Editar"
                    />
                  </li>
                  <li>
                    Boletín
                    <img
                      src="img/iconos/pen-to-square-solid-full.svg"
                      class="Adm-C-img-edit"
                      alt="Editar"
                    />
                  </li>
                  <li>
                    Contactos de ayuda
                    <img
                      src="img/iconos/pen-to-square-solid-full.svg"
                      class="Adm-C-img-edit"
                      alt="Editar"
                    />
                  </li>
                  <li>
                    Contactos de ayuda
                    <img
                      src="img/iconos/pen-to-square-solid-full.svg"
                      class="Adm-C-img-edit"
                      alt="Editar"
                    />
                  </li>
                </ul>
              </li>
              <li class="Adm-C-Menus-opc">
                <span class="Adm-C-opc-1">Opción 2</span>
                <ul class="Adm-C-Lista-Menu">
                  <li>
                    Noticia principal
                    <img
                      src="img/iconos/pen-to-square-solid-full.svg"
                      class="Adm-C-img-edit"
                      alt="Editar"
                    />
                  </li>
                  <li>
                    Noticias secundarias
                    <img
                      src="img/iconos/pen-to-square-solid-full.svg"
                      class="Adm-C-img-edit"
                      alt="Editar"
                    />
                  </li>
                  <li>
                    Boletín
                    <img
                      src="img/iconos/pen-to-square-solid-full.svg"
                      class="Adm-C-img-edit"
                      alt="Editar"
                    />
                  </li>
                  <li>
                    Contactos de ayuda
                    <img
                      src="img/iconos/pen-to-square-solid-full.svg"
                      class="Adm-C-img-edit"
                      alt="Editar"
                    />
                  </li>
                </ul>
              </li>
            </ul>
          </div>  -->

          <!-------------------------------------------------------- Formularios -------------------------------------------------------->
          <div class="Adm-C-Menu-Seccion-tit-Edit">
            <img src="img/iconos/pen-to-2.svg" class="Adm-C-img-ico-edit" alt />
            <h5 class="Adm-C-M-tit-Edit-M">Editar Contenido</h5>
          </div>
          <!---------------------------------- Formulario 1 ---------------------------------->
          <!-- <div class="Adm-C-contorno-Edit-1">
                        <div class="Adm-C-bloque-Edit">
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label for="validationDefault01"
                                        class="form-label">Titular</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="validationDefault01"
                                        placeholder="Ingresa el título"
                                        required />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationDefault02"
                                        class="form-label">Texto</label>
                                    <textarea
                                        type="text"
                                        class="form-control"
                                        id="validationDefault02"
                                        rows="3"
                                        placeholder="Texto"
                                        required></textarea>
                                </div>
                                <div class="input-group">
                                    <input type="file" class="form-control "
                                        id="inputGroupFile03">
                                    <label class="input-group-text"
                                        for="inputGroupFile03">Upload</label>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationDefault04"
                                        class="form-label">URL
                                        (opcional)</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="validationDefault4"
                                        placeholder="ej: /contacto"
                                        required />
                                </div>
                                <div
                                    class="col-12 d-flex justify-content-end gap-3">
                                    <button class="btn btn-danger"
                                        type="button">
                                        <img
                                            class="Adm-C-img-iconos-B-1"
                                            src="img/iconos/xmark-solid-full.svg"
                                            alt />
                                        Cancelar
                                    </button>
                                    <button class="btn btn-success"
                                        type="submit">
                                        <img
                                            class="Adm-C-img-iconos-B-1"
                                            src="img/iconos/floppy-disk-solid-full.svg"
                                            alt />
                                        Guardar menú
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div> -->
          <!---------------------------------- Formulario 2 ---------------------------------->
          <!-- <div class="Adm-C-contorno-Edit-2">
                            <div class="Adm-C-bloque-Edit">
                                <form class="row g-3">
                                    <div class="col-md-12">
                                        <label for="validationDefault01"
                                            class="form-label">Titular</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationDefault01"
                                            placeholder="Ingresa el título"
                                            required />
                                    </div>
                                    <div class="input-group">
                                        <input type="file" class="form-control "
                                            id="inputGroupFile03">
                                        <label class="input-group-text"
                                            for="inputGroupFile03">Upload</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault04"
                                            class="form-label">URL
                                            (opcional)</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationDefault4"
                                            placeholder="ej: /contacto"
                                            required />
                                    </div>
                                    <div
                                        class="col-12 d-flex justify-content-end gap-3">
                                        <button class="btn btn-danger" 
                                            type="button">
                                            <img
                                                class="Adm-C-img-iconos-B-1"
                                                src="img/iconos/xmark-solid-full.svg"
                                                alt />
                                            Cancelar
                                        </button>
                                        <button class="btn btn-success"
                                            type="submit">
                                            <img
                                                class="Adm-C-img-iconos-B-1"
                                                src="img/iconos/floppy-disk-solid-full.svg"
                                                alt />
                                            Guardar menú
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>  -->
          <!---------------------------------- Formulario 3 ---------------------------------->
          <!-- <div class="Adm-C-contorno-Edit-3">
                            <div class="Adm-C-bloque-Edit">
                                <form class="row g-3">
                                    <div class="input-group mt-5">
                                        <input type="file" class="form-control "
                                            id="inputGroupFile01">
                                        <label class="input-group-text"
                                            for="inputGroupFile01">Upload</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault02"
                                            class="form-label">URL
                                            (opcional)</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationDefault2"
                                            placeholder="ej: /contacto"
                                            required />
                                    </div>
                                    <div
                                        class="col-12 d-flex justify-content-end gap-3">
                                        <button class="btn btn-danger" 
                                            type="button">
                                            <img
                                                class="Adm-C-img-iconos-B-1"
                                                src="img/iconos/xmark-solid-full.svg"
                                                alt />
                                            Cancelar
                                        </button>
                                        <button class="btn btn-success"
                                            type="submit">
                                            <img
                                                class="Adm-C-img-iconos-B-1"
                                                src="img/iconos/floppy-disk-solid-full.svg"
                                                alt />
                                            Guardar menú
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
          <!---------------------------------- Formulario 4 ---------------------------------->
          <!-- <div class="Adm-C-contorno-Edit-4">
                            <div class="Adm-C-bloque-Edit">
                                <form class="row g-3">
                                    <div class="col-md-12">
                                        <label for="validationDefault01"
                                            class="form-label">Titular</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationDefault01"
                                            placeholder="Ingresa el título"
                                            required />
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationDefault02"
                                            class="form-label">Texto</label>
                                        <textarea
                                            type="text"
                                            class="form-control"
                                            id="validationDefault02"
                                            rows="3"
                                            placeholder="Texto"
                                            required></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault04"
                                            class="form-label">URL
                                            (opcional)</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationDefault4"
                                            placeholder="ej: /contacto"
                                            required />
                                    </div>
                                    <div
                                        class="col-12 d-flex justify-content-end gap-3">
                                        <button class="btn btn-danger" 
                                            type="button">
                                            <img
                                                class="Adm-C-img-iconos-B-1"
                                                src="img/iconos/xmark-solid-full.svg"
                                                alt />
                                            Cancelar
                                        </button>
                                        <button class="btn btn-success"
                                            type="submit">
                                            <img
                                                class="Adm-C-img-iconos-B-1"
                                                src="img/iconos/floppy-disk-solid-full.svg"
                                                alt />
                                            Guardar menú
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>  -->
        </div>
      </section>
    </main>
  </body>
  <script src="JS/adm_Noticias.js"></script>
  <script src="JS/adm_somos.js"></script>
</html>
