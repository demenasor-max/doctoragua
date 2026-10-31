<?php

/**
 * DOCTOR AGUA VZLA - HOMEPAGE PRINCIPAL
 */
$currentPage = 'inicio';
$pageTitle   = 'Doctor Agua | Agua 100% Pura y Saludable para tu Hogar y Empresa';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ===================================================================
       HERO SECTION PRINCIPAL (CON MASCOTA OFICIAL 3D)
       =================================================================== -->
<section class="hero-section" id="hero">
  <div class="hero-bg-shapes">
    <div class="shape-glow-circle-1"></div>
    <div class="shape-glow-circle-2"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
  </div>

  <div class="container hero-grid">
    <!-- Contenido Izquierdo -->
    <div class="hero-content">
      <div class="hero-badge">
        <i class="fa-solid fa-circle-check" style="color: var(--accent-mint);"></i>
        <span>Pureza Médica y Calidad Certificada</span>
      </div>

      <h1 class="hero-title">
        Agua 100% Pura y Saludable para tu
        <span class="gradient-text">Hogar y Negocio</span>
      </h1>

      <p class="hero-description">
        En Doctor Agua fusionamos tecnologí­a de filtrado multietapa avanzada con rigurosos estándares biomédicos para ofrecerte un agua cristalina, libre de metales pesados y equilibrada para el bienestar de toda tu familia.
      </p>

      <div class="hero-cta-group">
        <a href="<?php echo htmlspecialchars($company['whatsappUrl'] ?? 'https://wa.me/584228013796'); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary">
          <i class="fa-brands fa-whatsapp"></i>
          <span>Pedir Delivery al 0422-8013796</span>
        </a>
        <a href="purificacion.php" class="btn-secondary">
          <i class="fa-solid fa-microscope"></i>
          <span>Nuestros Procesos</span>
        </a>
      </div>

      <!-- Mini Métricas de Confianza -->
      <div class="hero-stats-bar">
        <div class="stat-item">
          <span class="stat-number">99.9%</span>
          <span class="stat-label">Pureza microbiológica</span>
          <span class="stat-sub">Cero bacterias ni cloro</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">7.5 - 8.0</span>
          <span class="stat-label">Nivel de pH óptimo</span>
          <span class="stat-sub">Alcalinidad saludable</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">8 Fases</span>
          <span class="stat-label">Filtración de precisión</span>
          <span class="stat-sub">í“smosis + UV + Ozono</span>
        </div>
        <div class="stat-item">
          <span class="stat-number">+25K</span>
          <span class="stat-label">Botellones llenados</span>
          <span class="stat-sub">Familias satisfechas</span>
        </div>
      </div>
    </div>

    <!-- Visual Derecho (Mascota Oficial y Botellón de Bienestar) -->
    <div class="hero-visual-card">
      <div class="hero-main-img-wrapper">
        <img src="assets/images/bienestar.jpg"
          alt="Doctor Agua - Cada Gota una Fuente de Bienestar" class="hero-main-img">
      </div>

      <!-- Badge Flotante Superior -->
      <div class="floating-card-badge badge-top-left">
        <div class="floating-card-icon">
          <i class="fa-solid fa-shield-halved"></i>
        </div>
        <div class="floating-card-text">
          <strong>Calidad Médica</strong>
          <span>8 Etapas de Purificación</span>
        </div>
      </div>

      <!-- Badge Flotante Inferior -->
      <div class="floating-card-badge badge-bottom-right">
        <div class="floating-card-icon" style="background: var(--grad-mint);">
          <i class="fa-solid fa-truck-fast"></i>
        </div>
        <div class="floating-card-text">
          <strong>Recarga Express</strong>
          <span>¡Directo a tu Negocio!</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Ondulaciones de agua integradas desde el fondo hero-bg-purify.jpg -->
</section>

<!-- ===================================================================
       SECCIí“N DE BENEFICIOS / í‚¿POR QUí­€° ELEGIRNOS?
       =================================================================== -->
