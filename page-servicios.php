<?php
/**
 * Template Name: Servicios
 * Se aplica automáticamente si la página tiene el slug "servicios",
 * o podés asignarlo manualmente desde Atributos de página > Plantilla.
 */
get_header();
?>


<section class="page-hero">
  <div class="wrap">
    <div class="breadcrumb"><a href="#">Inicio</a> · Servicios</div>
    <h1 class="page-title">Un servicio para cada tipo de espacio</h1>
    <p class="page-sub">Locales comerciales, consorcios y oficinas: adaptamos el equipo, la frecuencia y el protocolo según lo que necesite tu espacio.</p>
  </div>
</section>

<section style="padding-top:0;">
  <div class="wrap">

    <div class="service-block">
      <div class="sb-media">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/svc-comercial.png' ); ?>" alt="Limpieza de locales comerciales">
        <div class="sb-badge"><span>★</span> El más solicitado</div>
      </div>
      <div class="sb-text">
        <div class="sb-icon">🏬</div>
        <h2>Limpieza de locales comerciales</h2>
        <p>Tu local siempre listo para recibir clientes. Limpiamos comercios, showrooms y locales de venta al público, cuidando la imagen de tu marca en cada detalle.</p>
        <div class="sb-freq">🗓️ Frecuencia diaria, semanal o a demanda</div>
        <ul class="sb-list">
          <li>Limpieza de piso, vidrieras y mostradores</li>
          <li>Desinfección de baños y probadores</li>
          <li>Limpieza de estanterías y exhibidores</li>
          <li>Retiro de residuos</li>
          <li>Horarios fuera de atención al público</li>
        </ul>
        <a href="contacto" class="sb-cta">Cotizar este servicio →</a>
      </div>
    </div>

    <div class="service-block reverse">
      <div class="sb-media">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/svc-consorcio.png' ); ?>" alt="Limpieza de consorcios y edificios">
        <div class="sb-badge"><span>🏢</span> Espacios comunes</div>
      </div>
      <div class="sb-text">
        <div class="sb-icon">🏢</div>
        <h2>Limpieza de consorcios / edificios</h2>
        <p>Nos encargamos de mantener impecables los espacios comunes de tu edificio o consorcio: palieres, escaleras, ascensores, hall de entrada y áreas exteriores. Trabajamos con horarios flexibles para no interferir con la circulación de vecinos.</p>
        <div class="sb-freq">🗓️ Frecuencia diaria, interdiaria o semanal según el consorcio</div>
        <ul class="sb-list">
          <li>Limpieza y desinfección de palieres y escaleras</li>
          <li>Limpieza de ascensores y espejos/botoneras</li>
          <li>Mantenimiento de hall de entrada y portería</li>
          <li>Limpieza de veredas y espacios exteriores</li>
          <li>Retiro de residuos de áreas comunes</li>
        </ul>
        <a href="contacto" class="sb-cta">Cotizar este servicio →</a>
      </div>
    </div>

    <div class="service-block">
      <div class="sb-media">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/svc-oficinas.png' ); ?>" alt="Limpieza de oficinas">
        <div class="sb-badge"><span>💼</span> Fuera de horario</div>
      </div>
      <div class="sb-text">
        <div class="sb-icon">💼</div>
        <h2>Limpieza de oficinas</h2>
        <p>Mantenemos tu espacio de trabajo impecable todos los días. Ofrecemos limpieza profunda y de mantenimiento para oficinas, locales comerciales y espacios corporativos, adaptándonos a tu horario para no interrumpir tu actividad.</p>
        <div class="sb-freq">🗓️ Frecuencia diaria, semanal o según necesites</div>
        <ul class="sb-list">
          <li>Limpieza de escritorios, pisos y áreas comunes</li>
          <li>Desinfección de baños y cocinas</li>
          <li>Vaciado de cestos y reposición de insumos</li>
          <li>Limpieza de vidrios y superficies</li>
        </ul>
        <a href="contacto" class="sb-cta">Cotizar este servicio →</a>
      </div>
    </div>

    <div class="service-block reverse">
      <div class="sb-media">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/mantenimiento.png' ); ?>" alt="Mantenimiento general">
        <div class="sb-badge"><span>🔧</span> Servicio integral</div>
      </div>
      <div class="sb-text">
        <div class="sb-icon">🔧</div>
        <h2>Mantenimiento general</h2>
        <p>Nos ocupamos del mantenimiento edilicio y comercial de tu espacio: gas, electricidad, agua y reparaciones generales, con proveedores de confianza para que no tengas que buscar por tu cuenta.</p>
        <div class="sb-freq">🗓️ A demanda o con contrato de mantenimiento mensual</div>
        <ul class="sb-list">
          <li>Revisión de instalaciones de gas, agua y electricidad</li>
          <li>Reparaciones menores de plomería y electricidad</li>
          <li>Mantenimiento preventivo de edificios y locales</li>
          <li>Atención a fallas y emergencias puntuales</li>
          <li>Coordinación con especialistas para trabajos mayores</li>
        </ul>
        <a href="contacto" class="sb-cta">Cotizar este servicio →</a>
      </div>
    </div>

  </div>
</section>


<section>
  <div class="wrap">
    <div class="process-band">
      <h2>Así trabajamos en cualquiera de los 3 servicios</h2>
      <div class="process-grid">
        <div class="p-step"><div class="n">1</div><h4>Visita de relevamiento</h4><p>Conocemos el espacio sin cargo.</p></div>
        <div class="p-step"><div class="n">2</div><h4>Propuesta a medida</h4><p>Frecuencia, equipo y precio claros.</p></div>
        <div class="p-step"><div class="n">3</div><h4>Inicio del servicio</h4><p>Equipo asignado y capacitado.</p></div>
        <div class="p-step"><div class="n">4</div><h4>Seguimiento</h4><p>Checklist y ajustes si hacen falta.</p></div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div style="text-align:center; max-width:560px; margin:0 auto 36px;">
      <div class="kicker">Comparativa</div>
      <h2 style="font-size:30px; font-weight:800; color:var(--navy); margin-top:10px;">¿Cuál se ajusta a tu espacio?</h2>
    </div>
    <div class="compare-wrap">
      <table class="compare">
        <tr><th>Característica</th><th>Comercial</th><th>Consorcio</th><th>Oficinas</th><th>Mantenimiento</th></tr>
        <tr><td>Atención al público</td><td class="yes">✓</td><td class="no">—</td><td class="no">—</td><td class="no">—</td></tr>
        <tr><td>Áreas comunes / exteriores</td><td class="no">—</td><td class="yes">✓</td><td class="no">—</td><td class="yes">✓</td></tr>
        <tr><td>Horario fuera de actividad</td><td class="yes">✓</td><td class="no">—</td><td class="yes">✓</td><td class="yes">✓</td></tr>
        <tr><td>Frecuencia diaria disponible</td><td class="yes">✓</td><td class="yes">✓</td><td class="yes">✓</td><td class="no">—</td></tr>
        <tr><td>Checklist digital por visita</td><td class="yes">✓</td><td class="yes">✓</td><td class="yes">✓</td><td class="yes">✓</td></tr>
      </table>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <div class="final-cta">
      <h2>¿No estás seguro cuál elegir?</h2>
      <p>Contanos tu caso y te recomendamos el servicio ideal, sin compromiso.</p>
      <a href="contacto" class="sb-cta">Hablar con un asesor →</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
