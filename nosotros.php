<?php

/**
 * DOCTOR AGUA VZLA - SOBRE NOSOTROS
 */
$currentPage = 'nosotros';
$pageTitle   = 'Sobre Nosotros | Misión, Salud y Compromiso Médico';
require_once __DIR__ . '/includes/header.php';
?>

<!-- CABECERA DE PÁGINA -->
<div class="page-header-banner">
  <div class="container">
    <nav class="page-breadcrumb">
      <a href="index.php">Inicio</a>
      <i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i>
      <span>Sobre Nosotros</span>
    </nav>
    <h1 class="page-header-title">Sobre Doctor Agua</h1>
    <p class="page-header-subtitle">
      Nacimos con una misión clara: ofrecer a las familias y empresas venezolanas agua de máxima pureza, combinando rigurosos protocolos sanitarios con tecnología de filtración farmacéutica.
    </p>
  </div>
</div>

<!-- SECCIÓN DE IDENTIDAD & MASCOTA OFICIAL -->
<section class="page-content-section" style="padding-bottom: 2rem;">
  <div class="container">
    <div class="mascot-feature-box">
      <div>
        <span class="section-tag"><i class="fa-solid fa-user-doctor"></i> Nuestra Identidad Médica</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: var(--primary-deep); margin: 0.75rem 0 1rem 0;">
          Cada Gota, Una Fuente de Bienestar
        </h2>
        <p style="font-size: 1rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 1.25rem;">
          En <strong>Doctor Agua</strong> (@doctoraguavzla) no concebimos el agua potable simplemente como un producto comercial, sino como el nutriente más fundamental para la vida humana.
        </p>
        <p style="font-size: 1rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 1.5rem;">
          Nuestra mascota oficial —la simpática gota con bata médica y estetoscopio— simboliza ese doble compromiso: la cercanía y calidez de un amigo de confianza junto con la precisión técnica y científica requerida para certificar que cada botellón sea 100% estéril, cristalino y libre de contaminantes.
        </p>
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
          <a href="purificacion.php" class="btn-primary">
            <i class="fa-solid fa-microscope"></i> Ver Proceso de Purificación
          </a>
          <a href="contacto.php" class="btn-secondary">
            <i class="fa-solid fa-location-dot"></i> Visitar Planta
          </a>
        </div>
      </div>

      <div>
        <div class="interactive-img-wrapper">
          <img src="assets/images/bienestar.jpg" alt="Mascota Oficial Doctor Agua - Bienestar" class="mascot-feature-img" style="border: none; box-shadow: none;">
          <span class="interactive-img-tag"><i class="fa-solid fa-droplet"></i> Cada Gota Una Fuente de Bienestar</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISIÓN, VISIÓN Y VALORES -->
<section class="page-content-section" style="background: #f8fafc; padding-top: 3rem;">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-compass"></i> Nuestros Pilares</span>
      <h2 class="section-title">Misión, Visión y Principios</h2>
      <p class="section-subtitle">Los valores que guían cada lote envasado y cada entrega en nuestra comunidad.</p>
    </div>

    <div class="mission-vision-grid">
      <!-- Misión -->
      <div class="mv-card">
        <div class="mv-icon">
          <i class="fa-solid fa-bullseye"></i>
        </div>
        <h3 class="mv-title">Nuestra Misión</h3>
        <p class="mv-desc">
          Proveer a la población agua purificada de grado clínico superior, accesible para todos los hogares y empresas, garantizando la salud digestiva, el bienestar celular y una hidratación óptima respaldada por la ciencia.
        </p>
      </div>

      <!-- Visión -->
      <div class="mv-card">
        <div class="mv-icon" style="background: var(--accent-cyan-light); color: var(--primary-dark);">
          <i class="fa-solid fa-eye"></i>
        </div>
        <h3 class="mv-title">Nuestra Visión</h3>
        <p class="mv-desc">
          Ser la empresa de referencia en purificación y envasado de agua en Venezuela, reconocida por su excelencia tecnológica, transparencia en procesos analíticos y calidez en el servicio a domicilio y corporativo.
        </p>
      </div>

      <!-- Valores -->
      <div class="mv-card">
        <div class="mv-icon" style="background: #ecfdf5; color: var(--accent-mint);">
          <i class="fa-solid fa-shield-heart"></i>
        </div>
        <h3 class="mv-title">Nuestros Valores</h3>
        <p class="mv-desc">
          Rigor sanitario inquebrantable, honestidad en cada análisis de laboratorio, puntualidad en el despacho, respeto por el medio ambiente y vocación de servicio hacia cada familia.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- POR QUÉ LA SALUD EN EL AGUA IMPORTA -->
