<?php
/**
 * DOCTOR AGUA VZLA - FOOTER GLOBAL & SCRIPTS
 */
require_once __DIR__ . '/config.php';
?>
  <!-- ===================================================================
       FOOTER PROFESIONAL MULTIPÁGINA
       =================================================================== -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Columna Marca -->
        <div class="footer-col-brand">
          <img src="assets/images/logo-doctor-agua.svg" alt="Doctor Agua Logo" class="footer-logo">
          <p>
            Especialistas en purificación de agua potable de grado clínico con tecnología de ósmosis inversa, filtración de carbón y desinfección por radiación ultravioleta y ozono.
          </p>
          <div class="top-bar-social">
            <a href="<?php echo htmlspecialchars($company['instagramUrl'] ?? 'https://instagram.com/doctoraguavzla'); ?>" target="_blank" class="social-pill-link">
              <i class="fa-brands fa-instagram"></i> <?php echo htmlspecialchars($company['handle'] ?? '@doctoraguavzla'); ?>
            </a>
          </div>
        </div>

        <!-- Columna Páginas Principales -->
        <div>
          <h4 class="footer-heading">Páginas</h4>
          <ul class="footer-links">
            <li><a href="index.php"><i class="fa-solid fa-angle-right"></i> Inicio</a></li>
            <li><a href="nosotros.php"><i class="fa-solid fa-angle-right"></i> Sobre Nosotros</a></li>
            <li><a href="purificacion.php"><i class="fa-solid fa-angle-right"></i> Proceso de Purificación</a></li>
            <li><a href="servicios.php"><i class="fa-solid fa-angle-right"></i> Productos & Servicios</a></li>
            <li><a href="campanas.php"><i class="fa-solid fa-angle-right"></i> Campañas & Delivery</a></li>
            <li><a href="calculadora.php"><i class="fa-solid fa-angle-right"></i> Calculadora de Ahorro</a></li>
            <li><a href="contacto.php"><i class="fa-solid fa-angle-right"></i> Contacto & Ubicación</a></li>
          </ul>
        </div>

        <!-- Columna Servicios & Productos -->
        <div>
          <h4 class="footer-heading">Nuestros Servicios</h4>
          <ul class="footer-links">
            <li><a href="servicios.php"><i class="fa-solid fa-angle-right"></i> Recarga Botellón 20L Express</a></li>
            <li><a href="campanas.php"><i class="fa-solid fa-angle-right"></i> Despacho en Motocarro a Negocios</a></li>
            <li><a href="servicios.php"><i class="fa-solid fa-angle-right"></i> Botellón Nuevo 20L BPA Free</a></li>
            <li><a href="servicios.php"><i class="fa-solid fa-angle-right"></i> Plan Corporativo para Oficinas</a></li>
            <li><a href="servicios.php"><i class="fa-solid fa-angle-right"></i> Bidones 5L & Dispensadores</a></li>
            <li><a href="campanas.php"><i class="fa-solid fa-angle-right"></i> Programa Hidratación Escolar</a></li>
          </ul>
        </div>

        <!-- Columna Contacto Directo -->
        <div>
          <h4 class="footer-heading">Atención y Pedidos</h4>
          <ul class="footer-links" style="gap: 1rem;">
            <li style="display: flex; gap: 0.5rem; font-size: 0.88rem;">
              <i class="fa-solid fa-location-dot" style="color: var(--accent-cyan); margin-top: 4px;"></i>
              <span><?php echo htmlspecialchars($company['address'] ?? 'Venezuela'); ?></span>
            </li>
            <li style="display: flex; gap: 0.5rem; font-size: 0.88rem;">
              <i class="fa-solid fa-phone" style="color: var(--accent-cyan);"></i>
              <a href="tel:<?php echo htmlspecialchars($company['phoneRaw'] ?? '+584228013796'); ?>"><?php echo htmlspecialchars($company['phone'] ?? '0422-8013796'); ?></a>
            </li>
            <li style="display: flex; gap: 0.5rem; font-size: 0.88rem;">
              <i class="fa-brands fa-whatsapp" style="color: var(--accent-mint);"></i>
              <a href="<?php echo htmlspecialchars($company['whatsappUrl'] ?? 'https://wa.me/584228013796'); ?>" target="_blank"><?php echo htmlspecialchars($company['whatsapp'] ?? '+58 422 801 3796'); ?></a>
            </li>
            <li style="display: flex; gap: 0.5rem; font-size: 0.88rem;">
              <i class="fa-solid fa-clock" style="color: var(--accent-cyan);"></i>
              <span><?php echo htmlspecialchars($company['schedule'] ?? 'Lun - Sáb: 7:30 AM - 6:30 PM'); ?></span>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Doctor Agua (Doctor Agua Vzla C.A.). Todos los derechos reservados. Registro Sanitario Vigente.</p>
        <p>Pureza Grado Clínico &bull; <a href="contacto.php" style="color: var(--accent-cyan);">Atención al Cliente: 0422-8013796</a></p>
      </div>
    </div>
  </footer>

  <!-- ===================================================================
       BOTÓN FLOTANTE DE WHATSAPP (CON PULSO Y TOOLTIP)
       =================================================================== -->
  <div class="floating-whatsapp">
    <div class="floating-wa-tooltip">
      ¡Pide tu agua al 0422-8013796! 💧
    </div>
    <a href="<?php echo htmlspecialchars($company['whatsappUrl'] ?? 'https://wa.me/584228013796'); ?>" target="_blank" rel="noopener noreferrer" class="floating-wa-btn" aria-label="Escríbenos a WhatsApp al 0422-8013796">
      <div class="floating-wa-pulse"></div>
      <i class="fa-brands fa-whatsapp"></i>
    </a>
  </div>

  <!-- ===================================================================
       BOTÓN FLOTANTE VOLVER ARRIBA ESTILO PURIFY
       =================================================================== -->
  <button id="scrollToTopBtn" class="scroll-to-top" aria-label="Volver arriba">
    <i class="fa-solid fa-angle-up"></i>
  </button>

  <!-- Scripts JavaScript con Versionado Automático -->
  <script src="assets/js/main.js?v=<?php echo filemtime(__DIR__ . '/../assets/js/main.js'); ?>"></script>
</body>
</html>
