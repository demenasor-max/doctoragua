<?php
/**
 * DOCTOR AGUA VZLA - HEADER & NAVEGACIÓN GLOBAL
 */
require_once __DIR__ . '/config.php';

$currentPage = $currentPage ?? 'inicio';
$pageTitle   = isset($pageTitle) ? $pageTitle . ' | ' . ($company['name'] ?? 'Doctor Agua') : ($company['name'] ?? 'Doctor Agua') . ' | ' . ($company['tagline'] ?? 'Purificación y Envasado');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="Doctor Agua Vzla (@doctoraguavzla): Agua 100% pura y saludable con certificación sanitaria. Llenado de botellones, bidones, servicio express y delivery a la puerta de tu negocio y hogar en Venezuela.">
  <meta name="keywords" content="Doctor Agua, Doctor Agua Vzla, agua purificada, llenado de botellones, recarga botellon 20l, osmosis inversa, agua potable Venezuela, 0422-8013796">

  <!-- Favicon con Isotipo de Gota Doctor -->
  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">

  <!-- Fuentes Tipográficas Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Iconos Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Estilos Principales -->
  <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo filemtime(__DIR__.'/../assets/css/styles.css'); ?>">
<body>

  <!-- ===================================================================
       PRELOADER & TRANSICIÓN ENTRE PÁGINAS CON LA GOTA DOCTOR AGUA
       =================================================================== -->
  <div id="pageLoader" class="page-loader" aria-hidden="true">
    <div class="loader-container">
      <div class="water-spinner-wrapper">
        <!-- Anillos de ondas de agua expansivas -->
        <div class="water-ripple ripple-1"></div>
        <div class="water-ripple ripple-2"></div>
        <div class="water-ripple ripple-3"></div>
        <!-- Anillo rotatorio de purificación -->
        <div class="water-spinner-ring"></div>
        <!-- Centro exacto: Isotipo de la Gota de Doctor Agua -->
        <div class="loader-drop-center">
          <img src="assets/images/favicon.svg" alt="Doctor Agua" class="drop-pulse-img">
        </div>
      </div>
      <div class="loader-brand-label">
        <span class="brand-text">DOCTOR AGUA</span>
        <span class="brand-status">Purificando tu experiencia<span class="loading-dots">...</span></span>
      </div>
    </div>
  </div>

  <!-- Barra de Progreso de Scroll Superior -->
  <div id="scrollProgressBar" class="scroll-progress-bar"></div>

  <!-- ===================================================================
       1. BARRA SUPERIOR (TOP BAR)
       =================================================================== -->
  <header class="top-bar">
    <div class="container">
      <div class="top-bar-contact">
        <span class="top-bar-item">
          <i class="fa-solid fa-phone-volume"></i>
          <a href="tel:<?php echo htmlspecialchars($company['phoneRaw'] ?? '+584228013796'); ?>">
            <?php echo htmlspecialchars($company['phone'] ?? '0422-8013796'); ?>
          </a>
        </span>
        <span class="top-bar-item">
          <i class="fa-solid fa-envelope"></i>
          <a href="mailto:<?php echo htmlspecialchars($company['email'] ?? 'contacto@doctoraguavzla.com'); ?>">
            <?php echo htmlspecialchars($company['email'] ?? 'contacto@doctoraguavzla.com'); ?>
          </a>
        </span>
        <span class="top-bar-item">
          <i class="fa-solid fa-clock"></i>
          <span><?php echo htmlspecialchars($company['schedule'] ?? 'Lun - Sáb: 7:30 AM - 6:30 PM | Dom: 8:00 AM - 2:00 PM'); ?></span>
        </span>
      </div>

      <div class="top-bar-meta">
        <span class="top-bar-item">
          <i class="fa-solid fa-truck-fast" style="color: var(--accent-cyan);"></i>
          <span>¡Delivery Express a tu Negocio y Hogar!</span>
        </span>
        <div class="top-bar-social">
          <a href="<?php echo htmlspecialchars($company['instagramUrl'] ?? 'https://instagram.com/doctoraguavzla'); ?>" target="_blank" rel="noopener noreferrer" class="social-pill-link">
            <i class="fa-brands fa-instagram"></i>
            <span><?php echo htmlspecialchars($company['handle'] ?? '@doctoraguavzla'); ?></span>
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- ===================================================================
       2. NAVBAR MULTIPÁGINA MODERNO & ELEGANTE
       =================================================================== -->
  <div class="header-sticky-wrapper">
    <nav class="navbar" id="navbar">
      <div class="container">
        <!-- Logo Gota Doctor -->
        <a href="index.php" class="brand-link" aria-label="Doctor Agua - Inicio">
          <img src="assets/images/logo-doctor-agua.svg" alt="Doctor Agua Logotipo" class="brand-logo-img">
        </a>

        <!-- Menú de Navegación Multipágina Desktop -->
        <ul class="nav-menu">
          <li><a href="index.php" class="nav-link <?php echo isCurrentPage('inicio', $currentPage); ?>">Inicio</a></li>
          <li><a href="nosotros.php" class="nav-link <?php echo isCurrentPage('nosotros', $currentPage); ?>">Nosotros</a></li>
          <li><a href="purificacion.php" class="nav-link <?php echo isCurrentPage('purificacion', $currentPage); ?>">Purificación</a></li>
          <li><a href="servicios.php" class="nav-link <?php echo isCurrentPage('servicios', $currentPage); ?>">Productos & Llenado</a></li>
          <li><a href="campanas.php" class="nav-link <?php echo isCurrentPage('campanas', $currentPage); ?>">Campañas & Delivery</a></li>
          <li><a href="calculadora.php" class="nav-link <?php echo isCurrentPage('calculadora', $currentPage); ?>">Calculadora</a></li>
          <li><a href="contacto.php" class="nav-link <?php echo isCurrentPage('contacto', $currentPage); ?>">Contacto</a></li>
        </ul>

        <!-- Acciones Destacadas -->
        <div class="nav-actions">
          <a href="<?php echo htmlspecialchars($company['whatsappUrl'] ?? 'https://wa.me/584228013796'); ?>" target="_blank" rel="noopener noreferrer" class="btn-delivery-pulse">
            <span class="pulse-ring"></span>
            <i class="fa-brands fa-whatsapp"></i>
            <span>Pedir Delivery</span>
          </a>

          <!-- Botón Hamburguesa Móvil -->
          <button class="hamburger-btn" id="hamburgerBtn" aria-label="Abrir menú de navegación">
            <div class="hamburger-icon">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </button>
        </div>
      </div>
    </nav>
  </div>

  <!-- Menú Móvil Desplegable -->
  <div class="mobile-nav-panel" id="mobileNavPanel">
    <div class="mobile-nav-links">
      <a href="index.php" class="mobile-nav-link <?php echo isCurrentPage('inicio', $currentPage); ?>"><span>Inicio</span> <i class="fa-solid fa-chevron-right"></i></a>
      <a href="nosotros.php" class="mobile-nav-link <?php echo isCurrentPage('nosotros', $currentPage); ?>"><span>Sobre Nosotros</span> <i class="fa-solid fa-chevron-right"></i></a>
      <a href="purificacion.php" class="mobile-nav-link <?php echo isCurrentPage('purificacion', $currentPage); ?>"><span>8 Fases de Purificación</span> <i class="fa-solid fa-chevron-right"></i></a>
      <a href="servicios.php" class="mobile-nav-link <?php echo isCurrentPage('servicios', $currentPage); ?>"><span>Productos & Llenado</span> <i class="fa-solid fa-chevron-right"></i></a>
      <a href="campanas.php" class="mobile-nav-link <?php echo isCurrentPage('campanas', $currentPage); ?>"><span>Campañas & Delivery Express</span> <i class="fa-solid fa-chevron-right"></i></a>
      <a href="calculadora.php" class="mobile-nav-link <?php echo isCurrentPage('calculadora', $currentPage); ?>"><span>Calculadora de Consumo</span> <i class="fa-solid fa-chevron-right"></i></a>
      <a href="contacto.php" class="mobile-nav-link <?php echo isCurrentPage('contacto', $currentPage); ?>"><span>Ubicación y Contacto</span> <i class="fa-solid fa-chevron-right"></i></a>
    </div>
    <div style="margin-top: 0.75rem;">
      <a href="<?php echo htmlspecialchars($company['whatsappUrl'] ?? 'https://wa.me/584228013796'); ?>" target="_blank" class="btn-primary" style="width: 100%;">
        <i class="fa-brands fa-whatsapp"></i> Pedir al 0422-8013796
      </a>
    </div>
  </div>