<section class="page-content-section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-heart-pulse"></i> Salud Preventiva</span>
      <h2 class="section-title">El Agua como Medicina Preventiva</h2>
      <p class="section-subtitle">El 70% de nuestro cuerpo es agua. Consumir agua verdaderamente pura previene problemas de salud acumulativos.</p>
    </div>

    <div class="benefits-grid">
      <div class="benefit-card">
        <div class="benefit-icon-box">
          <i class="fa-solid fa-shield-halved"></i>
        </div>
        <span class="benefit-tag">Cero Bacterias</span>
        <h3 class="benefit-title">Protección Gastrointestinal</h3>
        <p class="benefit-desc">La combinación de luz UV-C y ozonización inactiva al 99.99% bacterias como E. coli, amebas y parásitos comunes en tuberías viejas.</p>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon-box">
          <i class="fa-solid fa-kidneys"></i>
        </div>
        <span class="benefit-tag">Bajo Residuo Seco</span>
        <h3 class="benefit-title">Cuidado Renal y Sin Sarro</h3>
        <p class="benefit-desc">La etapa de ósmosis inversa extrae sales pesadas de cal y sarro, aliviando la carga de filtrado de tus riñones.</p>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon-box">
          <i class="fa-solid fa-brain"></i>
        </div>
        <span class="benefit-tag">Vitalidad Mental</span>
        <h3 class="benefit-title">Rendimiento y Energía</h3>
        <p class="benefit-desc">Un agua con pH equilibrado y electrolitos naturales mejora la oxigenación celular y la concentración de niños y adultos.</p>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon-box">
          <i class="fa-solid fa-baby"></i>
        </div>
        <span class="benefit-tag">Pediátrico</span>
        <h3 class="benefit-title">Apta para Fórmulas y Bebés</h3>
        <p class="benefit-desc">Su neutralidad y pureza absoluta la hacen ideal para preparar biberones y alimentos infantiles sin hervir con cloro.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================================================================
     SECCIÓN MULTIMEDIA - CARRUSEL DE VIDEOS DOCTOR AGUA
     =================================================================== -->
