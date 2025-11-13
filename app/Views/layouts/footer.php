          </div>
          <!-- / container-p-y -->
        </div>
        <!-- / Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- / Layout container -->
  </div>
  <!-- / Layout wrapper -->

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>


  

  <!-- =========================
       🔧 JS: Librerías y App
       (Orden MUY importante)
  ========================== -->

  <!-- 1) jQuery (una sola vez) -->
  <script src="<?= base_url('asset/vendor/libs/jquery/jquery.js'); ?>"></script>

  <!-- 2) Popper + Bootstrap -->
  <script src="<?= base_url('asset/vendor/libs/popper/popper.js'); ?>"></script>
  <script src="<?= base_url('asset/vendor/js/bootstrap.js'); ?>"></script>

  <!-- 3) Core Sneat -->
  <script src="<?= base_url('asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
  <script src="<?= base_url('asset/vendor/js/menu.js'); ?>"></script>

  <!-- 4) DataTables (core + responsive + integración Bootstrap 5) -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

  <!-- 5) SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- 6) jQuery Validate (después de jQuery y antes de tus scripts) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

  <!-- 7) Vendors opcionales de la plantilla -->
  <script src="<?= base_url('asset/vendor/libs/apex-charts/apexcharts.js'); ?>"></script>

  <!-- 8) JS principal de la plantilla -->
  <script src="<?= base_url('asset/js/tema/main.js'); ?>"></script>
  <script src="<?= base_url('asset/js/tema/dashboards-analytics.js'); ?>"></script>

  <!-- 9) Configuración global de tu app -->
  <script>
    // Disponible en todas las vistas
    const base_url = "<?= base_url() ?>";
          console.log(base_url);
          
    $(function () {
      console.log("✅ Footer scripts OK. jQuery:", typeof jQuery);
      console.log("🧩 jQuery Validate:", typeof $.fn.validate);

      if (typeof $.fn.validate === "undefined") {
        console.error("⚠️ jQuery Validate NO está cargado. Revisa CDN o bloqueos de red.");
      }
    });
  </script>

  <!-- 10) Scripts por página (ej. roles.js) -->
  <?= $this->renderSection('page_scripts') ?>

  <!-- Botón de GitHub (opcional de la demo Sneat) -->
  <script>
    // Fallback: si la inicialización del menú de la plantilla no se ejecutó,
    // añadimos un manejador sencillo para que los items `.menu-toggle` funcionen.
    (function () {
      if (typeof jQuery === 'undefined') return;

      $(function () {
        // Si Helpers o Menu no existen, activamos el fallback
        var needFallback = (typeof Helpers === 'undefined' || typeof Menu === 'undefined');

        if (needFallback) {
          console.warn('⚠️ Menu fallback activo: Helpers/Menu no disponibles — aplicando toggle jQuery.');

          // Evento delegado: toggle .menu-sub
          $(document).on('click', '.menu-link.menu-toggle', function (e) {
            e.preventDefault();
            var $li = $(this).closest('.menu-item');
            var $sub = $li.children('.menu-sub');
            if (!$sub.length) return;

            // Alternar estado y visibilidad
            $li.toggleClass('menu-open');
            if ($sub.is(':visible')) {
              $sub.slideUp(160);
            } else {
              $sub.slideDown(160);
            }
          });
        }
      });
    })();
  </script>

  <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>
</html>
