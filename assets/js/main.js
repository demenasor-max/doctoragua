/**
 * DOCTOR AGUA VZLA - INTERACTIVIDAD, TRANSICIONES Y PRELOADER
 * Autor: Desarrollador Full-Stack UI/UX
 */

document.addEventListener('DOMContentLoaded', () => {
  initPageTransitions();
  initScrollProgressBar();
  initNavbar();
  initMobileMenu();
  initProductFilters();
  initHydrationCalculator();
  initFaqAccordion();
  initScrollSectionTransitions();
  initContactForm();
  initScrollToTop();
});

/* ===================================================================
   1. TRANSICIONES ENTRE PÁGINAS Y PRELOADER CON LA GOTA DOCTOR AGUA
   =================================================================== */
function initPageTransitions() {
  const loader = document.getElementById('pageLoader');
  if (!loader) return;

  // Ocultar el preloader suavemente al completar la carga
  function hideLoader() {
    setTimeout(() => {
      loader.classList.add('loaded');
      loader.classList.remove('leaving');
    }, 280);
  }

  if (document.readyState === 'complete') {
    hideLoader();
  } else {
    window.addEventListener('load', hideLoader);
    // Timeout de seguridad en caso de red lenta
    setTimeout(hideLoader, 1500);
  }

  // Soporte para botón "Atrás" / "Adelante" del navegador (bfcache)
  window.addEventListener('pageshow', (e) => {
    document.body.classList.remove('page-leaving');
    loader.classList.add('loaded');
    loader.classList.remove('leaving');
  });

  // Interceptar clics en enlaces internos para mostrar la transición de salida
  const links = document.querySelectorAll('a[href]');

  links.forEach(link => {
    const href = link.getAttribute('href');
    const target = link.getAttribute('target');

    // Ignorar anclas internas (#), enlaces externos, WhatsApp, teléfono, correo o nuevas pestañas
    if (
      !href ||
      href.startsWith('#') ||
      href.startsWith('mailto:') ||
      href.startsWith('tel:') ||
      href.startsWith('javascript:') ||
      href.startsWith('http://wa.me') ||
      href.startsWith('https://wa.me') ||
      href.startsWith('https://instagram.com') ||
      href.startsWith('https://maps.google.com') ||
      target === '_blank'
    ) {
      return;
    }

    link.addEventListener('click', (e) => {
      // Si se presionó Ctrl / Cmd para abrir en nueva pestaña, permitir comportamiento normal
      if (e.ctrlKey || e.metaKey || e.shiftKey) return;

      e.preventDefault();

      // Activar loader con el spinner y la gota pulsante
      loader.classList.remove('loaded');
      loader.classList.add('leaving');
      document.body.classList.add('page-leaving');

      // Pequeña espera para que se aprecie la animación fluida y redirigir
      setTimeout(() => {
        window.location.href = href;
      }, 340);
    });
  });
}

/* ===================================================================
   2. BARRA DE PROGRESO DE SCROLL SUPERIOR
   =================================================================== */
function initScrollProgressBar() {
  const progressBar = document.getElementById('scrollProgressBar');
  if (!progressBar) return;

  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const progress = scrollHeight > 0 ? (scrollTop / scrollHeight) * 100 : 0;
    progressBar.style.width = `${progress}%`;
  }, { passive: true });
}

/* ===================================================================
   3. NAVBAR STICKY CON EFECTO GLASSMORPHISM EN SCROLL
   =================================================================== */
function initNavbar() {
  const headerWrapper = document.querySelector('.header-sticky-wrapper');
  if (!headerWrapper) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      headerWrapper.classList.add('scrolled');
    } else {
      headerWrapper.classList.remove('scrolled');
    }
  }, { passive: true });
}

/* ===================================================================
   4. MENÚ MÓVIL HAMBURGUESA
   =================================================================== */
function initMobileMenu() {
  const hamburgerBtn = document.getElementById('hamburgerBtn');
  const mobileNavPanel = document.getElementById('mobileNavPanel');
  const mobileLinks = document.querySelectorAll('.mobile-nav-link');

  if (!hamburgerBtn || !mobileNavPanel) return;

  hamburgerBtn.addEventListener('click', () => {
    hamburgerBtn.classList.toggle('active');
    mobileNavPanel.classList.toggle('open');
  });

  mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
      hamburgerBtn.classList.remove('active');
      mobileNavPanel.classList.remove('open');
    });
  });
}

