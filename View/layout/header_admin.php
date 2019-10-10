<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Administrador</title>
  <link rel="stylesheet" href="<?=URL?>assets/fonts/fonts1.css">
  <link rel="stylesheet" href="<?=URL?>assets/css/style.css">
  <link rel="stylesheet" href="<?=URL?>assets/css/style.scss">
  <link rel="stylesheet" href="<?=URL?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=URL?>assets/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?=URL?>assets/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="<?=URL?>assets/css/aragon.min.css" type="text/css">
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="">
          <img src="<?=URL?>assets/images/admin/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="pasar nav-item">
              <a class="nav-link" href="<?=URL?>Admin/">
                <i class="fas fa-home"></i>
                <span class="nav-link-text">Inicio</span>
              </a>
            </li>
            <li class="pasar nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-camera-retro"></i>
                <span class="nav-link-text">Comentarios</span>
              </a>
            </li>

            <li class="pasar nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-camera-retro"></i>
                <span class="nav-link-text">Contacto</span>
              </a>
            </li>

            <li class="pasar nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-tasks"></i>
                <span class="nav-link-text">Lista De Ordenes</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="pasar nav-link" href="#navbar-slides" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-images"></i>
                <span class="nav-link-text">Slides</span>
              </a>
              <div class="collapse" id="navbar-slides">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Todos Los Articulos</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Añadir Nuevo</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Slides</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="pasar nav-link" href="#navbar-usuario" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-user-tie"></i>
                <span class="nav-link-text">Usuarios</span>
              </a>
              <div class="collapse" id="navbar-usuario">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?=URL?>Admin/Ver" class="pasar nav-link">Todos Los Usuarios</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=URL?>Admin/Nuevo" class="pasar nav-link">Añadir Nuevo</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=URL?>Admin/Profile&cod=<?=$_SESSION['identity']->name_user;?>" class="pasar nav-link">Tu Perfil</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="pasar nav-link" href="#navbar-producto" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-box-open"></i>
                <span class="nav-link-text">Productos</span>
              </a>
              <div class="collapse" id="navbar-producto">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Todos Los Productos</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Añadir Nuevo</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Categorias</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Etiquetas</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Atributos</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="pasar nav-link" href="#navbar-analisis" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="far fa-chart-bar"></i>
                <span class="nav-link-text">Analisis</span>
              </a>
              <div class="collapse" id="navbar-analisis">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Ingresos</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Pedidos</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Categorias</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Cupones</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Impuestos</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Inventario</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="pasar nav-link">Clientes</a>
                  </li>
                </ul>
              </div>
            </li>

          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">CONFIGURACIONES</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="pasar nav-item">
              <a class="nav-link" href="#" target="_blank">
                <i class="fas fa-question"></i>
                <span class="nav-link-text">Ayuda</span>
              </a>
            </li>
            <li class="pasar nav-item">
              <a class="nav-link" href="<?=URL?>/Login/layout">
                <i class="fas fa-door-open"></i>
                <span class="nav-link-text">Cerrar Sesión</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Buscar" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">13</strong> notificaciones.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="<?=URL?>assets/images/admin/cliente/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Juanito Limaña</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>Hacer 1 hora</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Nuvo reporte xd.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#" class="dropdown-item text-center text-primary font-weight-bold py-3">Ver Todos</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-clone"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendario</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Pagos</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reportes</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Mapa</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Tienda</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?=URL?>assets/images/admin/cliente/team-5.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?=$_SESSION['identity']->nombre . ' ' . $_SESSION['identity']->apellido?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Bienvenido!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="fas fa-users"></i>
                  <span>Mi Perfil</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fas fa-cogs"></i>
                  <span>Configuración</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Actividad</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fas fa-question"></i>
                  <span>Ayuda</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?=URL?>Login/layout" class="dropdown-item">
                  <i class="fas fa-door-open"></i>
                  <span>Cerrar Sesión</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>