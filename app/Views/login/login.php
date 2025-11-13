 <style>
     .login-card {
         background: #fff;
         color: #212529;
         border-radius: 16px;
         box-shadow: 0 10px 40px rgba(0, 0, 0, .2);
         width: 100%;
         max-width: 420px;
         padding: 2rem;
     }

     .login-card .form-control {
         border-radius: 10px;
         padding: 0.75rem 1rem;
     }

     .btn-primary {
         border-radius: 10px;
         padding: .75rem;
         font-weight: 600;
         background: #0d6efd;
     }

     .btn-primary:hover {
         background: #084bcc;
     }

     .logo {
         width: 70px;
         height: 70px;
         object-fit: contain;
         margin-bottom: 1rem;
     }
 </style>
<meta name="base-url" content="<?= base_url() ?>">
 <div class="login-card text-center mx-auto mb-5">
     <img class="" src="<?= base_url('/asset/img/SC.png') ?>" alt="Logo Seguridad Ciudadana" height="40" />
     <h4 class="mb-3 fw-semibold">Iniciar Sesión</h4>
     <form novalidate>
         <div class="mb-3 text-start">
             <label for="email" class="form-label fw-semibold">Correo electrónico</label>
             <input type="email" class="form-control" id="email" placeholder="usuario@dominio.com" required>
         </div>
         <div class="mb-3 text-start">
             <label for="password" class="form-label fw-semibold">Contraseña</label>
             <div class="input-group">
                 <input type="password" class="form-control" id="password" placeholder="••••••••" required>
                 <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="bi bi-eye-fill"></i></i></button>
             </div>
         </div>
         <div class="d-flex justify-content-between align-items-center mb-3">
             <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="" id="remember">
                 <label class="form-check-label" for="remember">Recordarme</label>
             </div>
             <a href="#" class="text-decoration-none small text-primary fw-semibold">¿Olvidaste tu contraseña?</a>
         </div>
         <button onclick="validateLogin()" class="btn btn-primary w-100">Ingresar</button>
     </form>
 </div>
 
 <script src="<?= base_url('/asset/js/login.js') ?>"></script>
