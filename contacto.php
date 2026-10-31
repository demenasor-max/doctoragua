<?php
/**
 * DOCTOR AGUA VZLA - CONTACTO Y UBICACIÓN
 */
$currentPage = 'contacto';
$pageTitle   = 'Contacto & Ubicación | Haz tu Pedido al 0422-8013796';
require_once __DIR__ . '/includes/header.php';
?>

  <!-- CABECERA DE PÁGINA -->
  <div class="page-header-banner">
    <div class="container">
      <nav class="page-breadcrumb">
        <a href="index.php">Inicio</a>
        <i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i>
        <span>Contacto & Ubicación</span>
      </nav>
      <h1 class="page-header-title">Estamos Para Servirte</h1>
      <p class="page-header-subtitle">
        Comunícate con nuestra línea de atención directa 0422-8013796, solicita servicio de delivery en motocarro o visítanos en nuestra estación de llenado.
      </p>
    </div>
  </div>

  <!-- CONTACTO & FORMULARIO -->
  <section class="page-content-section">
    <div class="container">
      <div class="contact-grid">
        <!-- Panel de Información -->
        <div class="contact-info-panel">
          <div class="contact-card-item">
            <div class="contact-icon-bubble">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="contact-details">
              <h4>Línea de Atención & Pedidos</h4>
              <p>Llamadas directas: <a href="tel:<?php echo htmlspecialchars($company['phoneRaw'] ?? '+584228013796'); ?>" style="font-weight: 800; color: var(--primary);"><?php echo htmlspecialchars($company['phone'] ?? '0422-8013796'); ?></a></p>
              <p>WhatsApp Express: <a href="<?php echo htmlspecialchars($company['whatsappUrl'] ?? 'https://wa.me/584228013796'); ?>" target="_blank" style="font-weight: 700; color: #25D366;"><?php echo htmlspecialchars($company['whatsapp'] ?? '+58 422 801 3796'); ?></a></p>
            </div>
          </div>

          <div class="contact-card-item">
            <div class="contact-icon-bubble">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="contact-details">
              <h4>Nuestra Estación de Llenado</h4>
              <p><?php echo htmlspecialchars($company['address'] ?? 'Av. Principal, Edificio Manantial Salud, Local Doctor Agua, Venezuela'); ?></p>
              <span style="font-size: 0.85rem; color: var(--text-muted); display: block; margin-top: 0.35rem;">
                Estación equipada con cabinas asépticas de lavado hidro-ozonizado.
              </span>
            </div>
          </div>

          <div class="contact-card-item">
            <div class="contact-icon-bubble">
              <i class="fa-solid fa-clock"></i>
            </div>
            <div class="contact-details">
              <h4>Horarios de Atención</h4>
              <p><?php echo htmlspecialchars($company['schedule'] ?? 'Lun - Sáb: 7:30 AM - 6:30 PM | Dom: 8:00 AM - 2:00 PM'); ?></p>
              <span style="font-size: 0.8rem; color: var(--accent-mint); font-weight: 700;">¡Abiertos y despachando los fines de semana!</span>
            </div>
          </div>

          <div class="contact-card-item">
            <div class="contact-icon-bubble" style="background: #fdf2f8; color: #db2777;">
              <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="contact-details">
              <h4>Comunidad en Instagram</h4>
              <p>Tips médicos, promociones semanales y sorteos de botellones:</p>
              <a href="<?php echo htmlspecialchars($company['instagramUrl'] ?? 'https://instagram.com/doctoraguavzla'); ?>" target="_blank" style="font-weight: 800; color: #db2777;">
                <?php echo htmlspecialchars($company['handle'] ?? '@doctoraguavzla'); ?>
              </a>
            </div>
          </div>
        </div>

        <!-- Formulario de Contacto Directo -->
        <div class="contact-form-panel">
          <h3 class="form-title">Envíanos un Mensaje</h3>
          <p class="form-subtitle">Te responderemos en menos de 15 minutos en horario comercial.</p>

          <div id="formFeedback" style="display: none;"></div>

          <form id="contactForm" method="POST" action="send-contact.php">
            <div class="form-group">
              <label class="form-label" for="nombre">Nombre y Apellido *</label>
              <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej. Carlos Pérez" required>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
              <div class="form-group">
                <label class="form-label" for="telefono">WhatsApp / Teléfono *</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="0422-8013796" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="nombre@correo.com">
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="servicio">Servicio o Producto de Interés</label>
              <select id="servicio" name="servicio" class="form-control">
                <option value="Recarga Botellón 20L">Recarga de Botellón 20L</option>
                <option value="Botellón Nuevo + Llenado">Botellón Nuevo 20L + Llenado</option>
                <option value="Servicio Delivery Negocio / Hogar">Servicio Delivery en Motocarro</option>
                <option value="Plan Corporativo Oficina">Plan Corporativo para Empresas / Oficinas</option>
                <option value="Hielo Purificado">Hielo Purificado</option>
                <option value="Otro">Otra consulta</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label" for="mensaje">¿En qué podemos ayudarte?</label>
              <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Indícanos tu zona, dirección de despacho o cualquier requerimiento..."></textarea>
            </div>

            <button type="submit" class="btn-submit-form">
              <i class="fa-solid fa-paper-plane"></i> Enviar Mensaje
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN DE PREGUNTAS FRECUENTES -->
  <section class="faq-section" style="padding: 4.5rem 0; background: #f8fafc;">
    <div class="container">
      <div class="section-header">
        <span class="section-tag"><i class="fa-solid fa-circle-question"></i> Respuestas Rápidas</span>
        <h2 class="section-title">Preguntas Frecuentes</h2>
        <p class="section-subtitle">Aclaramos tus dudas sobre medios de pago, tiempos de entrega y calidad sanitaria.</p>
      </div>

      <div class="faq-accordion">
        <?php foreach ($faqs as $f): ?>
          <div class="faq-item">
            <div class="faq-header">
              <h3 class="faq-question"><?php echo htmlspecialchars($f['question']); ?></h3>
              <i class="fa-solid fa-chevron-down faq-toggle-icon"></i>
            </div>
            <div class="faq-body">
              <div class="faq-content">
                <p><?php echo htmlspecialchars($f['answer']); ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
