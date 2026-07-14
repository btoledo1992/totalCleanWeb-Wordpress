<?php
/**
 * Template Name: Contacto
 * Se aplica automáticamente si la página tiene el slug "contacto",
 * o podés asignarlo manualmente desde Atributos de página > Plantilla.
 * 
 * NOTA: el <form> de esta página es de ejemplo (usa un alert() de JS).
 * Para que envíe emails de verdad, reemplazalo por un shortcode de
 * Contact Form 7 o WPForms, manteniendo las clases CSS (.form-box, .form-row, etc).
 */
get_header();
?>


<section class="page-hero">
  <div class="wrap">
    <div class="breadcrumb"><a href="#">Inicio</a> · Contacto</div>
    <h1 class="page-title">Hablemos de tu limpieza</h1>
    <p class="page-sub">Respondemos el mismo día. Escribinos por WhatsApp, dejanos tu consulta en el formulario o visitanos en nuestra oficina.</p>
  </div>
</section>

<section style="padding-top:0;">
  <div class="wrap">
    <div class="contact-cards">
      <div class="cc">
        <div class="cc-icon">💬</div>
        <h4>WhatsApp</h4>
        <p>La forma más rápida de coordinar tu visita.</p>
        <a href="https://wa.me/5492901557421" target="_blank" rel="noopener" class="link">+54 9 2901 557-421 →</a>
      </div>
      <div class="cc">
        <div class="cc-icon">✉️</div>
        <h4>Email</h4>
        <p>Para presupuestos corporativos o consultas formales.</p>
        <a href="mailto:comercial@totalclean.com.ar" class="link">comercial@totalclean.com.ar →</a>
      </div>
      <div class="cc">
        <div class="cc-icon">📍</div>
        <h4>Oficina</h4>
        <p>Bahia Relegada 4055 Dpto7, Ushuaia, Tierra del Fuego.</p>
        <a href="#mapa" class="link">Ver en el mapa →</a>
      </div>
      <div class="cc">
        <div class="cc-icon">🕒</div>
        <h4>Horario de atención</h4>
        <p>Lunes a sábados, con servicios también en feriados a demanda.</p>
        <a href="#horarios" class="link">Ver horarios →</a>
      </div>
    </div>
  </div>
</section>

<section id="mapa">
  <div class="wrap">
    <div class="contact-grid">

      <div class="form-box">
        <h3>Contanos qué necesitás</h3>
        <p class="lead">Completá el formulario y te respondemos el mismo día con una propuesta.</p>
        <form onsubmit="event.preventDefault(); alert('Formulario de ejemplo — conectar a WordPress con Contact Form 7 o WPForms.');">
          <div class="form-row2">
            <div class="form-row">
              <label>Nombre y apellido</label>
              <input type="text" placeholder="Tu nombre" required>
            </div>
            <div class="form-row">
              <label>Teléfono</label>
              <input type="tel" placeholder="+54 9 2901 000-000" required>
            </div>
          </div>
          <div class="form-row">
            <label>Email</label>
            <input type="email" placeholder="tu@email.com" required>
          </div>
          <div class="form-row">
            <label>Tipo de servicio</label>
            <select required>
              <option value="">Elegí una opción</option>
              <option>Limpieza de hogar</option>
              <option>Limpieza de locales comerciales</option>
              <option>Limpieza de consorcios/edificios</option>
              <option>Limpieza de oficinas</option>
              <option>Mantenimiento general</option>
              <option>Otro / no estoy seguro</option>
            </select>
          </div>
          <div class="form-row">
            <label>Contanos más</label>
            <textarea rows="4" placeholder="Tamaño del espacio, frecuencia deseada, zona, etc."></textarea>
          </div>
          <button type="submit" class="form-submit">Enviar consulta →</button>
          <div class="form-note">También podés escribirnos directo por WhatsApp para una respuesta más rápida.</div>
        </form>
      </div>

      <div class="map-box">
        <iframe src="https://www.google.com/maps?q=Ushuaia,+Tierra+del+Fuego,+Argentina&output=embed" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-overlay">
          <div>
            <div class="addr">📍 Bahia Relegada 4055 Dpto7, Ushuaia</div>
            <div class="zone">Atendemos también Río Grande y Tolhuin</div>
          </div>
          <a href="https://maps.google.com/?q=Ushuaia,Argentina" target="_blank" rel="noopener">Cómo llegar</a>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="horarios">
  <div class="wrap">
    <div class="hours-band">
      <div>
        <h3>Horarios de atención</h3>
        <p>Coordinaciones y consultas por WhatsApp, email o el formulario.</p>
      </div>
      <div class="hours-list">
        <div class="hours-item"><div class="d">Lun – Vie</div><div class="h">9:00 – 19:00</div></div>
        <div class="hours-item"><div class="d">Sábados</div><div class="h">9:00 – 14:00</div></div>
        <div class="hours-item"><div class="d">Domingos</div><div class="h">Cerrado</div></div>
        <div class="hours-item"><div class="d">Feriados</div><div class="h">A demanda</div></div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