<section class="benefits-section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-droplet"></i> ¿Por qué elegir Doctor Agua?</span>
      <h2 class="section-title">Ciencia, Pureza y Compromiso con tu Salud</h2>
      <p class="section-subtitle">No toda el agua es igual. Te explicamos los beneficios tangibles de consumir agua tratada con tecnologí­­a de grado clí­­nico y alcalinidad balanceada.</p>
    </div>

    <div class="benefits-grid">
      <?php foreach ($benefits as $b): ?>
        <div class="benefit-card">
          <div class="benefit-icon-box">
            <i class="<?php echo htmlspecialchars($b['icon']); ?>"></i>
          </div>
          <span class="benefit-tag"><?php echo htmlspecialchars($b['tag']); ?></span>
          <h3 class="benefit-title"><?php echo htmlspecialchars($b['title']); ?></h3>
          <p class="benefit-desc"><?php echo htmlspecialchars($b['description']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 2.5rem;">
      <a href="nosotros.php" class="btn-secondary">
        <span>Conoce nuestra historia y estándares médicos &rarr;</span>
      </a>
    </div>
  </div>
</section>

<!-- ===================================================================
       CAMPAÑAS OFICIALES & DELIVERY EXPRESS A TU PUERTA
       =================================================================== -->
<section class="campaigns-section" id="campanas">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-bullhorn"></i> Campañas Oficiales @doctoraguavzla</span>
      <h2 class="section-title">Servicio y Bienestar Para Tu Familia y Negocio</h2>
      <p class="section-subtitle">Conoce nuestras iniciativas activas de entrega express a negocios y el programa de hidratación escolar.</p>
    </div>

    <div class="campaigns-grid">
      <!-- Tarjeta Campaña 1: Delivery Negocio Oficial  -->
      <div class="campaign-card">
        <div class="campaign-img-box">
          <img src="assets/images/delivery3.jpg" alt="Delivery Express Doctor Agua hasta tu Negocio - Nosotros Te Lo Llevamos" class="campaign-img campaign-img-delivery">
          <span class="campaign-tag-badge"><i class="fa-solid fa-truck-fast"></i> ¡Nosotros Te Lo Llevamos!</span>
        </div>
        <div class="campaign-body">
          <div>
            <h3 class="campaign-title">Haz tu Pedido y Te lo Llevamos a la Puerta de tu Negocio</h3>
            <p class="campaign-sub">
              Suministro ágil y puntual de botellones de 20L para comercios, oficinas, talleres y residencias. Nuestro servicio en motocarro garantiza frescura inmediata sin retrasos.
            </p>
          </div>
          <div class="campaign-cta-row">
            <span class="campaign-phone-chip">
              <i class="fa-solid fa-phone"></i> 0422-8013796
            </span>
            <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Deseo%20hacer%20un%20pedido%20de%20agua%20para%20mi%20negocio%20al%200422-8013796."
              target="_blank" rel="noopener noreferrer" class="btn-primary" style="padding: 0.65rem 1.4rem; font-size: 0.88rem;">
              <i class="fa-brands fa-whatsapp"></i> Pedir al 0422-8013796
            </a>
          </div>
        </div>
      </div>

      <!-- Tarjeta Campaña 2: Regreso a Clases Oficial -->
      <div class="campaign-card campaign-card-wide">
        <div class="campaign-img-box campaign-img-box-school">
          <img src="assets/images/regreso-a-clases-panoramica.jpg?v=<?php echo time(); ?>" alt="Campaña Oficial Regreso a Clases con Doctor Agua - La Hidratación También Va a Clases" class="campaign-img campaign-img-school">
          <span class="campaign-tag-badge" style="background: var(--accent-mint);"><i class="fa-solid fa-graduation-cap"></i> Hidratación Escolar</span>
        </div>
        <div class="campaign-body">
          <div>
            <h3 class="campaign-title">Regreso a Clases con Doctor Agua</h3>
            <p class="campaign-sub">
              La hidratación también va a clases. Cuida la concentración, memoria y salud de los más pequeños con agua pura, libre de gérmenes y equilibrada con minerales esenciales.
            </p>
          </div>
          <div class="campaign-cta-row">
            <span class="campaign-phone-chip" style="font-size: 0.9rem; color: var(--accent-teal);">
              <i class="fa-solid fa-heart-pulse"></i> 100% Salud Infantil
            </span>
            <a href="campanas.php" class="btn-secondary" style="padding: 0.65rem 1.4rem; font-size: 0.88rem;">
              <i class="fa-solid fa-bottle-water"></i> Ver Promociones
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =================================================================== 
     PRODUCTOS Y LLENADO - CARRUSEL
     =================================================================== -->
<style>
  /* Reset carrusel */
  .dra-carousel* {
    box-sizing: border-box;
  }

  .dra-products-section {
    padding: 5rem 0;
    background: #f8fafc;
  }

  .dra-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  .dra-section-header {
    text-align: center;
    margin-bottom: 2.5rem;
  }

  .dra-section-tag {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    background: #e0f2fe;
    color: #0284c7;
    font-size: .82rem;
    font-weight: 700;
    padding: .4rem 1.1rem;
    border-radius: 99px;
    margin-bottom: .75rem;
  }

  .dra-section-title {
    font-size: 2rem;
    font-weight: 900;
    color: #002b5b;
    margin: .5rem 0;
  }

  .dra-section-sub {
    font-size: .95rem;
    color: #64748b;
    max-width: 560px;
    margin: 0 auto;
  }

  /* Carrusel */
  .dra-carousel {
    position: relative;
    user-select: none;
    padding-bottom: 2.5rem;
  }

  .dra-track-wrap {
    overflow: hidden;
    border-radius: 1.25rem;
    box-shadow: 0 20px 50px rgba(2, 43, 91, .14);
  }

  .dra-track {
    display: flex;
    transition: transform .5s cubic-bezier(.4, 0, .2, 1);
  }

  .dra-slide {
    flex: 0 0 100%;
    width: 100%;
  }

  .dra-inner {
    display: flex;
    height: 490px;
    background: #fff;
  }

  /* Imagen */
  .dra-img-col {
    flex: 0 0 50%;
    position: relative;
    overflow: hidden;
  }

  .dra-img-abs {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .dra-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .6s ease;
  }

  .dra-inner:hover .dra-img {
    transform: scale(1.04);
  }

  .dra-badge {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: linear-gradient(135deg, #0284c7, #002b5b);
    color: #fff;
    font-size: .74rem;
    font-weight: 800;
    padding: .35rem .95rem;
    border-radius: 99px;
    z-index: 2;
    box-shadow: 0 3px 10px rgba(0, 0, 0, .2);
  }

  /* Info */
  .dra-info {
    flex: 0 0 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 2.5rem 2.8rem;
    gap: .35rem;
    border-left: 1px solid #f1f5f9;
    overflow-y: auto;
  }

  .dra-tag {
    display: inline-flex;
    align-items: center;
    gap: .4rem;
    font-size: .77rem;
    font-weight: 700;
    padding: .28rem .85rem;
    border-radius: 99px;
    width: fit-content;
    background: rgba(2, 132, 199, .1);
    color: #0284c7;
    margin-bottom: .3rem;
  }

  .dra-title {
    font-size: 1.6rem;
    font-weight: 900;
    color: #002b5b;
    line-height: 1.2;
    margin: .1rem 0 .4rem;
  }

  .dra-desc {
    font-size: .88rem;
    color: #64748b;
    line-height: 1.65;
    margin: 0 0 .8rem;
  }

  .dra-feats {
    list-style: none;
    padding: 0;
    margin: 0 0 1.2rem;
    display: flex;
    flex-direction: column;
    gap: .38rem;
  }

  .dra-feats li {
    font-size: .84rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: .48rem;
  }

  .dra-feats li i {
    color: #10b981;
    font-size: .85rem;
    flex-shrink: 0;
  }

  .dra-foot {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 1rem;
    border-top: 1px solid #f1f5f9;
    gap: .8rem;
    flex-wrap: wrap;
  }

  .dra-price {
    font-size: 1.85rem;
    font-weight: 900;
    color: #0369a1;
    line-height: 1;
  }

  .dra-price-note {
    font-size: .73rem;
    color: #94a3b8;
    margin-top: .12rem;
  }

  .dra-btn {
    display: inline-flex;
    align-items: center;
    gap: .45rem;
    background: linear-gradient(135deg, #0284c7, #002b5b);
    color: #fff !important;
    font-weight: 800;
    font-size: .86rem;
    padding: .65rem 1.4rem;
    border-radius: 99px;
    text-decoration: none !important;
    box-shadow: 0 5px 18px rgba(2, 132, 199, .35);
    transition: transform .2s, box-shadow .2s;
    white-space: nowrap;
  }

  .dra-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(2, 132, 199, .45);
  }

  /* Flechas */
  .dra-arrow {
    position: absolute;
    top: calc(50% - 2rem);
    width: 2.8rem;
    height: 2.8rem;
    border-radius: 50%;
    border: 2px solid #e2e8f0;
    background: #fff;
    color: #002b5b;
    font-size: .95rem;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 14px rgba(0, 0, 0, .12);
    transition: all .2s;
    z-index: 20;
  }

  .dra-arrow:hover {
    background: #0284c7;
    border-color: #0284c7;
    color: #fff;
  }

  .dra-prev {
    left: -1.1rem;
  }

  .dra-next {
    right: -1.1rem;
  }

  /* Dots */
  .dra-dots {
    display: flex;
    justify-content: center;
    gap: .55rem;
    margin-top: 1.2rem;
  }

  .dra-dot {
    width: .6rem;
    height: .6rem;
    border-radius: 50%;
    border: none;
    background: #cbd5e1;
    cursor: pointer;
    padding: 0;
    transition: all .3s;
  }

  .dra-dot.on {
    background: #0284c7;
    transform: scale(1.55);
    box-shadow: 0 0 0 3px rgba(2, 132, 199, .2);
  }

  .dra-counter {
    text-align: center;
    margin-top: .4rem;
    font-size: .76rem;
    font-weight: 700;
    color: #94a3b8;
    letter-spacing: .06em;
  }

  /* CTA abajo */
  .dra-cta {
    text-align: center;
    margin-top: 2.5rem;
  }

  /* Colores variantes */
  .badge-green {
    background: linear-gradient(135deg, #10b981, #059669) !important;
  }

  .badge-amber {
    background: linear-gradient(135deg, #f59e0b, #d97706) !important;
  }

  .tag-green {
    background: rgba(16, 185, 129, .12) !important;
    color: #059669 !important;
  }

  .tag-amber {
    background: rgba(245, 158, 11, .12) !important;
    color: #d97706 !important;
  }

  .btn-green {
    background: linear-gradient(135deg, #10b981, #059669) !important;
    box-shadow: 0 5px 18px rgba(16, 185, 129, .35) !important;
  }

  .btn-amber {
    background: linear-gradient(135deg, #f59e0b, #d97706) !important;
    box-shadow: 0 5px 18px rgba(245, 158, 11, .35) !important;
  }

  @media(max-width:768px) {
    .dra-inner {
      flex-direction: column;
      height: auto;
    }

    .dra-img-col {
      flex: none;
      height: 220px;
      position: relative;
    }

    .dra-info {
      flex: none;
      padding: 1.4rem 1.2rem;
      border-left: none;
      border-top: 1px solid #f1f5f9;
    }

    .dra-title {
      font-size: 1.25rem;
    }

    .dra-price {
      font-size: 1.5rem;
    }

    .dra-prev {
      left: .3rem;
    }

    .dra-next {
      right: .3rem;
    }
  }

  @media(max-width:480px) {
    .dra-foot {
      flex-direction: column;
      align-items: flex-start;
    }

    .dra-btn {
      width: 100%;
      justify-content: center;
    }
  }
</style>

<section class="dra-products-section">
  <div class="dra-container">

    <div class="dra-section-header">
      <span class="dra-section-tag"><i class="fa-solid fa-cubes-stacked"></i> Cat&aacute;logo Destacado</span>
      <h2 class="dra-section-title">Nuestras Soluciones de Agua Purificada</h2>
      <p class="dra-section-sub">Llenado express de botellones, venta de envases libres de BPA y planes corporativos.</p>
    </div>

    <div class="dra-carousel" id="draCarousel">
      <div class="dra-track-wrap">
        <div class="dra-track" id="draTrack">

          <!-- Slide 1 -->
          <div class="dra-slide">
            <div class="dra-inner">
              <div class="dra-img-col">
                <div class="dra-img-abs">
                  <img src="assets/images/botellon20litros.jpg" alt="Recarga Botell&oacute;n 20L" class="dra-img">
                  <span class="dra-badge">&#11088; M&aacute;s Solicitado</span>
                </div>
              </div>
              <div class="dra-info">
                <span class="dra-tag"><i class="fa-solid fa-droplet"></i> Botellones</span>
                <h3 class="dra-title">Recarga de Botell&oacute;n 20L</h3>
                <p class="dra-desc">Llenado con agua ultra purificada en 8 etapas. Lavado interno ozonizado y sellado herm&eacute;tico garantizado.</p>
                <ul class="dra-feats">
                  <li><i class="fa-solid fa-circle-check"></i> Lavado interior y exterior ozonizado</li>
                  <li><i class="fa-solid fa-circle-check"></i> Tapa sellada con banda de seguridad</li>
                  <li><i class="fa-solid fa-circle-check"></i> Garant&iacute;a de sabor neutro y frescura</li>
                  <li><i class="fa-solid fa-circle-check"></i> Llenado en menos de 2 minutos</li>
                </ul>
                <div class="dra-foot">
                  <div>
                    <div class="dra-price">$1.50</div>
                    <div class="dra-price-note">o al cambio oficial del d&iacute;a</div>
                  </div>
                  <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Deseo%20una%20Recarga%20de%20Botell%C3%B3n%2020L." target="_blank" rel="noopener noreferrer" class="dra-btn">
                    <i class="fa-brands fa-whatsapp"></i> Pedir ahora
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="dra-slide">
            <div class="dra-inner">
              <div class="dra-img-col">
                <div class="dra-img-abs">
                  <img src="assets/images/loquetunegocionecesita.jpg" alt="Plan Corporativo" class="dra-img">
                  <span class="dra-badge badge-green">&#128188; Ahorro &amp; Convenio</span>
                </div>
              </div>
              <div class="dra-info">
                <span class="dra-tag tag-green"><i class="fa-solid fa-building"></i> Empresas</span>
                <h3 class="dra-title">Plan Corporativo / Empresas</h3>
                <p class="dra-desc">Suministro continuo para oficinas, consultorios, gimnasios y comercios con despacho prioritario.</p>
                <ul class="dra-feats">
                  <li><i class="fa-solid fa-circle-check"></i> Descuentos por volumen semanal/mensual</li>
                  <li><i class="fa-solid fa-circle-check"></i> Rutas de entrega fijas semanales</li>
                  <li><i class="fa-solid fa-circle-check"></i> Factura legal conforme a la normativa</li>
                  <li><i class="fa-solid fa-circle-check"></i> Mantenimiento gratuito de dispensadores</li>
                </ul>
                <div class="dra-foot">
                  <div>
                    <div class="dra-price">Cotizar</div>
                    <div class="dra-price-note">Facturaci&oacute;n fiscal y entregas</div>
                  </div>
                  <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Plan%20Corporativo." target="_blank" rel="noopener noreferrer" class="dra-btn btn-green">
                    <i class="fa-brands fa-whatsapp"></i> Pedir ahora
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="dra-slide">
            <div class="dra-inner">
              <div class="dra-img-col">
                <div class="dra-img-abs">
                  <img src="assets/images/pidetubotellon.jpg" alt="Botell&oacute;n Nuevo 20L" class="dra-img">
                  <span class="dra-badge badge-amber">&#127873; Kit Completo</span>
                </div>
              </div>
              <div class="dra-info">
                <span class="dra-tag tag-amber"><i class="fa-solid fa-box-open"></i> Kit Inicial</span>
                <h3 class="dra-title">Botell&oacute;n Nuevo 20L + Llenado</h3>
                <p class="dra-desc">Envase resistente y transparente libre de BPA, con asa ergon&oacute;mica y primer llenado incluido.</p>
                <ul class="dra-feats">
                  <li><i class="fa-solid fa-circle-check"></i> Pl&aacute;stico virgen 100% BPA Free</li>
                  <li><i class="fa-solid fa-circle-check"></i> Asa ergon&oacute;mica reforzada</li>
                  <li><i class="fa-solid fa-circle-check"></i> Incluye 20L de agua purificada</li>
                  <li><i class="fa-solid fa-circle-check"></i> Tapa sellada antiderrame</li>
                </ul>
                <div class="dra-foot">
                  <div>
                    <div class="dra-price">$12.00</div>
                    <div class="dra-price-note">Envase PET virgen</div>
                  </div>
                  <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Botell%C3%B3n%20Nuevo%2020L." target="_blank" rel="noopener noreferrer" class="dra-btn btn-amber">
                    <i class="fa-brands fa-whatsapp"></i> Pedir ahora
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /dra-track -->
      </div><!-- /dra-track-wrap -->

      <button class="dra-arrow dra-prev" id="draPrev" aria-label="Anterior"><i class="fa-solid fa-chevron-left"></i></button>
      <button class="dra-arrow dra-next" id="draNext" aria-label="Siguiente"><i class="fa-solid fa-chevron-right"></i></button>

      <div class="dra-dots">
        <button class="dra-dot on" data-i="0"></button>
        <button class="dra-dot" data-i="1"></button>
        <button class="dra-dot" data-i="2"></button>
      </div>
      <div class="dra-counter"><span id="draCur">1</span> / 3</div>
    </div><!-- /dra-carousel -->

    <div class="dra-cta">
      <a href="servicios.php" class="btn-primary">
        <i class="fa-solid fa-boxes-stacked"></i> Ver Todos los Productos y Dispensadores &rarr;
      </a>
    </div>

  </div>
</section>

<script>
  (function() {
    var t = document.getElementById('draTrack');
    var p = document.getElementById('draPrev');
    var n = document.getElementById('draNext');
    var dots = document.querySelectorAll('.dra-dot');
    var cur = document.getElementById('draCur');
    if (!t || !p || !n) return;
    var idx = 0,
      total = 3,
      timer;

    function go(x) {
      idx = ((x % total) + total) % total;
      t.style.transform = 'translateX(-' + idx * 100 + '%)';
      dots.forEach(function(d, i) {
        d.classList.toggle('on', i === idx);
      });
      if (cur) cur.textContent = idx + 1;
    }

    function run() {
      clearInterval(timer);
      timer = setInterval(function() {
        go(idx + 1);
      }, 5500);
    }
    p.addEventListener('click', function() {
      go(idx - 1);
      run();
    });
    n.addEventListener('click', function() {
      go(idx + 1);
      run();
    });
    dots.forEach(function(d) {
      d.addEventListener('click', function() {
        go(+d.getAttribute('data-i'));
        run();
      });
    });
    var sx = 0;
    t.addEventListener('touchstart', function(e) {
      sx = e.touches[0].clientX;
    }, {
      passive: true
    });
    t.addEventListener('touchend', function(e) {
      var dx = e.changedTouches[0].clientX - sx;
      if (Math.abs(dx) > 40) {
        go(dx < 0 ? idx + 1 : idx - 1);
        run();
      }
    }, {
      passive: true
    });
    run();
  }());
</script>

<!-- ===================================================================
       BANNER DE CALIDAD & PROCESO EN 8 ETAPAS
       =================================================================== -->
<section class="purification-section" style="padding: 4.5rem 0;">
  <div class="container">
    <div class="quality-guarantee-banner" style="margin-top: 0;">
      <div class="quality-banner-content">
        <span class="section-tag" style="background: rgba(255,255,255,0.2); color: #fff; margin-bottom: 0.75rem;">
          <i class="fa-solid fa-microscope"></i> Tecnologí­­a Biomédica
        </span>
        <h3 style="font-size: 1.85rem; margin-top: 0.5rem;">Purificación Cientí­­fica en 8 Fases</h3>
        <p style="margin-bottom: 1.5rem;">
          Desde la microfiltración de sedimentos hasta la ósmosis inversa molecular, desinfección UV-C y ozonización activa. Conoce con rigor técnico por qué Doctor Agua es la opción más segura para tu salud.
        </p>
        <a href="purificacion.php" class="btn-primary" style="background: #ffffff; color: var(--primary-deep); font-weight: 800;">
          <i class="fa-solid fa-arrow-right"></i> Ver las 8 Fases Explicadas
        </a>
      </div>
      <div style="text-align: center;">
        <img src="assets/images/favicon.svg" alt="Doctor Agua Gota" class="quality-icon-glow" style="width: 140px; height: 140px; filter: drop-shadow(0 8px 16px rgba(0,0,0,0.25)); margin: 0 auto;">
      </div>
    </div>
  </div>
</section>

<!-- ===================================================================
       TESTIMONIOS
       =================================================================== -->
<section class="testimonials-section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-star"></i> Testimonios Reales</span>
      <h2 class="section-title">Lo que Dicen Nuestras Familias y Clientes</h2>
      <p class="section-subtitle">La confianza médica y la satisfacción de quienes eligen Doctor Agua cada dí­­a en sus hogares y oficinas.</p>
    </div>

    <div class="testimonials-grid">
      <?php foreach ($testimonials as $t): ?>
        <div class="testimonial-card">
          <div>
            <div class="testimonial-stars">
              <?php for ($i = 0; $i < $t['stars']; $i++): ?>
                <i class="fa-solid fa-star"></i>
              <?php endfor; ?>
            </div>
            <p class="testimonial-quote">"<?php echo htmlspecialchars($t['comment']); ?>"</p>
          </div>

          <div class="testimonial-author">
            <img src="<?php echo htmlspecialchars($t['avatar']); ?>" alt="<?php echo htmlspecialchars($t['name']); ?>" class="author-avatar">
            <div class="author-info">
              <h5><?php echo htmlspecialchars($t['name']); ?></h5>
              <span><?php echo htmlspecialchars($t['role']); ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===================================================================
       LLAMADA FINAL A LA ACCIí“N (CALL TO ACTION)
       =================================================================== -->
<section style="padding: 4rem 0; background: var(--grad-cta); color: #fff; text-align: center;">
  <div class="container">
    <h2 style="font-size: 2.2rem; font-weight: 900; margin-bottom: 1rem;">í‚¿Listo para Probar Agua 100% Pura y Saludable?</h2>
    <p style="font-size: 1.1rem; max-width: 600px; margin: 0 auto 2rem auto; color: rgba(255,255,255,0.9);">
      Pide tu recarga express o solicita despacho directo a tu negocio u hogar al 0422-8013796.
    </p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
      <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Deseo%20hacer%20un%20pedido%20de%20agua%20purificada." target="_blank" class="btn-primary" style="background: #25D366; color: #fff;">
        <i class="fa-brands fa-whatsapp"></i> Escrí­­benos al WhatsApp
      </a>
      <a href="contacto.php" class="btn-secondary">
        <i class="fa-solid fa-location-dot"></i> Ver Ubicación y Horarios
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>