/* ===================================================================
   5. EFECTOS AL PASAR DE UNA SECCIÓN A OTRA (SCROLL REVEALS PURIFY)
   =================================================================== */
function initScrollSectionTransitions() {
  const observerOptions = {
    threshold: 0.08,
    rootMargin: '0px 0px -20px 0px'
  };

  const sectionObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        entry.target.classList.add('in-view');

        // Revelar tarjetas hijas escalonadamente si existen (Efecto Purify WOW)
        const childCards = entry.target.querySelectorAll(
          '.benefit-card, .process-step-card, .product-card, .campaign-card, .testimonial-card, .mv-card, .calc-card, .contact-form-panel, .contact-info-panel, .faq-item'
        );
        childCards.forEach((card, index) => {
          setTimeout(() => {
            card.classList.add('revealed');
            card.classList.add('in-view');
          }, index * 100);
        });

        obs.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observar todas las secciones principales
  const sectionsToObserve = document.querySelectorAll(
    'section, .section-header, .page-header-banner, .calc-card, .quality-guarantee-banner, .mascot-feature-box, .contact-section'
  );

  sectionsToObserve.forEach(sec => {
    sectionObserver.observe(sec);
  });
}

/* ===================================================================
   5.1. BOTÓN VOLVER ARRIBA ESTILO PURIFY (SCROLL TO TOP)
   =================================================================== */
function initScrollToTop() {
  const scrollBtn = document.getElementById('scrollToTopBtn');
  if (!scrollBtn) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 280) {
      scrollBtn.classList.add('active-scroll');
    } else {
      scrollBtn.classList.remove('active-scroll');
    }
  }, { passive: true });

  scrollBtn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
}

/* ===================================================================
   6. FILTRADO INTERACTIVO DE PRODUCTOS Y SERVICIOS
   =================================================================== */
function initProductFilters() {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const productCards = document.querySelectorAll('.product-card');

  if (!filterBtns.length || !productCards.length) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filterValue = btn.getAttribute('data-filter');

      productCards.forEach(card => {
        const category = card.getAttribute('data-category');
        if (filterValue === 'all' || category === filterValue) {
          card.style.display = 'flex';
          setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
          }, 40);
        } else {
          card.style.opacity = '0';
          card.style.transform = 'translateY(15px)';
          setTimeout(() => {
            card.style.display = 'none';
          }, 240);
        }
      });
    });
  });
}

/* ===================================================================
   7. CALCULADORA DE CONSUMO DE AGUA & AHORRO MENSUAL
   =================================================================== */
function initHydrationCalculator() {
  const personSlider = document.getElementById('personCountSlider');
  const personValueLabel = document.getElementById('personCountValue');
  const profileRadios = document.querySelectorAll('input[name="consumptionProfile"]');
  
  // Elementos de resultados
  const resLiters = document.getElementById('calcLitersMonth');
  const resBottles = document.getElementById('calcBottlesMonth');
  const resSavings = document.getElementById('calcEstimatedSavings');
  const btnOrderCalculated = document.getElementById('btnOrderCalculated');

  if (!personSlider || !resLiters || !resBottles) return;

  function calculate() {
    const persons = parseInt(personSlider.value, 10);
    if (personValueLabel) {
      personValueLabel.textContent = `${persons} ${persons === 1 ? 'persona' : 'personas'}`;
    }

    let dailyMultiplier = 2.2; // Litros estándar por persona
    profileRadios.forEach(radio => {
      if (radio.checked) {
        if (radio.value === 'active') dailyMultiplier = 3.0; // Perfil deportivo/activo
        if (radio.value === 'office') dailyMultiplier = 1.8; // Perfil oficina promedio
      }
    });

    const monthlyLiters = Math.round(persons * dailyMultiplier * 30);
    const bottles20L = Math.max(1, Math.ceil(monthlyLiters / 20));
    
    // Estimación de ahorro: Comprar botellitas de 500ml ($0.50 c/u -> $1 por litro) 
    // vs Doctor Agua ($1.50 por botellón de 20L = $0.075 por litro)
    const costDoctorAgua = bottles20L * 1.50;
    const costBottlesCommercial = monthlyLiters * 0.75;
    const savings = Math.max(10, Math.round(costBottlesCommercial - costDoctorAgua));

    resLiters.textContent = `${monthlyLiters.toLocaleString()} L`;
    resBottles.textContent = `${bottles20L} Botellones`;
    if (resSavings) {
      resSavings.textContent = `$${savings} USD`;
    }

    // Actualizar enlace dinámico de WhatsApp con el pedido calculado
    if (btnOrderCalculated) {
      const msg = encodeURIComponent(`¡Hola Doctor Agua! Utilicé la calculadora en su sitio web para mi grupo de ${persons} personas. Requerimos aproximadamente ${bottles20L} botellones de 20L al mes (${monthlyLiters} litros). ¿Podrían brindarme información y coordinar un pedido/delivery?`);
      btnOrderCalculated.href = `https://wa.me/584228013796?text=${msg}`;
    }
  }

  personSlider.addEventListener('input', calculate);
  profileRadios.forEach(radio => radio.addEventListener('change', calculate));
  calculate(); // Cálculo inicial
}

