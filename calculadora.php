<?php
/**
 * DOCTOR AGUA VZLA - CALCULADORA DE HIDRATACIÓN & AHORRO
 */
$currentPage = 'calculadora';
$pageTitle   = 'Calculadora de Hidratación y Ahorro Familiar | Doctor Agua';
require_once __DIR__ . '/includes/header.php';
?>

  <!-- CABECERA DE PÁGINA -->
  <div class="page-header-banner">
    <div class="container">
      <nav class="page-breadcrumb">
        <a href="index.php">Inicio</a>
        <i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i>
        <span>Calculadora de Consumo</span>
      </nav>
      <h1 class="page-header-title">Calculadora de Hidratación y Ahorro</h1>
      <p class="page-header-subtitle">
        Descubre cuánta agua pura necesita tu familia, consultorio o empresa al mes y calcula cuánto dinero ahorras eligiendo el sistema de botellones de Doctor Agua.
      </p>
    </div>
  </div>

  <!-- CALCULADORA INTERACTIVA -->
  <section class="calc-section" style="padding: 5.5rem 0;">
    <div class="container">
      <div class="calc-card">
        <!-- Controles de la Calculadora -->
        <div class="calc-inputs">
          <div class="calc-group">
            <label for="personCountSlider">
              <span>¿Cuántas personas consumen agua diariamente?</span>
              <strong id="personCountValue">4 personas</strong>
            </label>
            <input type="range" id="personCountSlider" class="range-slider" min="1" max="30" value="4">
          </div>

          <div class="calc-group">
            <label>Perfil de Consumo Diario:</label>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
              <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: normal; cursor: pointer;">
                <input type="radio" name="consumptionProfile" value="standard" checked> Estándar Hogar (2.2 L/día)
              </label>
              <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: normal; cursor: pointer;">
                <input type="radio" name="consumptionProfile" value="active"> Activo / Deportivo (3.0 L/día)
              </label>
              <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: normal; cursor: pointer;">
                <input type="radio" name="consumptionProfile" value="office"> Oficina / Jornada laboral (1.8 L/día)
              </label>
            </div>
          </div>

          <div style="background: rgba(255,255,255,0.1); padding: 1.25rem; border-radius: var(--radius-sm); border: 1px solid rgba(255,255,255,0.15);">
            <p style="font-size: 0.9rem; color: rgba(255,255,255,0.85); line-height: 1.6;">
              <i class="fa-solid fa-circle-info" style="color: var(--accent-cyan);"></i> <strong>Dato Médico:</strong> Mantener una ingesta diaria adecuada previene cálculos renales, mejora la digestión, optimiza la elasticidad cutánea y fortalece las defensas naturales.
            </p>
          </div>
        </div>

        <!-- Resultados en Vivo -->
        <div class="calc-results">
          <div class="calc-res-header">
            <h4>Tu Consumo Mensual Estimado</h4>
          </div>

          <div class="calc-res-grid">
            <div class="res-box">
              <span class="res-num" id="calcLitersMonth">264 L</span>
              <span class="res-txt">Litros de Agua al Mes</span>
            </div>
            <div class="res-box">
              <span class="res-num" id="calcBottlesMonth">14 Botellones</span>
              <span class="res-txt">Botellones de 20L</span>
            </div>
          </div>

          <div style="background: #ecfdf5; border: 1px solid #a7f3d0; padding: 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <div>
                <strong style="color: #065f46; display: block; font-size: 0.95rem;">Ahorro estimado mensual:</strong>
                <span style="font-size: 0.8rem; color: #047857;">Frente a comprar botellas plásticas comerciales de 500ml</span>
              </div>
              <strong id="calcEstimatedSavings" style="font-size: 1.6rem; color: #047857;">$175 USD</strong>
            </div>
          </div>

          <a href="#" id="btnOrderCalculated" target="_blank" class="btn-primary" style="width: 100%; text-align: center;">
            <i class="fa-brands fa-whatsapp"></i> Pedir esta cantidad al 0422-8013796
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- GUÍA DE HIDRATACIÓN SALUDABLE -->
  <section class="page-content-section" style="background: #f8fafc;">
    <div class="container">
      <div class="section-header">
        <span class="section-tag"><i class="fa-solid fa-stethoscope"></i> Recomendaciones del Doctor Agua</span>
        <h2 class="section-title">¿Cómo Hidratarse Correctamente?</h2>
        <p class="section-subtitle">Pautas prácticas para incorporar más agua pura a tu rutina diaria.</p>
      </div>

      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon-box">
            <i class="fa-solid fa-sun"></i>
          </div>
          <h3 class="benefit-title">Al Despertar</h3>
          <p class="benefit-desc">Bebe 1 a 2 vasos de agua purificada a temperatura ambiente para activar tus órganos internos y reactivar el metabolismo.</p>
        </div>

        <div class="benefit-card">
          <div class="benefit-icon-box">
            <i class="fa-solid fa-utensils"></i>
          </div>
          <h3 class="benefit-title">Antes de las Comidas</h3>
          <p class="benefit-desc">Un vaso 30 minutos antes de almorzar facilita la producción de enzimas gástricas y favorece una digestión más ligera.</p>
        </div>

        <div class="benefit-card">
          <div class="benefit-icon-box">
            <i class="fa-solid fa-dumbbell"></i>
          </div>
          <h3 class="benefit-title">Durante el Ejercicio</h3>
          <p class="benefit-desc">Toma sorbos pequeños cada 15-20 minutos para reponer electrolitos y evitar calambres o fatiga prematura.</p>
        </div>

        <div class="benefit-card">
          <div class="benefit-icon-box">
            <i class="fa-solid fa-moon"></i>
          </div>
          <h3 class="benefit-title">Antes de Dormir</h3>
          <p class="benefit-desc">Medio vaso de agua antes de acostarte ayuda al sistema cardiovascular a mantener la fluidez circulatoria durante la noche.</p>
        </div>
      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