<style>
  .video-carousel-section {
    padding: 5rem 0 5.5rem 0;
    background: linear-gradient(180deg, #f8fafc 0%, #edf6fd 100%);
    position: relative;
    overflow: hidden;
  }

  .video-carousel-section::before {
    content: "";
    position: absolute;
    top: -120px;
    right: -80px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(2, 132, 199, 0.12) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
  }

  /* Pestañas Selectoras de Videos (Capítulos) */
  .video-tabs-nav {
    display: flex;
    justify-content: center;
    gap: 0.75rem;
    flex-wrap: wrap;
    margin-bottom: 2.5rem;
  }

  .video-tab-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.55rem;
    padding: 0.65rem 1.4rem;
    border-radius: 99px;
    background: #ffffff;
    border: 1.5px solid rgba(2, 132, 199, 0.18);
    color: var(--text-secondary);
    font-size: 0.88rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 4px 12px rgba(2, 43, 91, 0.05);
  }

  .video-tab-btn i {
    color: #0284c7;
    font-size: 0.95rem;
    transition: transform 0.25s ease;
  }

  .video-tab-btn:hover {
    border-color: #0284c7;
    color: #002b5b;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(2, 132, 199, 0.2);
  }

  .video-tab-btn.active {
    background: linear-gradient(135deg, #0284c7 0%, #002b5b 100%);
    color: #ffffff;
    border-color: transparent;
    box-shadow: 0 6px 20px rgba(2, 132, 199, 0.35);
    transform: translateY(-2px);
  }

  .video-tab-btn.active i {
    color: #38bdf8;
    transform: scale(1.15);
  }

  /* Contenedor del Carrusel */
  .video-carousel-wrapper {
    position: relative;
    max-width: 1040px;
    margin: 0 auto;
    user-select: none;
  }

  /* Resplandor ambiental de cine */
  .video-ambient-glow {
    position: absolute;
    top: 10%;
    left: 5%;
    right: 5%;
    bottom: 10%;
    background: radial-gradient(ellipse at center, rgba(2, 132, 199, 0.25) 0%, rgba(56, 189, 248, 0.15) 45%, transparent 75%);
    filter: blur(55px);
    z-index: 0;
    pointer-events: none;
    transition: all 0.8s ease;
  }

  .video-track-container {
    position: relative;
    overflow: hidden;
    border-radius: 1.5rem;
    background: #ffffff;
    border: 1px solid rgba(2, 132, 199, 0.15);
    box-shadow: 0 25px 60px -10px rgba(2, 43, 91, 0.18), 0 10px 25px -5px rgba(2, 132, 199, 0.1);
    z-index: 2;
    transition: box-shadow 0.4s ease;
  }

  .video-track-container:hover {
    box-shadow: 0 30px 70px -8px rgba(2, 43, 91, 0.24), 0 12px 30px -4px rgba(2, 132, 199, 0.15);
  }

  .video-track {
    display: flex;
    width: 100%;
    transition: transform 0.65s cubic-bezier(0.25, 1, 0.35, 1);
    will-change: transform;
  }

  .video-slide {
    flex: 0 0 100%;
    width: 100%;
    opacity: 0.95;
    transition: opacity 0.5s ease;
  }

  .video-slide.active-slide {
    opacity: 1;
  }

  /* Tarjeta del Video */
  .video-card {
    display: flex;
    flex-direction: column;
    background: #ffffff;
  }

  /* Pantalla de Reproducción */
  .video-screen-wrapper {
    position: relative;
    width: 100%;
    background: #001226;
    overflow: hidden;
  }

  .video-player {
    width: 100%;
    aspect-ratio: 16 / 9;
    max-height: 490px;
    display: block;
    object-fit: cover;
    background: #001226;
    border: none;
    outline: none;
  }

  /* Badge sobre la pantalla de video */
  .video-badge-overlay {
    position: absolute;
    top: 1rem;
    left: 1rem;
    z-index: 5;
    pointer-events: none;
  }

  .video-status-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    background: rgba(2, 43, 91, 0.8);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    color: #38bdf8;
    font-size: 0.75rem;
    font-weight: 800;
    padding: 0.35rem 0.9rem;
    border-radius: 99px;
    border: 1px solid rgba(56, 189, 248, 0.3);
    letter-spacing: 0.04em;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
  }

  .video-status-badge.badge-green {
    color: #34d399;
    border-color: rgba(52, 211, 153, 0.3);
  }

  .video-status-badge.badge-cyan {
    color: #22d3ee;
    border-color: rgba(34, 211, 238, 0.3);
  }

  .video-status-badge i {
    font-size: 0.65rem;
    animation: srvPulse 2s infinite ease-in-out;
  }

  @keyframes srvPulse {
    0% {
      transform: scale(0.9);
      opacity: 0.7;
    }

    50% {
      transform: scale(1.3);
      opacity: 1;
    }

    100% {
      transform: scale(0.9);
      opacity: 0.7;
    }
  }

  /* Cuerpo informativo del video */
  .video-card-body {
    padding: 2.2rem 2.5rem;
    background: linear-gradient(180deg, #ffffff 0%, #fbfcfe 100%);
    display: flex;
    flex-direction: column;
    gap: 0.6rem;
    transition: transform 0.4s ease, opacity 0.4s ease;
  }

  .video-slide.active-slide .video-card-body {
    animation: videoContentPopIn 0.55s cubic-bezier(0.25, 1, 0.35, 1) both;
  }

  @keyframes videoContentPopIn {
    from {
      opacity: 0;
      transform: translateY(14px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .video-meta-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 0.2rem;
  }

  .video-tag-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    background: rgba(2, 132, 199, 0.09);
    color: #0284c7;
    font-size: 0.78rem;
    font-weight: 800;
    padding: 0.3rem 0.85rem;
    border-radius: 99px;
    border: 1px solid rgba(2, 132, 199, 0.18);
  }

  .video-tag-pill.tag-green {
    background: rgba(16, 185, 129, 0.09);
    color: #059669;
    border-color: rgba(16, 185, 129, 0.2);
  }

  .video-tag-pill.tag-cyan {
    background: rgba(6, 182, 212, 0.09);
    color: #0891b2;
    border-color: rgba(6, 182, 212, 0.2);
  }

  .video-duration {
    font-size: 0.82rem;
    font-weight: 700;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.4rem;
  }

  .video-duration i {
    color: #0284c7;
  }

  .video-title {
    font-size: 1.55rem;
    font-weight: 900;
    color: #002b5b;
    line-height: 1.3;
    margin: 0.2rem 0;
    letter-spacing: -0.015em;
  }

  .video-description {
    font-size: 0.93rem;
    color: #475569;
    line-height: 1.65;
    margin: 0 0 0.8rem;
  }

  .video-features-chips {
    display: flex;
    flex-wrap: wrap;
    gap: 0.6rem;
    padding-top: 0.8rem;
    border-top: 1px solid #f1f5f9;
  }

  .video-features-chips .chip {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    font-size: 0.82rem;
    font-weight: 700;
    color: #002b5b;
    background: #f1f5f9;
    padding: 0.35rem 0.85rem;
    border-radius: 99px;
    transition: all 0.2s ease;
  }

  .video-features-chips .chip:hover {
    background: #e0f2fe;
    color: #0284c7;
    transform: translateY(-1px);
  }

  .video-features-chips .chip i {
    color: #10b981;
    font-size: 0.8rem;
  }

  /* Flechas de Navegación */
  .video-nav-arrow {
    position: absolute;
    top: 40%;
    transform: translateY(-50%);
    width: 3.4rem;
    height: 3.4rem;
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.9);
    background: rgba(255, 255, 255, 0.94);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    color: #002b5b;
    font-size: 1.15rem;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 10px 25px rgba(2, 43, 91, 0.18);
    z-index: 10;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .video-nav-arrow:hover {
    background: #0284c7;
    color: #ffffff;
    border-color: #0284c7;
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 12px 30px rgba(2, 132, 199, 0.45);
  }

  .video-nav-arrow:active {
    transform: translateY(-50%) scale(0.95);
  }

  .video-prev {
    left: -1.35rem;
  }

  .video-next {
    right: -1.35rem;
  }

  /* Indicadores Dots */
  .video-dots-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.65rem;
    margin-top: 1.6rem;
  }

  .video-dot {
    height: 0.6rem;
    width: 0.6rem;
    border-radius: 99px;
    border: none;
    background: #cbd5e1;
    cursor: pointer;
    padding: 0;
    transition: width 0.4s cubic-bezier(0.25, 1, 0.35, 1), background-color 0.4s ease, box-shadow 0.4s ease;
  }

  .video-dot.active {
    width: 2.2rem;
    background: linear-gradient(90deg, #0284c7, #002b5b);
    box-shadow: 0 4px 12px rgba(2, 132, 199, 0.35);
  }

  .video-dot:hover:not(.active) {
    background: #94a3b8;
    transform: scale(1.2);
  }

  .video-counter-indicator {
    text-align: center;
    margin-top: 0.6rem;
    font-size: 0.82rem;
    color: #94a3b8;
    font-weight: 800;
    letter-spacing: 0.06em;
  }

  .video-counter-indicator span {
    color: #0284c7;
    font-weight: 900;
  }

  @media (max-width: 768px) {
    .video-card-body {
      padding: 1.5rem 1.25rem;
    }

    .video-title {
      font-size: 1.25rem;
    }

    .video-prev {
      left: 0.25rem;
    }

    .video-next {
      right: 0.25rem;
    }

    .video-nav-arrow {
      width: 2.8rem;
      height: 2.8rem;
      font-size: 0.95rem;
    }
  }
</style>

<section class="video-carousel-section" id="videos-nosotros">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-circle-play"></i> Experiencia Multimedia</span>
      <h2 class="section-title">Conoce Nuestras Instalaciones y Calidad en Video</h2>
      <p class="section-subtitle">Descubre con total transparencia cómo purificamos cada gota, el riguroso protocolo de desinfección y el equipo humano detrás de Doctor Agua.</p>
    </div>

    <!-- Pestañas Selectoras de Videos (Capítulos) -->
    <div class="video-tabs-nav">
      <button class="video-tab-btn active" data-video-index="0">
        <i class="fa-solid fa-industry"></i>
        <span>1. Planta & Ósmosis Inversa</span>
      </button>
      <button class="video-tab-btn" data-video-index="1">
        <i class="fa-solid fa-shield-virus"></i>
        <span>2. Desinfección Ozonizada</span>
      </button>
      <button class="video-tab-btn" data-video-index="2">
        <i class="fa-solid fa-hand-holding-droplet"></i>
        <span>3. Compromiso Familiar</span>
      </button>
    </div>

    <!-- Carrusel de Videos Principal -->
    <div class="video-carousel-wrapper" id="videoCarousel">
      <!-- Glow ambiental de fondo -->
      <div class="video-ambient-glow" id="videoAmbientGlow"></div>

      <div class="video-track-container">
        <div class="video-track" id="videoTrack">

          <!-- Video Slide 1: Planta y Filtrado -->
          <div class="video-slide active-slide" data-slide="0">
            <div class="video-card">
              <div class="video-screen-wrapper">
                <video class="video-player" id="videoPlayer1" controls preload="metadata" poster="assets/images/calidad.jpg">
                  <source src="assets/videos/3735764-hd_1920_1080_25fps.mp4" type="video/mp4">
                  Tu navegador no soporta reproducción de video HTML5.
                </video>
                <div class="video-badge-overlay">
                  <span class="video-status-badge"><i class="fa-solid fa-circle-dot"></i> Video Oficial 01</span>
                </div>
              </div>
              <div class="video-card-body">
                <div class="video-meta-top">
                  <span class="video-tag-pill"><i class="fa-solid fa-microscope"></i> Tecnología Biomédica</span>
                  <span class="video-duration"><i class="fa-regular fa-clock"></i> 0:52 min</span>
                </div>
                <h3 class="video-title">Recorrido por Nuestra Planta de Filtrado y Ósmosis Inversa</h3>
                <p class="video-description">
                  Te mostramos las 8 etapas de purificación en acción: desde los lechos de carbón activado y desmineralización molecular hasta la filtración esterilizante que asegura pureza de grado clínico.
                </p>
                <div class="video-features-chips">
                  <span class="chip"><i class="fa-solid fa-check"></i> Membranas de Ósmosis 0.0001 micras</span>
                  <span class="chip"><i class="fa-solid fa-check"></i> Monitoreo de Conductividad</span>
                  <span class="chip"><i class="fa-solid fa-check"></i> Cero Químicos Agresivos</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Video Slide 2: Lavado Ozonizado -->
          <div class="video-slide" data-slide="1">
            <div class="video-card">
              <div class="video-screen-wrapper">
                <video class="video-player" id="videoPlayer1" controls preload="metadata" poster="assets/images/calidad.jpg">
                  <source src="assets/videos/15661915_1080_1920_30fps.mp4" type="video/mp4">
                  Tu navegador no soporta reproducción de video HTML5.
                </video>
                <div class="video-badge-overlay">
                  <span class="video-status-badge badge-green"><i class="fa-solid fa-circle-dot"></i> Video Oficial 02</span>
                </div>
              </div>
              <div class="video-card-body">
                <div class="video-meta-top">
                  <span class="video-tag-pill tag-green"><i class="fa-solid fa-spray-can-sparkles"></i> Higiene y Protocolo</span>
                  <span class="video-duration"><i class="fa-regular fa-clock"></i> 0:38 min</span>
                </div>
                <h3 class="video-title">Circuito de Lavado Interior y Exterior con Ozono Activo</h3>
                <p class="video-description">
                  Cada botellón que ingresa a Doctor Agua recibe un tratamiento integral de lavado a presión con agua ozonizada y esterilización UV-C, eliminando microorganismos y garantizando sabor 100% neutro.
                </p>
                <div class="video-features-chips">
                  <span class="chip"><i class="fa-solid fa-check"></i> Inactivación Viral al 99.99%</span>
                  <span class="chip"><i class="fa-solid fa-check"></i> Tapa con Precinto Antiderrame</span>
                  <span class="chip"><i class="fa-solid fa-check"></i> Envases 100% BPA Free</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Video Slide 3: Entrega y Compromiso -->
          <div class="video-slide" data-slide="2">
            <div class="video-card">
              <div class="video-screen-wrapper">
                <video class="video-player" id="videoPlayer2" controls preload="metadata" poster="assets/images/surtetunegocio.jpg">
                  <source src="assets/videos/1266745199-640_adpp_is.mp4" type="video/mp4">
                  Tu navegador no soporta reproducción de video HTML5.
                </video>
                <div class="video-badge-overlay">
                  <span class="video-status-badge badge-cyan"><i class="fa-solid fa-circle-dot"></i> Video Oficial 03</span>
                </div>
              </div>
              <div class="video-card-body">
                <div class="video-meta-top">
                  <span class="video-tag-pill tag-cyan"><i class="fa-solid fa-truck-fast"></i> Entrega Express</span>
                  <span class="video-duration"><i class="fa-regular fa-clock"></i> 0:45 min</span>
                </div>
                <h3 class="video-title">Del Manantial Clínico a tu Hogar y Comercio</h3>
                <p class="video-description">
                  Conoce nuestra flota de motocarros y el equipo de despacho express dedicado a llevar hidratación segura a familias, consultorios, oficinas y colegios con puntualidad insuperable.
                </p>
                <div class="video-features-chips">
                  <span class="chip"><i class="fa-solid fa-check"></i> Despacho Directo a la Puerta</span>
                  <span class="chip"><i class="fa-solid fa-check"></i> Planes para Empresas y Negocios</span>
                  <span class="chip"><i class="fa-solid fa-check"></i> Atención Rápida por WhatsApp</span>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /video-track -->
      </div><!-- /video-track-container -->

      <!-- Flechas de Navegación Flotantes -->
      <button class="video-nav-arrow video-prev" id="videoPrevBtn" aria-label="Video anterior">
        <i class="fa-solid fa-chevron-left"></i>
      </button>
      <button class="video-nav-arrow video-next" id="videoNextBtn" aria-label="Siguiente video">
        <i class="fa-solid fa-chevron-right"></i>
      </button>

      <!-- Dots Píldora Inteligentes -->
      <div class="video-dots-container" id="videoDots">
        <button class="video-dot active" data-index="0" aria-label="Ir a video 1"></button>
        <button class="video-dot" data-index="1" aria-label="Ir a video 2"></button>
        <button class="video-dot" data-index="2" aria-label="Ir a video 3"></button>
      </div>

      <div class="video-counter-indicator">
        Video <span id="videoCurrentNum">1</span> de 3
      </div>
    </div>
  </div>
</section>

<script>
  (function() {
    'use strict';

    var track = document.getElementById('videoTrack');
    var prevBtn = document.getElementById('videoPrevBtn');
    var nextBtn = document.getElementById('videoNextBtn');
    var dots = document.querySelectorAll('.video-dot');
    var tabs = document.querySelectorAll('.video-tab-btn');
    var slides = document.querySelectorAll('.video-slide');
    var counterNum = document.getElementById('videoCurrentNum');
    var glow = document.getElementById('videoAmbientGlow');
    var total = slides.length;
    var currentIdx = 0;

    // Lista de todos los elementos video
    var allVideos = document.querySelectorAll('.video-player');

    // Colores de aura ambiental para cada video
    var glowColors = [
      'radial-gradient(ellipse at center, rgba(2, 132, 199, 0.3) 0%, rgba(56, 189, 248, 0.18) 45%, transparent 75%)',
      'radial-gradient(ellipse at center, rgba(16, 185, 129, 0.3) 0%, rgba(52, 211, 153, 0.18) 45%, transparent 75%)',
      'radial-gradient(ellipse at center, rgba(6, 182, 212, 0.3) 0%, rgba(34, 211, 238, 0.18) 45%, transparent 75%)'
    ];

    function pauseAllVideos() {
      allVideos.forEach(function(vid) {
        if (!vid.paused) {
          vid.pause();
        }
      });
    }

    function goToVideo(idx) {
      // 1. Pausar inmediatamente cualquier video en reproducción
      pauseAllVideos();

      // 2. Calcular índice circular
      currentIdx = ((idx % total) + total) % total;

      // 3. Mover el track con transición fluida
      if (track) {
        track.style.transform = 'translateX(-' + (currentIdx * 100) + '%)';
      }

      // 4. Actualizar estado activo en slides
      slides.forEach(function(slide, i) {
        slide.classList.toggle('active-slide', i === currentIdx);
      });

      // 5. Actualizar tabs superiores
      tabs.forEach(function(tab) {
        var tabIdx = parseInt(tab.getAttribute('data-video-index'));
        tab.classList.toggle('active', tabIdx === currentIdx);
      });

      // 6. Actualizar dots indicadores
      dots.forEach(function(dot) {
        var dotIdx = parseInt(dot.getAttribute('data-index'));
        dot.classList.toggle('active', dotIdx === currentIdx);
      });

      // 7. Actualizar contador numérico
      if (counterNum) {
        counterNum.textContent = currentIdx + 1;
      }

      // 8. Efecto de cambio de aura ambiental
      if (glow && glowColors[currentIdx]) {
        glow.style.background = glowColors[currentIdx];
      }
    }

    // Event Listeners Flechas
    if (prevBtn) {
      prevBtn.addEventListener('click', function() {
        goToVideo(currentIdx - 1);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function() {
        goToVideo(currentIdx + 1);
      });
    }

    // Event Listeners Tabs
    tabs.forEach(function(tab) {
      tab.addEventListener('click', function() {
        var target = parseInt(tab.getAttribute('data-video-index'));
        goToVideo(target);
      });
    });

    // Event Listeners Dots
    dots.forEach(function(dot) {
      dot.addEventListener('click', function() {
        var target = parseInt(dot.getAttribute('data-index'));
        goToVideo(target);
      });
    });

    // Swipe táctil para dispositivos móviles
    if (track) {
      var touchStartX = 0;
      track.addEventListener('touchstart', function(e) {
        touchStartX = e.touches[0].clientX;
      }, {
        passive: true
      });

      track.addEventListener('touchend', function(e) {
        var touchEndX = e.changedTouches[0].clientX;
        var diffX = touchEndX - touchStartX;
        if (Math.abs(diffX) > 45) {
          if (diffX < 0) {
            goToVideo(currentIdx + 1);
          } else {
            goToVideo(currentIdx - 1);
          }
        }
      }, {
        passive: true
      });
    }

    // Pausar los demás si el usuario da play directo a un video
    allVideos.forEach(function(vid) {
      vid.addEventListener('play', function() {
        allVideos.forEach(function(other) {
          if (other !== vid && !other.paused) {
            other.pause();
          }
        });
      });
    });
  })();
</script>


<!-- CTA FINAL -->
<section style="padding: 3.5rem 0; background: var(--grad-cta); color: #fff; text-align: center;">
  <div class="container">
    <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 0.75rem;">¿Quieres conocer nuestra planta de llenado?</h2>
    <p style="font-size: 1.05rem; max-width: 600px; margin: 0 auto 1.75rem auto; color: rgba(255,255,255,0.9);">
      Visítanos en nuestra sede o solicita tu pedido a domicilio por WhatsApp al 0422-8013796.
    </p>
    <a href="contacto.php" class="btn-primary" style="background: #ffffff; color: var(--primary-deep); font-weight: 800;">
      <i class="fa-solid fa-location-dot"></i> Ver Datos de Contacto y Horarios
    </a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>