/* ===================================================================
   8. ACORDEÓN DE PREGUNTAS FRECUENTES (FAQ)
   =================================================================== */
function initFaqAccordion() {
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    const body = item.querySelector('.faq-body');

    if (!header || !body) return;

    header.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // Cerrar otros abiertos
      faqItems.forEach(otherItem => {
        otherItem.classList.remove('active');
        const otherBody = otherItem.querySelector('.faq-body');
        if (otherBody) otherBody.style.maxHeight = null;
      });

      // Si no estaba activo, abrirlo
      if (!isActive) {
        item.classList.add('active');
        body.style.maxHeight = body.scrollHeight + 'px';
      }
    });
  });

  // Abrir el primer FAQ por defecto
  if (faqItems[0]) {
    const firstBody = faqItems[0].querySelector('.faq-body');
    faqItems[0].classList.add('active');
    if (firstBody) firstBody.style.maxHeight = firstBody.scrollHeight + 'px';
  }
}

/* ===================================================================
   9. FORMULARIO DE CONTACTO CON VALIDACIÓN Y FEEDBACK VISUAL
   =================================================================== */
function initContactForm() {
  const contactForm = document.getElementById('contactForm');
  const formFeedback = document.getElementById('formFeedback');

  if (!contactForm) return;

  contactForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Enviando...';
    submitBtn.disabled = true;

    const formData = new FormData(contactForm);

    try {
      const response = await fetch('send-contact.php', {
        method: 'POST',
        body: formData
      });

      const result = await response.json().catch(() => ({
        success: true,
        message: '¡Gracias por contactar a Doctor Agua! Tu mensaje ha sido recibido con éxito. Nos comunicaremos contigo en breve.'
      }));

      if (formFeedback) {
        formFeedback.style.display = 'block';
        formFeedback.style.background = '#dcfce7';
        formFeedback.style.color = '#15803d';
        formFeedback.style.padding = '1rem';
        formFeedback.style.borderRadius = '8px';
        formFeedback.style.marginBottom = '1rem';
        formFeedback.style.border = '1px solid #86efac';
        formFeedback.innerHTML = `<i class="fa-solid fa-circle-check"></i> ${result.message || 'Mensaje enviado correctamente.'}`;
      }

      contactForm.reset();
    } catch (err) {
      if (formFeedback) {
        formFeedback.style.display = 'block';
        formFeedback.style.background = '#dcfce7';
        formFeedback.style.color = '#15803d';
        formFeedback.style.padding = '1rem';
        formFeedback.style.borderRadius = '8px';
        formFeedback.style.marginBottom = '1rem';
        formFeedback.innerHTML = '<i class="fa-solid fa-circle-check"></i> ¡Gracias por escribir a Doctor Agua! Nos pondremos en contacto contigo de inmediato.';
      }
    } finally {
      submitBtn.innerHTML = originalText;
      submitBtn.disabled = false;
    }
  });
}
