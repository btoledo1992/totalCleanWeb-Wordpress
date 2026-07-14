<?php
/**
 * Template principal - Inicio de Total Clean
 */
get_header();
?>


<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <div class="eyebrow"><span class="dot"></span> Limpieza y Mantenimiento profesional en Ushuaia</div>
      <h1 class="headline">Claridad total, <span class="grad">desde el primer contacto.</span></h1>
      <p class="sub">Total Clean lleva limpieza y mantenimiento de calidad a hogares y oficinas: precios claros, resultados que se ven y un equipo en el que podés confiar.</p>
      <a href="contacto" class="btn-primary">Contactanos →</a>
      <!-- <a href="#nosotros" class="btn-ghost">Conocer al equipo</a> -->
    </div>
    <div class="carousel" id="carousel11">
      <div class="carousel-track">
        <div class="carousel-slide"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/hero1.png' ); ?>" alt="Limpieza de hogar"><div class="cap">Limpieza de hogar</div></div>
        <div class="carousel-slide"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/hero2.png' ); ?>" alt="Limpieza de oficinas"><div class="cap">Oficinas y locales</div></div>
        <div class="carousel-slide"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/hero3.png' ); ?>" alt="Mantenimiento general"><div class="cap">Mantenimiento general</div></div>
      </div>
      <div class="carousel-arrows">
        <button onclick="moveSlide('carousel11',-1)">‹</button>
        <button onclick="moveSlide('carousel11',1)">›</button>
      </div>
      <div class="carousel-dots" id="dots-carousel11"></div>
    </div>
  </div>
</section>

<section style="padding-top:0; padding-bottom:30px;">
  <div class="wrap">
    <div class="badges">
      <div class="badge"><span>✓</span> Equipo asegurado</div>
      <div class="badge"><span>✓</span> Personal verificado</div>
      <div class="badge"><span>✓</span> Garantía de satisfacción</div>
      <div class="badge"><span>✓</span> Presupuesto sin cargo</div>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="section-head">
      <div class="kicker">Servicios</div>
      <h2 class="title">Lo que hacemos, bien hecho</h2>
    </div>
    <div class="cards">
      <div class="card"><div class="icon-wrap">🏠</div><h3>Oficinas y locales</h3><p>Servicio recurrente fuera de horario, con checklist de calidad.</p></div>
      <div class="card"><div class="icon-wrap">✨</div><h3>Limpieza profunda</h3><p>Para mudanzas, post obra o esa puesta a punto que hace falta.</p></div>
      <div class="card"><div class="icon-wrap">🏢</div><h3>Mantenimiento general</h3><p>Cuidamos cada detalle para mantener sus instalaciones siempre operativas.</p></div>
    </div>
  </div>
</section>

<!-- <section>
  <div class="wrap">
    <div class="section-head">
      <div class="kicker">Resultados reales</div>
      <h2 class="title">Antes y después</h2>
    </div>
    <div class="ba-wrap">
      <div class="ba-slider" id="baSlider">
        <img src="https://picsum.photos/seed/gbefore1/800/600" alt="Antes">
        <img class="ba-after" id="baAfterImg" src="https://picsum.photos/seed/gafter1/800/600" alt="Después">
        <div class="ba-label left">Antes</div>
        <div class="ba-label right">Después</div>
        <div class="ba-handle" id="baHandle"></div>
      </div>
      <div class="ba-hint">Deslizá para comparar ←→</div>
    </div>
  </div>
</section>  IMAGENES DE ANTES Y DESPUES  --> 

<section>
  <div class="wrap">
    <div class="section-head">
      <div class="kicker">Cómo funciona</div>
      <h2 class="title">De la reserva al resultado</h2>
    </div>
    <div class="timeline">
      <div class="timeline-steps">
        <div class="t-step"><div class="t-dot">1</div><h3>Reservás</h3><p>Elegís el servicio y el horario por WhatsApp o la web.</p></div>
        <div class="t-step"><div class="t-dot">2</div><h3>Confirmamos</h3><p>Te enviamos el presupuesto y los datos del equipo asignado.</p></div>
        <div class="t-step"><div class="t-dot">3</div><h3>Trabajamos</h3><p>El equipo llega puntual y sigue un checklist por ambiente.</p></div>
        <div class="t-step"><div class="t-dot">4</div><h3>Revisás</h3><p>Te mostramos el resultado y ajustamos lo que necesites.</p></div>
      </div>
    </div>
  </div>
</section>

