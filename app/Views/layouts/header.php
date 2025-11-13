<?php $session = session(); ?>
<?= session('nombre') ?>
<?= session('email') ?>
<?= session('id_rol') ?>
<?= session('id_area') ?>

<!DOCTYPE html>
<html
  lang="es"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
<head>
  <meta charset="utf-8" />
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Panel de Administración | Sneat</title>
  <meta name="description" content="" />

  <!-- =========================
       🧩 Fuentes y Estilos base
  ========================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

  <!-- Iconos y Tipografía -->
  <link rel="stylesheet" href="<?= base_url('asset/vendor/fonts/boxicons.css'); ?>" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <!-- =========================
       🎨 Estilos principales
  ========================== -->
  <link rel="stylesheet" href="<?= base_url('asset/vendor/css/core.css'); ?>" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= base_url('asset/vendor/css/theme-default.css'); ?>" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= base_url('asset/css/demo.css'); ?>" />

  <!-- =========================
       📊 Librerías externas CSS
  ========================== -->
  <link rel="stylesheet" href="<?= base_url('asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('asset/vendor/libs/apex-charts/apex-charts.css'); ?>" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <!-- Menu lateral -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="#" class="app-brand-link">
            <span class="img-fluid">
              <img src="<?= base_url('asset/img/Logo_Comisaría') ?>" class="img-fluid" alt="">
            </span>
          </a>
          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="bi bi-gear-wide mx-2"></i>
              <div data-i18n="Layouts">Administrador</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="#" class="menu-link">
                  <div data-i18n="Usuarios">Usuarios</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?= base_url('admin/roles') ?>" class="menu-link">
                  <div data-i18n="Roles">Roles</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">
                  <div data-i18n="Áreas">Áreas</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Contenedor principal -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
             id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bi bi-search"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Buscar..." aria-label="Buscar..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="<?= base_url('asset/img/avatars/1.png'); ?>" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="<?= base_url('asset/img/avatars/1.png'); ?>" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li><div class="dropdown-divider"></div></li>
                  <li>
                    <a class="dropdown-item" href="#"><i class="bx bx-user me-2"></i> Perfil</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"><i class="bx bx-cog me-2"></i> Configuración</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?= base_url('/logout') ?>"><i class="bx bx-power-off me-2"></i> Cerrar sesión</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
