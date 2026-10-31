<?php

/**
 * DOCTOR AGUA VZLA - PROCESO DE PURIFICACIÓN
 */
$currentPage = 'purificacion';
$pageTitle   = 'Proceso de Purificación en 8 Fases | Rigor Científico y Calidad';
require_once __DIR__ . '/includes/header.php';
?>

<!-- CABECERA DE PÁGINA -->
<div class="page-header-banner">
  <div class="container">
    <nav class="page-breadcrumb">
      <a href="index.php">Inicio</a>
      <i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i>
      <span>Purificación</span>
    </nav>
    <h1 class="page-header-title">Tecnología de Purificación en 8 Fases</h1>
    <p class="page-header-subtitle">
      Descubre la ingeniería y los principios biomédicos aplicados para convertir el agua cruda en un líquido 100% estéril, cristalino y enriquecido con minerales saludables.
    </p>
  </div>
</div>

<!-- SECCIÓN DE LAS 8 ETAPAS -->
<section class="page-content-section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-flask-vial"></i> Control Etapa por Etapa</span>
      <h2 class="section-title">El Recorrido Hacia la Máxima Pureza</h2>
      <p class="section-subtitle">Cada fase cumple un propósito físico, químico y biológico indispensable para garantizar la salud de tu familia.</p>
    </div>

    <div class="process-grid">
      <?php foreach ($process as $p): ?>
        <div class="process-step-card">
          <div class="process-card-top">
            <span class="step-badge"><?php echo htmlspecialchars($p['step']); ?></span>
            <i class="<?php echo htmlspecialchars($p['icon']); ?> step-icon"></i>
          </div>
          <h3 class="process-step-name"><?php echo htmlspecialchars($p['name']); ?></h3>
          <span class="process-step-tech"><?php echo htmlspecialchars($p['tech']); ?></span>
          <p class="process-step-desc"><?php echo htmlspecialchars($p['description']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Banner de Confianza y Lavado Ozonizado -->
    <div class="quality-guarantee-banner">
      <div class="quality-banner-content">
        <h3>¿Cómo Higienizamos tu Botellón al Recargarlo?</h3>
        <p>
          En Doctor Agua no realizamos enjuagues superficiales con agua de chorro. Cada botellón pasa por una cabina presurizada donde se le inyecta una solución concentrada de <strong>agua hidro-ozonizada</strong> que disuelve el biofilm, elimina olores residuales y esteriliza cada rincón antes de recibir el agua purificada.
        </p>
      </div>
      <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Deseo%20hacer%20una%20recarga%20segura%20de%20botell%C3%B3n." target="_blank" class="btn-primary" style="background: #ffffff; color: var(--primary-deep); font-weight: 800; white-space: nowrap;">
        <i class="fa-solid fa-shield-virus" style="color: var(--primary);"></i> Solicitar Recarga Segura
      </a>
    </div>
  </div>
</section>

<!-- TABLA DE PARÁMETROS DE CALIDAD -->
<section class="page-content-section" style="background: #f8fafc;">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-chart-simple"></i> Estándares Analíticos</span>
      <h2 class="section-title">Tabla de Parámetros Garantizados</h2>
      <p class="section-subtitle">Comparativa entre el agua común de red y los estándares certificados de Doctor Agua.</p>
    </div>

    <div style="background: #ffffff; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border-light); max-width: 900px; margin: 0 auto;">
      <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
        <thead>
          <tr style="background: var(--primary-deep); color: #ffffff;">
            <th style="padding: 1.2rem 1.5rem;">Parámetro Analizado</th>
            <th style="padding: 1.2rem 1.5rem;">Agua de Grifo / Red</th>
            <th style="padding: 1.2rem 1.5rem; background: var(--primary);">Doctor Agua Vzla</th>
          </tr>
        </thead>
        <tbody>
          <tr style="border-bottom: 1px solid #f1f5f9;">
            <td style="padding: 1rem 1.5rem; font-weight: 700;">Nivel de pH (Alcalinidad)</td>
            <td style="padding: 1rem 1.5rem; color: #ef4444;">6.0 - 6.8 (Ácido/Inestable)</td>
            <td style="padding: 1rem 1.5rem; color: #0284c7; font-weight: 800;">7.5 - 8.0 (Alcalino Saludable)</td>
          </tr>
          <tr style="border-bottom: 1px solid #f1f5f9; background: #fafafa;">
            <td style="padding: 1rem 1.5rem; font-weight: 700;">Cloro y Subproductos</td>
            <td style="padding: 1rem 1.5rem; color: #ef4444;">Presente (Olor y sabor fuerte)</td>
            <td style="padding: 1rem 1.5rem; color: #10b981; font-weight: 800;">0.00 ppm (100% Libre)</td>
          </tr>
          <tr style="border-bottom: 1px solid #f1f5f9;">
            <td style="padding: 1rem 1.5rem; font-weight: 700;">Metales Pesados (Plomo, Cobre)</td>
            <td style="padding: 1rem 1.5rem; color: #ef4444;">Trazas por tuberías viejas</td>
            <td style="padding: 1rem 1.5rem; color: #10b981; font-weight: 800;">Indetectable / Cero</td>
          </tr>
          <tr style="border-bottom: 1px solid #f1f5f9; background: #fafafa;">
            <td style="padding: 1rem 1.5rem; font-weight: 700;">Bacterias, Coliformes y Virus</td>
            <td style="padding: 1rem 1.5rem; color: #ef4444;">Riesgo de contaminación</td>
            <td style="padding: 1rem 1.5rem; color: #10b981; font-weight: 800;">0 UFC/ml (100% Estéril UV+Ozono)</td>
          </tr>
          <tr>
            <td style="padding: 1rem 1.5rem; font-weight: 700;">Sólidos Disueltos Totales (TDS)</td>
            <td style="padding: 1rem 1.5rem;">250 - 500+ ppm (Agua pesada)</td>
            <td style="padding: 1rem 1.5rem; color: #0284c7; font-weight: 800;">30 - 60 ppm (Ligera y suave)</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- CTA FINAL -->
<section style="padding: 3.5rem 0; background: var(--grad-cta); color: #fff; text-align: center;">
  <div class="container">
    <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 0.75rem;">Comprueba la diferencia en cada trago</h2>
    <p style="font-size: 1.05rem; max-width: 600px; margin: 0 auto 1.75rem auto; color: rgba(255,255,255,0.9);">
      Pide tu recarga al 0422-8013796 y disfruta de agua purificada con certificación sanitaria.
    </p>
    <a href="servicios.php" class="btn-primary" style="background: #ffffff; color: var(--primary-deep); font-weight: 800;">
      <i class="fa-solid fa-boxes-stacked"></i> Ver Productos y Precios
    </a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>