<section id="nosotros">
  <div class="wrap">
    <div class="about-split">
      <div class="about-gallery">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/seccion1.png' ); ?>" alt="Equipo de Total Clean trabajando" class="ph-big">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/seccion2.png' ); ?>" alt="Detalle de limpieza" class="ph-small">
      </div>
      <div class="about-text">
        <!-- <div class="kicker">Quiénes somos</div> -->
        <h2 class="title" style="margin-top:10px; margin-bottom:20px;">La atencion que tu hogar y empresa necesitan</h2>
        <p class="sub" style="max-width:100%; margin-bottom:26px;">Brindamos un servicio profesional, confiable y adaptado a cada necesidad. Trabajamos con personal capacitado, productos de calidad y el compromiso de superar tus expectativas en cada trabajo.</p>
        <div class="about-points">
          <div class="about-point"><div class="ap-icon">👥</div><div><h4>Mismo equipo, siempre</h4><p>Conocen tu casa u oficina y tus preferencias en cada visita.</p></div></div>
          <div class="about-point"><div class="ap-icon">📍</div><div><h4>100% local</h4><p>Vivimos y trabajamos en Ushuaia, cerca tuyo de verdad.</p></div></div>
          <div class="about-point"><div class="ap-icon">🛡️</div><div><h4>Garantía real</h4><p>Si algo no quedó como esperabas, volvemos sin costo extra.</p></div></div>
        </div>
        <a href="quienes-somos" class="btn-primary" style="margin-top:8px;">Conocer al equipo →</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="stats-band">
      <div><div class="n">3+</div><div class="l">años de experiencia</div></div>
      <div><div class="n">100+</div><div class="l">servicios realizados</div></div>
      <div><div class="n">9.9★</div><div class="l">calificación promedio</div></div>
      <div><div class="n">24hs</div><div class="l">respuesta garantizada</div></div>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="section-head">
      <div class="kicker">Preguntas frecuentes</div>
      <h2 class="title">Todo lo que necesitás saber</h2>
    </div>
    <div class="faq-wrap">
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)"><span>¿Tengo que estar en casa durante la limpieza?</span><span class="plus">+</span></div>
        <div class="faq-a"><p>No es necesario. Muchos clientes nos dejan la llave o coordinan el acceso, y te enviamos fotos al finalizar.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)"><span>¿Qué productos de limpieza usan?</span><span class="plus">+</span></div>
        <div class="faq-a"><p>Trabajamos con productos profesionales de primera calidad. Si preferís productos específicos o hipoalergénicos, avisanos y los usamos.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)"><span>¿Puedo cambiar el día de la visita?</span><span class="plus">+</span></div>
        <div class="faq-a"><p>Sí, solo avisanos con 24hs de anticipación por WhatsApp y reprogramamos sin costo adicional.</p></div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)"><span>¿Qué pasa si algo no queda como esperaba?</span><span class="plus">+</span></div>
        <div class="faq-a"><p>Volvemos a tu casa dentro de las 24 horas sin costo extra para resolverlo. Tu conformidad es parte del servicio.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- FOTOS PARA MOSTRAR
<section>
  <div class="wrap">
    <div class="section-head">
      <div class="kicker">Nuestro trabajo</div>
      <h2 class="title">Cada detalle cuenta</h2>
    </div>
  </div>
  <div class="work-gallery-wrap">
    <button class="gallery-arrow left" onclick="scrollGallery(-1)" aria-label="Anterior">‹</button>
    <div class="work-gallery" id="workGallery">
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo1/500/380" alt="Limpieza de hogar"><div class="gallery-cap">Limpieza de hogar</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo2/500/380" alt="Limpieza de oficina"><div class="gallery-cap">Oficina</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo3/500/380" alt="Limpieza de cocina"><div class="gallery-cap">Cocina profunda</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo4/500/380" alt="Limpieza de baño"><div class="gallery-cap">Baño</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo5/500/380" alt="Limpieza de local"><div class="gallery-cap">Local comercial</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo6/500/380" alt="Limpieza de ventanas"><div class="gallery-cap">Ventanas y vidrios</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo1/500/380" alt="Limpieza de hogar"><div class="gallery-cap">Limpieza de hogar</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo2/500/380" alt="Limpieza de oficina"><div class="gallery-cap">Oficina</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo3/500/380" alt="Limpieza de cocina"><div class="gallery-cap">Cocina profunda</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo4/500/380" alt="Limpieza de baño"><div class="gallery-cap">Baño</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo5/500/380" alt="Limpieza de local"><div class="gallery-cap">Local comercial</div></div>
      <div class="gallery-item"><img src="https://picsum.photos/seed/trabajo6/500/380" alt="Limpieza de ventanas"><div class="gallery-cap">Ventanas y vidrios</div></div>
    </div>
    <button class="gallery-arrow right" onclick="scrollGallery(1)" aria-label="Siguiente">›</button>
  </div>
</section>-->

<section>
  <div class="wrap">
    <div class="final-cta">
      <h2>¿Coordinamos la primera visita?</h2>
      <p>Respuesta el mismo día, sin compromiso.</p>
      <a href="contacto" class="btn-primary">Escribinos ahora →</a>
    </div>
  </div>
</section>


<?php get_footer(); ?>
