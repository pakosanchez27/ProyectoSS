<?= view('header_adm') ?>
  <body>
    <main class="Adm-M-container">
      <section>
        <div class="Adm-M-container-bloques-edit">
          <img
            id="toggleMenu"
            class="Adm-M-img-Abrir-Cerrar-Menu"
            src="img/iconos/bars-solid-full.svg"
            alt="Abrir menú" />
          <div class="Adm-M-contenedor-Menu-img" id="Adm-M-menus-img">
            <img
              class="Adm-M-img-1"
              style="margin-top: 65px;"
              src="img/iconos/carpeta-vacia.png"
              alt />
            <img
              class="Adm-M-img-1"
              src="img/iconos/carpeta-vacia.png"
              alt />
            <img
              class="Adm-M-img-1"
              src="img/iconos/carpeta-vacia.png"
              alt />
          </div>

          <div>
            <!-- Aquí el botón -->
            <button class="boton-prueba" onclick="agregarOpcion('Nueva opción')">Agregar
              opción</button>
          </div>
          <div class="Adm-M-contenedor-Menu" id="Adm-M-menus-opc">
            <span style="font-weight: bold; font-size: 20px"
              class="Adm-M-sub-1">CGSC</span>
            <span class="Adm-M-sub-1">Vista 1</span>
            <span class="Adm-M-sub-1">Opcion del menú de esa área</span>
            <span class="Adm-M-sub-1">Opcion del menú de esa área</span>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>