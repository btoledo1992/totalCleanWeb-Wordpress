<?php
/**
 * Template Name: Quienes Somos
 * Se aplica automáticamente si la página tiene el slug "quienes-somos",
 * o podés asignarlo manualmente desde Atributos de página > Plantilla.
 */
get_header();
?>


<section class="hero-about">
  <div class="wrap hero-grid">
    <div>
      <div class="breadcrumb"><a href="#">Inicio</a> · Quienes somos</div>
      <h1 class="headline">Un equipo que conoce <span class="grad">cada rincón de Ushuaia.</span></h1>
      <p class="sub">Hace más de 3 años acompañamos a familias y empresas fueguinas con un servicio de limpieza y mantenimiento serio, puntual y prolijo. No tercerizamos: cada persona del equipo está capacitada y supervisada directamente por nosotros.</p>
      <a href="servicios" class="btn-primary">Conocer nuestros servicios →</a>
    </div>
    <div class="hero-media">
      <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/Ushuaia2.jpg' ); ?>" alt="Equipo Total Clean">
      <div class="float"><div class="n">3+ años</div><div class="l">cuidando espacios en Tierra del Fuego</div></div>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="story-split">
      <!-- <div class="story-gallery">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/Ushuaia.jpg' ); ?>" alt="Nuestra historia">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/equipo.png' ); ?>" alt="Equipo trabajando">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/equipo2.png' ); ?>" alt="Detalle de limpieza">
      </div> -->
      <div class="hero-media">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/Ushuaia.jpg' ); ?>" alt="Equipo Total Clean">
      </div>
      <div>
        <div class="kicker">Nuestra historia</div>
        <h2 class="title" style="margin-top:10px; margin-bottom:16px;">De un emprendimiento de amigos a un equipo profesional</h2>
        <p style="color:#33566b; font-size:15px;">Total Clean nació en Ushuaia con la idea simple de hacer las cosas bien: horarios que se cumplen, resultados que se notan y un trato cercano con cada cliente. Hoy seguimos siendo un equipo local, pero con protocolos y capacitación de nivel profesional.</p>
        <ul class="story-list">
          <li><div class="ck">✓</div> Fundada en Ushuaia, con equipo 100% local</li>
          <li><div class="ck">✓</div> Capacitación continua en protocolos de limpieza</li>
          <li><div class="ck">✓</div> Selección y verificación de todo el personal</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- <section>
  <div class="wrap">
    <div class="section-head">
      <div class="kicker">Nuestros fundadores</div>
      <h2 class="title">La visión detrás de cada logro</h2>
    </div>
    <div class="team-grid">
      <div class="team-card"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/martin.png' ); ?>" alt="Coordinadora general"><div class="team-info"><h4>Martin</h4><p>Gerencia</p></div></div>
      <div class="team-card"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/luis.png' ); ?>" alt="Encargada de calidad"><div class="team-info"><h4>Luis</h4><p>Gerencia</p></div></div>
      <div class="team-card"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/tincho.png' ); ?>" alt="Supervisor de campo"><div class="team-info"><h4>Marcos</h4><p>Community Manager</p></div></div>
      <div class="team-card team-card-nudge"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/ema.png' ); ?>" alt="Atención al cliente"><div class="team-info"><h4>Blas</h4><p>Sistemas</p></div></div>
    </div>
  </div>
</section> -->

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
      <div class="kicker">Nuestros valores</div>
      <h2 class="title">Lo que no negociamos</h2>
    </div>
    <div class="values-grid">
      <div class="value-card"><div class="value-icon">🤝</div><h4>Confianza</h4><p>Mismo equipo en cada visita, verificado y capacitado.</p></div>
      <div class="value-card"><div class="value-icon">⏱️</div><h4>Puntualidad</h4><p>Llegamos en el horario acordado, siempre.</p></div>
      <div class="value-card"><div class="value-icon">🌿</div><h4>Cuidado</h4><p>Productos de calidad, seguros para tu familia y equipo.</p></div>
      <div class="value-card"><div class="value-icon">📋</div><h4>Transparencia</h4><p>Precios claros y checklist de cada trabajo realizado.</p></div>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="final-cta">
      <h2>¿Querés que cuidemos tu espacio?</h2>
      <p>Coordinemos una primera visita sin compromiso.</p>
      <a href="contacto" class="btn-primary">Escribinos ahora →</a>
    </div>
  </div>
</section>


<?php get_footer(); ?>
