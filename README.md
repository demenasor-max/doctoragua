# Doctor Agua (@doctoraguavzla) - Sitio Web Oficial en Laragon

Sitio web moderno, profesional, atractivo y 100% responsivo para la empresa de purificación, envasado y llenado de agua potable **"Doctor Agua"** (Instagram: `@doctoraguavzla`).

**Ubicación actual del proyecto**: `C:\laragon\www\doctoragua`  
**URL en Laragon**: `http://localhost/doctoragua/` o `http://doctoragua.test/`

---

## 🏗️ Arquitectura Multipágina

El sitio ha sido transformado de una landing page única a un **sistema web multipágina completo con componentes modulares PHP**:

```
C:\laragon\www\doctoragua\
├── includes/
│   ├── config.php            # Carga centralizada de data/site_data.json y helpers
│   ├── header.php            # Top bar, Navbar sticky con logo SVG, navegación activa y delivery
│   └── footer.php            # Footer corporativo, enlaces a cada página, créditos y botón flotante
├── index.php                 # HOMEPAGE: Hero con mascota oficial 3D, resumen de secciones y CTAs
├── nosotros.php              # PÁGINA: Historia, Misión, Visión, Valores y Mascota Oficial
├── purificacion.php          # PÁGINA: Las 8 Fases de Purificación, lavado ozonizado y tabla analítica
├── servicios.php             # PÁGINA: Catálogo completo de productos, recargas, envases y filtros
├── campanas.php              # PÁGINA: Delivery Express en motocarro y Campaña Escolar
├── calculadora.php           # PÁGINA: Calculadora de hidratación y ahorro familiar
├── contacto.php              # PÁGINA: Formulario, ubicación, teléfonos, FAQ y Google Maps
├── send-contact.php          # Backend PHP para procesar el formulario de contacto con respuesta JSON
├── data/
│   └── site_data.json        # Base de datos JSON para modificar textos, precios y teléfonos
└── assets/
    ├── css/styles.css        # Sistema de diseño, glassmorphism, responsive y animaciones
    ├── js/main.js            # Lógica de navbar, menú móvil, filtros y calculadora
    └── images/
        ├── doctor-agua-mascota-bienestar.png  # Mascota oficial 3D con botellón en la cascada
        ├── botellon-salud.png                 # Botellón 20L "Embotella tu salud"
        ├── delivery-negocio.png               # Mascota en motocarro de despacho a negocios
        ├── promo-escolar.png                  # Campaña "Regreso a clases con Doctor Agua"
        ├── botellones-negocio.png             # Dos botellones para empresas y oficinas
        ├── logo-doctor-agua.svg               # Logotipo oficial vectorizado
        └── favicon.svg                        # Favicon gota-doctor para el navegador
```

---

## 💧 Imágenes Oficiales Incorporadas

1. **`doctor-agua-mascota-bienestar.png`**: Mascota oficial en 3D de Doctor Agua (gota con bata médica y estetoscopio) sentada junto a un botellón de 20L en un manantial natural ("Cada gota una fuente de bienestar"). Protagonista del Hero y de la página "Nosotros".
2. **`botellon-salud.png`**: Botellón de 20L sobre podio con ondas cristalinas ("Embotella tu salud"). Destacado en el catálogo de productos.
3. **`delivery-negocio.png`**: Mascota en el motocarro de reparto ("Haz tu pedido y nosotros te lo llevamos hasta la puerta de tu negocio - ¡Llámanos! 0422-8013796"). Presente en la sección de delivery y en la página de campañas.
4. **`promo-escolar.png`**: Niño escolar bebiendo agua en el aula ("Regreso a clases con Doctor Agua - La hidratación también va a clases"). Destacado en la página de campañas e hidratación infantil.
5. **`botellones-negocio.png`**: Dos botellones transparentes con precinto ("El agua que tu negocio necesita"). Destacado en la sección de planes corporativos para empresas.

---

## 📞 Datos de Contacto Oficiales Configurados

- **Línea de Pedidos y Llamadas**: `0422-8013796` (`+58 422 801 3796`)
- **WhatsApp Express**: `+58 422 801 3796` con mensajes dinámicos pre-cargados
- **Instagram**: [`@doctoraguavzla`](https://instagram.com/doctoraguavzla)
- **Horarios**: Lunes a Sábado: 7:30 AM - 6:30 PM | Domingos: 8:00 AM - 2:00 PM

---

## 🚀 Cómo Visualizar en Laragon

1. Abre **Laragon** y asegúrate de que **Apache** esté iniciado (botón "Start All").
2. Abre tu navegador web favorito y entra a:
   - 👉 **`http://localhost/doctoragua/`** o **`http://doctoragua.test/`**
3. Puedes navegar fluidamente entre todas las páginas:
   - `http://localhost/doctoragua/index.php` (Inicio)
   - `http://localhost/doctoragua/nosotros.php` (Sobre Nosotros)
   - `http://localhost/doctoragua/purificacion.php` (Proceso)
   - `http://localhost/doctoragua/servicios.php` (Productos)
   - `http://localhost/doctoragua/campanas.php` (Campañas & Delivery)
   - `http://localhost/doctoragua/calculadora.php` (Calculadora)
   - `http://localhost/doctoragua/contacto.php` (Contacto)
