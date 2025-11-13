<header>
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img class="H-img-logo" src="<?= base_url('/asset/img/SC.png') ?>" alt="Logo Seguridad Ciudadana" height="40" />
      </a>

      <!-- Botón toggle para móvil -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
        aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menú colapsable -->
      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?= base_url('noticias') ?>">Inicio</a>
          </li>
          <li class="nav-item">
      <a class="nav-link" href="<?= base_url('somos') ?>">Quiénes somos</a>
          </li>
          <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Formacion_Policial') ?>">Formación Policial</a>
          </li>
          <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Tramites_Servicios') ?>">Trámites y Servicios</a>
          </li>
          <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Prevencion_Seguridad') ?>">Prevención y Seguridad</a>
          </li>
          <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Seguridad_Cerca') ?>">Seguridad</a>
          </li>
          <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Neza_Segura') ?>">Neza Segura (App)</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>