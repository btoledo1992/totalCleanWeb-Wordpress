<div class="ticker">
  <div class="ticker-track">
    <span>Presupuesto sin cargo en el día</span>
    <span>Productos profesionales de primera calidad</span>
    <span>Equipo capacitado y de confianza</span>
    <span>Atendemos Ushuaia y alrededores</span>
    <span>Garantía de satisfacción en cada visita</span>
    <span>Presupuesto sin cargo en el día</span>
    <span>Productos profesionales de primera calidad</span>
    <span>Equipo capacitado y de confianza</span>
    <span>Atendemos Ushuaia y alrededores</span>
    <span>Garantía de satisfacción en cada visita</span>
  </div>
</div>

<footer class="f4">
  <div class="wrap f4-grid">
    <div class="f4-brand">
      <div class="f4-logo-text">Total Clean</div>
      <p>Servicio de limpieza y mantenimiento profesional para oficinas y comercios en Ushuaia y alrededores.</p>
      <div class="f4-social">
        <a href="https://instagram.com/tcsgtdf" target="_blank" rel="noopener" aria-label="Instagram">
          <svg viewBox="0 0 24 24" fill="none"><rect x="2" y="2" width="20" height="20" rx="6" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="4.2" stroke="currentColor" stroke-width="2"/><circle cx="17.4" cy="6.6" r="1.2" fill="currentColor"/></svg>
        </a>
        <a href="https://wa.me/5492901557421" target="_blank" rel="noopener" aria-label="WhatsApp">
          <svg viewBox="0 0 24 24" fill="none"><path d="M12 2a10 10 0 0 0-8.6 15L2 22l5.2-1.4A10 10 0 1 0 12 2Z" stroke="currentColor" stroke-width="2"/></svg>
        </a>
      </div>
    </div>

    <div class="f4-col">
      <h5>Navegación</h5>
      <?php
      if ( has_nav_menu( 'primary' ) ) {
          wp_nav_menu( [
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => '',
              'depth'          => 1,
              'items_wrap'     => '%3$s',
          ] );
      } else {
          echo '<a href="' . esc_url( home_url( '/' ) ) . '">Inicio</a>';
          echo '<a href="' . esc_url( home_url( '/servicios' ) ) . '">Servicios</a>';
          echo '<a href="' . esc_url( home_url( '/quienes-somos' ) ) . '">Quienes somos</a>';
          echo '<a href="' . esc_url( home_url( '/contacto' ) ) . '">Contacto</a>';
      }
      ?>
    </div>

    <div class="f4-col">
      <h5>Contacto</h5>
      <a href="https://maps.google.com/?q=Ushuaia,Argentina" target="_blank" rel="noopener">📍 Ushuaia, Tierra del Fuego</a>
      <a href="https://wa.me/5492901557421" target="_blank" rel="noopener">💬 +54 9 2901 557-421</a>
      <a href="mailto:comercial@totalclean.com.ar">✉️ comercial@totalclean.com.ar - (Presupuestos)</a>
      <a href="mailto:administracion@totalclean.com.ar">✉️ administracion@totalclean.com.ar - (CV)</a>
    </div>
  </div>

  <div class="dev-signature">
    <div class="row">
      <span class="dev-user">btoledo@ush</span><span class="dev-sep">:~$</span><span class="dev-cmd">_</span><span class="dev-cursor"></span>
      <span class="dev-dot">·</span>
      <span class="dev-meta">desarrollo &amp; infraestructura · &copy; <?php echo date('Y'); ?> — todos los derechos reservados</span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>