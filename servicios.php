<?php

/**
 * DOCTOR AGUA VZLA - PRODUCTOS Y SERVICIOS
 */
$currentPage = 'servicios';
$pageTitle   = 'Productos & Llenado de Botellones | Catálogo Oficial';
require_once __DIR__ . '/includes/header.php';
?>

<!-- CABECERA DE PÁGINA -->
<div class="page-header-banner-vaso-hielo">
  <div class="container">
    <nav class="page-breadcrumb">
      <a href="index.php">Inicio</a>
      <i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i>
      <span>Productos & Llenado</span>
    </nav>
    <h1 class="page-header-title">Productos, Recargas y Servicios</h1>
    <p class="page-header-subtitle">
      Calidad garantizada en cada formato. Desde el llenado express en planta hasta el suministro programado para empresas y despachos a domicilio.
    </p>
  </div>
</div>

<!-- CATÁLOGO INTERACTIVO CON FILTROS -->
<section class="page-content-section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-bottle-water"></i> Opciones para Todos</span>
      <h2 class="section-title">Elige la SoluciÃ³n Perfecta para Ti</h2>
      <p class="section-subtitle">Haz clic en las categorÃ­as para filtrar o solicita directo a nuestro WhatsApp de atenciÃ³n.</p>
    </div>

    <!-- Filtros de CategorÃ­as -->
    <!-- Filtros de Categorías que interactúan con el carrusel -->
    <div class="product-filters">
      <button class="filter-btn active" data-slide="0">Todos los Productos</button>
      <button class="filter-btn" data-slide="0">Botellones 20L</button>
      <button class="filter-btn" data-slide="1">Corporativo</button>
      <button class="filter-btn" data-slide="2">Kit Botellón Nuevo</button>
      <button class="filter-btn" data-slide="3">Hogar & Bidones (5L)</button>
      <button class="filter-btn" data-slide="4">Hielo Purificado</button>
    </div>

    <!-- Estilos del Carrusel Moderno con Efectos Avanzados -->
    <style>
      .srv-carousel-wrap {
        position: relative;
        max-width: 1140px;
        margin: 2rem auto 3.5rem auto;
        padding-bottom: 2.5rem;
        user-select: none;
      }

      .srv-track-container {
        position: relative;
        overflow: hidden;
        border-radius: 1.5rem;
        background: #ffffff;
        border: 1px solid rgba(2, 132, 199, 0.12);
        box-shadow: 0 25px 60px -12px rgba(2, 43, 91, 0.18), 0 8px 24px -4px rgba(2, 132, 199, 0.1);
        transition: box-shadow 0.4s ease, border-color 0.4s ease;
      }

      .srv-track-container:hover {
        border-color: rgba(2, 132, 199, 0.3);
        box-shadow: 0 30px 70px -10px rgba(2, 43, 91, 0.22), 0 12px 30px -4px rgba(2, 132, 199, 0.15);
      }

      /* Barra de progreso de tiempo de autoplay */
      .srv-progress-bar-wrap {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: rgba(226, 232, 240, 0.6);
        z-index: 15;
      }

      .srv-progress-line {
        height: 100%;
        width: 0%;
        background: linear-gradient(90deg, #0284c7, #38bdf8, #10b981);
        transition: width 0.1s linear;
      }

      .srv-track {
        display: flex;
        transition: transform 0.6s cubic-bezier(0.25, 1, 0.35, 1);
        width: 100%;
        will-change: transform;
      }

      .srv-slide {
        flex: 0 0 100%;
        width: 100%;
      }

      .srv-slide-inner {
        display: flex;
        flex-direction: row;
        min-height: 700px;
        background: #ffffff;
        position: relative;
      }

      /* Columna Imagen con Efecto de Destello y Luz */
      .srv-img-col {
        flex: 0 0 50%;
        position: relative;
        overflow: hidden;
        background: radial-gradient(circle at 50% 50%, #f0f9ff 0%, #e0f2fe 100%);
      }

      .srv-img-wrap {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .srv-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1), filter 0.6s ease;
      }

      .srv-slide-inner:hover .srv-img {
        transform: scale(1.05);
        filter: brightness(1.02);
      }

      /* Efecto Destello Shimmer sobre la imagen */
      .srv-img-col::after {
        content: "";
        position: absolute;
        top: -60%;
        left: -80%;
        width: 60%;
        height: 220%;
        background: linear-gradient(115deg,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.45) 50%,
            rgba(255, 255, 255, 0) 100%);
        transform: rotate(25deg);
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 5;
      }

      .srv-slide-inner:hover .srv-img-col::after {
        opacity: 1;
        animation: srvShine 1s cubic-bezier(0.16, 1, 0.3, 1);
      }

      @keyframes srvShine {
        0% {
          left: -80%;
        }

        100% {
          left: 160%;
        }
      }

      /* Badges Flotantes con Sombras Suaves */
      .srv-badge {
        position: absolute;
        top: 1.25rem;
        left: 1.25rem;
        background: linear-gradient(135deg, #0284c7 0%, #002b5b 100%);
        color: #ffffff;
        font-size: 0.78rem;
        font-weight: 800;
        padding: 0.42rem 1.05rem;
        border-radius: 99px;
        z-index: 8;
        box-shadow: 0 6px 18px rgba(2, 43, 91, 0.35);
        letter-spacing: 0.02em;
        backdrop-filter: blur(4px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        animation: srvFloat 3s ease-in-out infinite alternate;
      }

      @keyframes srvFloat {
        0% {
          transform: translateY(0);
        }

        100% {
          transform: translateY(-4px);
        }
      }

      .srv-badge-green {
        background: linear-gradient(135deg, #10b981 0%, #047857 100%) !important;
        box-shadow: 0 6px 18px rgba(16, 185, 129, 0.35) !important;
      }

      .srv-badge-amber {
        background: linear-gradient(135deg, #f59e0b 0%, #b45309 100%) !important;
        box-shadow: 0 6px 18px rgba(245, 158, 11, 0.35) !important;
      }

      .srv-badge-purple {
        background: linear-gradient(135deg, #8b5cf6 0%, #5b21b6 100%) !important;
        box-shadow: 0 6px 18px rgba(139, 92, 246, 0.35) !important;
      }

      .srv-badge-cyan {
        background: linear-gradient(135deg, #06b6d4 0%, #0e7490 100%) !important;
        box-shadow: 0 6px 18px rgba(6, 182, 212, 0.35) !important;
      }

      /* Columna Información con Efectos de Tipografía y Layout */
      .srv-info-col {
        flex: 0 0 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 3rem;
        gap: 0.45rem;
        overflow-y: auto;
        border-left: 1px solid #f1f5f9;
        background: linear-gradient(180deg, #ffffff 0%, #fbfcfe 100%);
      }

      .srv-cat-tag {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        background: rgba(2, 132, 199, 0.08);
        color: #0284c7;
        font-size: 0.8rem;
        font-weight: 800;
        padding: 0.35rem 0.95rem;
        border-radius: 99px;
        width: fit-content;
        border: 1px solid rgba(2, 132, 199, 0.18);
        transition: all 0.3s ease;
      }

      .srv-slide-inner:hover .srv-cat-tag {
        background: rgba(2, 132, 199, 0.14);
        transform: scale(1.02);
      }

      .srv-title {
        font-size: 1.75rem;
        font-weight: 900;
        color: #002b5b;
        margin: 0.4rem 0 0.4rem;
        line-height: 1.22;
        letter-spacing: -0.015em;
      }

      .srv-desc {
        font-size: 0.93rem;
        color: #64748b;
        line-height: 1.65;
        margin: 0 0 1rem;
      }

      /* Lista de Características con Iconos Dinámicos */
      .srv-feats {
        list-style: none;
        padding: 0;
        margin: 0 0 1.4rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
      }

      .srv-feats li {
        font-size: 0.88rem;
        color: #475569;
        display: flex;
        align-items: center;
        gap: 0.6rem;
        font-weight: 500;
        transition: transform 0.2s ease, color 0.2s ease;
      }

      .srv-feats li:hover {
        transform: translateX(4px);
        color: #002b5b;
      }

      .srv-feats li i {
        color: #10b981;
        font-size: 0.95rem;
        flex-shrink: 0;
        filter: drop-shadow(0 2px 4px rgba(16, 185, 129, 0.3));
        transition: transform 0.25s ease;
      }

      .srv-feats li:hover i {
        transform: scale(1.25) rotate(5deg);
      }

      /* Footer de Precio y Botón CTA con Brillo y Pulsación */
      .srv-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 1.25rem;
        border-top: 1px solid #f1f5f9;
        gap: 1rem;
        flex-wrap: wrap;
      }

      .srv-price {
        font-size: 2.1rem;
        font-weight: 900;
        color: #0284c7;
        line-height: 1;
        letter-spacing: -0.02em;
      }

      .srv-price-note {
        font-size: 0.76rem;
        color: #94a3b8;
        margin-top: 0.2rem;
        font-weight: 600;
      }

      .srv-btn-order {
        display: inline-flex;
        align-items: center;
        gap: 0.55rem;
        background: linear-gradient(135deg, #0284c7 0%, #002b5b 100%);
        color: #ffffff !important;
        font-weight: 800;
        font-size: 0.92rem;
        padding: 0.75rem 1.65rem;
        border-radius: 99px;
        text-decoration: none !important;
        box-shadow: 0 6px 20px rgba(2, 132, 199, 0.35);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        white-space: nowrap;
        position: relative;
        overflow: hidden;
      }

      .srv-btn-order::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s ease;
      }

      .srv-btn-order:hover::before {
        left: 100%;
      }

      .srv-btn-order:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 10px 28px rgba(2, 132, 199, 0.5);
      }

      .srv-btn-green {
        background: linear-gradient(135deg, #10b981 0%, #047857 100%) !important;
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.35) !important;
      }

      .srv-btn-green:hover {
        box-shadow: 0 10px 28px rgba(16, 185, 129, 0.5) !important;
      }

      .srv-btn-amber {
        background: linear-gradient(135deg, #f59e0b 0%, #b45309 100%) !important;
        box-shadow: 0 6px 20px rgba(245, 158, 11, 0.35) !important;
      }

      .srv-btn-amber:hover {
        box-shadow: 0 10px 28px rgba(245, 158, 11, 0.5) !important;
      }

      .srv-btn-cyan {
        background: linear-gradient(135deg, #06b6d4 0%, #0e7490 100%) !important;
        box-shadow: 0 6px 20px rgba(6, 182, 212, 0.35) !important;
      }

      .srv-btn-cyan:hover {
        box-shadow: 0 10px 28px rgba(6, 182, 212, 0.5) !important;
      }

      /* Flechas de Navegación Flotantes con Blur y Micro-Rebote */
      .srv-arrow {
        position: absolute;
        top: calc(50% - 2.5rem);
        width: 3.4rem;
        height: 3.4rem;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.8);
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        color: #002b5b;
        font-size: 1.15rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 10px 25px rgba(2, 43, 91, 0.16);
        z-index: 12;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      }

      .srv-arrow:hover {
        background: #0284c7;
        color: #ffffff;
        border-color: #0284c7;
        transform: scale(1.12);
        box-shadow: 0 12px 30px rgba(2, 132, 199, 0.45);
      }

      .srv-arrow:active {
        transform: scale(0.95);
      }

      .srv-arrow-prev {
        left: -1.4rem;
      }

      .srv-arrow-next {
        right: -1.4rem;
      }

      /* Indicadores (Dots) con Estilo Píldora Inteligente */
      .srv-dots {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.65rem;
        margin-top: 1.5rem;
      }

      .srv-dot {
        height: 0.6rem;
        width: 0.6rem;
        border-radius: 99px;
        border: none;
        background: #cbd5e1;
        cursor: pointer;
        padding: 0;
        transition: width 0.4s cubic-bezier(0.25, 1, 0.35, 1), background-color 0.4s ease, box-shadow 0.4s ease;
      }

      .srv-dot.active {
        width: 2.2rem;
        background: linear-gradient(90deg, #0284c7, #002b5b);
        box-shadow: 0 4px 12px rgba(2, 132, 199, 0.35);
      }

      .srv-dot:hover:not(.active) {
        background: #94a3b8;
        transform: scale(1.2);
      }

      /* Contador con estilo minimalista */
      .srv-counter {
        text-align: center;
        margin-top: 0.6rem;
        font-size: 0.82rem;
        color: #94a3b8;
        font-weight: 800;
        letter-spacing: 0.08em;
      }

      .srv-counter span {
        color: #0284c7;
        font-weight: 900;
      }

      /* Filtros superiores con efecto de píldora viva */
      .product-filters .filter-btn {
        transition: all 0.25s ease;
      }

      .product-filters .filter-btn:hover {
        transform: translateY(-2px);
      }

      .product-filters .filter-btn.active {
        background: #0284c7;
        color: #fff;
        box-shadow: 0 6px 16px rgba(2, 132, 199, 0.35);
        transform: translateY(-1px);
      }

      @media (max-width: 768px) {
        .srv-slide-inner {
          flex-direction: column;
          min-height: auto;
        }

        .srv-img-col {
          flex: none;
          height: 300px;
        }

        .srv-info-col {
          flex: none;
          padding: 1.8rem 1.4rem;
          border-left: none;
          border-top: 1px solid #f1f5f9;
        }

        .srv-title {
          font-size: 1.35rem;
        }

        .srv-price {
          font-size: 1.7rem;
        }

        .srv-arrow-prev {
          left: 0.3rem;
        }

        .srv-arrow-next {
          right: 0.3rem;
        }

        .srv-arrow {
          width: 2.8rem;
          height: 2.8rem;
          font-size: 1rem;
        }
      }

      @media (max-width: 480px) {
        .srv-footer {
          flex-direction: column;
          align-items: flex-start;
        }

        .srv-btn-order {
          width: 100%;
          justify-content: center;
        }
      }
    </style>
    <div class="srv-carousel-wrap" id="srvCarousel">
      <div class="srv-track-container">
        <!-- Barra luminosa de progreso de autoplay -->
        <div class="srv-progress-bar-wrap">
          <div class="srv-progress-line" id="srvProgressBar"></div>
        </div>
        <div class="srv-track" id="srvTrack">

          <!-- Slide 0: Recarga 20L -->
          <div class="srv-slide">
            <div class="srv-slide-inner">
              <div class="srv-img-col">
                <div class="srv-img-wrap">
                  <img src="assets/images/botellon20litros.jpg" alt="Recarga Botellón 20L" class="srv-img">
                  <span class="srv-badge">⭐ Más Solicitado</span>
                </div>
              </div>
              <div class="srv-info-col">
                <span class="srv-cat-tag"><i class="fa-solid fa-droplet"></i> Botellones 20L</span>
                <h3 class="srv-title">Recarga de Botellón 20L</h3>
                <p class="srv-desc">Llenado con agua ultra purificada en 8 etapas. Incluye lavado interno ozonizado y sellado hermético.</p>
                <ul class="srv-feats">
                  <li><i class="fa-solid fa-circle-check"></i> Lavado interior y exterior ozonizado</li>
                  <li><i class="fa-solid fa-circle-check"></i> Tapa sellada con banda de seguridad</li>
                  <li><i class="fa-solid fa-circle-check"></i> Garantía de sabor neutro y frescura</li>
                  <li><i class="fa-solid fa-circle-check"></i> Tiempo de llenado: menos de 2 minutos</li>
                </ul>
                <div class="srv-footer">
                  <div>
                    <div class="srv-price">$1.50</div>
                    <div class="srv-price-note">o al cambio oficial del día</div>
                  </div>
                  <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Deseo%20solicitar%20una%20Recarga%20de%20Botell%C3%B3n%20de%2020L." target="_blank" rel="noopener noreferrer" class="srv-btn-order">
                    <i class="fa-brands fa-whatsapp"></i> Pedir ahora
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 1: Corporativo -->
          <div class="srv-slide">
            <div class="srv-slide-inner">
              <div class="srv-img-col">
                <div class="srv-img-wrap">
                  <img src="assets/images/loquetunegocionecesita.jpg" alt="Plan Corporativo" class="srv-img">
                  <span class="srv-badge srv-badge-green">💼 Ahorro & Convenio</span>
                </div>
              </div>
              <div class="srv-info-col">
                <span class="srv-cat-tag" style="background:rgba(16,185,129,.12);color:#059669;"><i class="fa-solid fa-building"></i> Corporativo / Empresas</span>
                <h3 class="srv-title">Plan Corporativo / Empresas</h3>
                <p class="srv-desc">Suministro continuo para oficinas, consultorios, gimnasios, obras y comercios con despacho prioritario.</p>
                <ul class="srv-feats">
                  <li><i class="fa-solid fa-circle-check"></i> Descuentos por volumen semanal/mensual</li>
                  <li><i class="fa-solid fa-circle-check"></i> Rutas de entrega fijas semanales</li>
                  <li><i class="fa-solid fa-circle-check"></i> Factura legal conforme a la normativa</li>
                  <li><i class="fa-solid fa-circle-check"></i> Mantenimiento gratuito de dispensadores</li>
                </ul>
                <div class="srv-footer">
                  <div>
                    <div class="srv-price">Cotizar</div>
                    <div class="srv-price-note">Facturación fiscal y entregas</div>
                  </div>
                  <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Deseo%20solicitar%20informaci%C3%B3n%20para%20un%20Plan%20Corporativo." target="_blank" rel="noopener noreferrer" class="srv-btn-order srv-btn-green">
                    <i class="fa-brands fa-whatsapp"></i> Cotizar plan
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2: Botellón Nuevo -->
          <div class="srv-slide">
            <div class="srv-slide-inner">
              <div class="srv-img-col">
                <div class="srv-img-wrap">
                  <img src="assets/images/pidetubotellon.jpg" alt="Botellón Nuevo 20L + Llenado" class="srv-img">
                  <span class="srv-badge srv-badge-amber">🎁 Kit Completo</span>
                </div>
              </div>
              <div class="srv-info-col">
                <span class="srv-cat-tag" style="background:rgba(245,158,11,.12);color:#d97706;"><i class="fa-solid fa-box-open"></i> Envases & Kits</span>
                <h3 class="srv-title">Botellón Nuevo 20L + Llenado</h3>
                <p class="srv-desc">Envase resistente y transparente de 20 litros, libre de bisfenol A, con asa ergonómica y primer llenado incluido.</p>
                <ul class="srv-feats">
                  <li><i class="fa-solid fa-circle-check"></i> Plástico virgen grado alimenticio 100% BPA Free</li>
                  <li><i class="fa-solid fa-circle-check"></i> Asa ergonómica reforzada</li>
                  <li><i class="fa-solid fa-circle-check"></i> Incluye 20L de agua purificada Doctor Agua</li>
                  <li><i class="fa-solid fa-circle-check"></i> Tapa antiderrame y precinto inviolable</li>
                </ul>
                <div class="srv-footer">
                  <div>
                    <div class="srv-price">$12.00</div>
                    <div class="srv-price-note">Envase PET virgen libre de BPA</div>
                  </div>
                  <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Deseo%20comprar%20un%20Botell%C3%B3n%20Nuevo%20de%2020L%20con%20llenado." target="_blank" rel="noopener noreferrer" class="srv-btn-order srv-btn-amber">
                    <i class="fa-brands fa-whatsapp"></i> Pedir kit
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3: Bidón 5L -->
          <div class="srv-slide">
            <div class="srv-slide-inner">
              <div class="srv-img-col">
                <div class="srv-img-wrap">
                  <img src="assets/images/botella5litros.jpg" alt="Galón / Bidón de 5L" class="srv-img">
                  <span class="srv-badge srv-badge-cyan">💧 Práctico & Ligero</span>
                </div>
              </div>
              <div class="srv-info-col">
                <span class="srv-cat-tag" style="background:rgba(6,182,212,.12);color:#0891b2;"><i class="fa-solid fa-house"></i> Hogar & Bidones</span>
                <h3 class="srv-title">Galón / Bidón de 5L</h3>
                <p class="srv-desc">La medida perfecta para espacios compactos, viajes familiares o consumo directo sin dispensador grande.</p>
                <ul class="srv-feats">
                  <li><i class="fa-solid fa-circle-check"></i> Fácil manipulación y almacenamiento</li>
                  <li><i class="fa-solid fa-circle-check"></i> Asa integrada de transporte</li>
                  <li><i class="fa-solid fa-circle-check"></i> Sellado con precinto de inviolabilidad</li>
                  <li><i class="fa-solid fa-circle-check"></i> Agua alcalina y ligera</li>
                </ul>
                <div class="srv-footer">
                  <div>
                    <div class="srv-price">$1.00</div>
                    <div class="srv-price-note">Ideal para neveras y oficinas</div>
                  </div>
                  <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Me%20interesa%20el%20Bid%C3%B3n%20de%205%20Litros." target="_blank" rel="noopener noreferrer" class="srv-btn-order srv-btn-cyan">
                    <i class="fa-brands fa-whatsapp"></i> Pedir bidón
                  </a>
                </div>
              </div>
            </div>
          </div>


          <!-- Slide 4: Hielo Purificado -->
          <div class="srv-slide">
            <div class="srv-slide-inner">
              <div class="srv-img-col">
                <div class="srv-img-wrap">
                  <img src="assets/images/hielo.jpg" alt="Bolsa de Hielo Purificado" class="srv-img">
                  <span class="srv-badge srv-badge-cyan">❄️ Cristalino</span>
                </div>
              </div>
              <div class="srv-info-col">
                <span class="srv-cat-tag" style="background:rgba(6,182,212,.12);color:#0891b2;"><i class="fa-solid fa-snowflake"></i> Hielo Purificado</span>
                <h3 class="srv-title">Bolsa de Hielo Purificado 3kg</h3>
                <p class="srv-desc">Cubos de hielo transparentes y sólidos, fabricados exclusivamente con agua tratada en nuestras 8 etapas.</p>
                <ul class="srv-feats">
                  <li><i class="fa-solid fa-circle-check"></i> 100% agua de ósmosis inversa</li>
                  <li><i class="fa-solid fa-circle-check"></i> No altera el sabor de tus bebidas</li>
                  <li><i class="fa-solid fa-circle-check"></i> Descongelamiento uniforme y duradero</li>
                  <li><i class="fa-solid fa-circle-check"></i> Bolsa sellada de alta resistencia</li>
                </ul>
                <div class="srv-footer">
                  <div>
                    <div class="srv-price">$1.80</div>
                    <div class="srv-price-note">Hielo gourmet cilíndrico</div>
                  </div>
                  <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Deseo%20pedir%20bolsas%20de%20Hielo%20Purificado." target="_blank" rel="noopener noreferrer" class="srv-btn-order srv-btn-cyan">
                    <i class="fa-brands fa-whatsapp"></i> Pedir hielo
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /srv-track -->
      </div><!-- /srv-track-container -->

      <!-- Controles -->
      <button class="srv-arrow srv-arrow-prev" id="srvPrev" aria-label="Anterior"><i class="fa-solid fa-chevron-left"></i></button>
      <button class="srv-arrow srv-arrow-next" id="srvNext" aria-label="Siguiente"><i class="fa-solid fa-chevron-right"></i></button>

      <!-- Dots -->
      <div class="srv-dots" id="srvDots">
        <button class="srv-dot active" data-slide="0"></button>
        <button class="srv-dot" data-slide="1"></button>
        <button class="srv-dot" data-slide="2"></button>
        <button class="srv-dot" data-slide="3"></button>
        <button class="srv-dot" data-slide="4"></button>
      </div>

      <!-- Contador -->
      <div class="srv-counter"><span id="srvCurrent">1</span> / 5</div>
    </div>

    <script>
      (function() {
        var track = document.getElementById('srvTrack');
        var prev = document.getElementById('srvPrev');
        var next = document.getElementById('srvNext');
        var dots = document.querySelectorAll('.srv-dot');
        var cur = document.getElementById('srvCurrent');
        var filterBtns = document.querySelectorAll('.product-filters .filter-btn');
        var progressBar = document.getElementById('srvProgressBar');
        var container = document.getElementById('srvCarousel');
        var total = 5;
        var idx = 0;
        var duration = 6500; // 6.5 segundos por slide
        var startTime = null;
        var animFrame = null;
        var isPaused = false;

        function updateProgress(timestamp) {
          if (!startTime) startTime = timestamp;
          if (!isPaused) {
            var elapsed = timestamp - startTime;
            var pct = Math.min((elapsed / duration) * 100, 100);
            if (progressBar) progressBar.style.width = pct + '%';

            if (elapsed >= duration) {
              goTo(idx + 1);
              return;
            }
          }
          animFrame = requestAnimationFrame(updateProgress);
        }

        function resetTimer() {
          if (animFrame) cancelAnimationFrame(animFrame);
          startTime = null;
          if (progressBar) progressBar.style.width = '0%';
          animFrame = requestAnimationFrame(updateProgress);
        }

        function goTo(n) {
          idx = ((n % total) + total) % total;
          track.style.transform = 'translateX(-' + (idx * 100) + '%)';
          dots.forEach(function(d, i) {
            d.classList.toggle('active', i === idx);
          });
          if (cur) cur.textContent = idx + 1;

          // Sincronizar botón de filtro activo superior
          filterBtns.forEach(function(b) {
            var target = parseInt(b.getAttribute('data-slide'));
            b.classList.toggle('active', target === idx);
          });

          resetTimer();
        }

        if (prev) prev.addEventListener('click', function() {
          goTo(idx - 1);
        });
        if (next) next.addEventListener('click', function() {
          goTo(idx + 1);
        });

        dots.forEach(function(d) {
          d.addEventListener('click', function() {
            goTo(parseInt(d.getAttribute('data-slide')));
          });
        });

        // Conectar botones de filtro
        filterBtns.forEach(function(b) {
          b.addEventListener('click', function() {
            var target = parseInt(b.getAttribute('data-slide'));
            goTo(target);
          });
        });

        // Pausar en hover para leer cómodamente
        if (container) {
          container.addEventListener('mouseenter', function() {
            isPaused = true;
          });
          container.addEventListener('mouseleave', function() {
            isPaused = false;
          });
        }

        // Swipe táctil en móviles
        var sx = 0;
        track.addEventListener('touchstart', function(e) {
          sx = e.touches[0].clientX;
        }, {
          passive: true
        });
        track.addEventListener('touchend', function(e) {
          var dx = e.changedTouches[0].clientX - sx;
          if (Math.abs(dx) > 40) {
            goTo(dx < 0 ? idx + 1 : idx - 1);
          }
        }, {
          passive: true
        });

        // Iniciar
        resetTimer();
      }());
    </script>
  </div>
</section>
<!-- CTA FINAL -->
<section style="padding: 3.5rem 0; background: var(--grad-cta); color: #fff; text-align: center;">
  <div class="container">
    <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 0.75rem;">¿Requieres un pedido al mayor o entrega express?</h2>
    <p style="font-size: 1.05rem; max-width: 600px; margin: 0 auto 1.75rem auto; color: rgba(255,255,255,0.9);">
      Contáctanos directamente al 0422-8013796 y coordinamos el despacho hoy mismo.
    </p>
    <a href="https://wa.me/584228013796?text=Hola%20Doctor%20Agua!%20Deseo%20hacer%20un%20pedido%20a%20domicilio." target="_blank" class="btn-primary" style="background: #25D366; color: #fff; font-weight: 800;">
      <i class="fa-brands fa-whatsapp"></i> Pedir por WhatsApp al 0422-8013796
    </a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>