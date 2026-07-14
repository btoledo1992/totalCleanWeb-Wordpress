<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="mesh"><div class="m1"></div><div class="m2"></div></div>

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

<header>
  <div class="wrap">
    <nav>
      <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/logo.png' ); ?>" alt="Total Clean" class="logo-img">
        </a>
      </div>

      <button class="hamburger" id="hamburgerBtn" aria-label="Abrir menú" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>

      <div class="nav-collapse" id="navCollapse">
        <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( [
                'theme_location' => 'primary',
                'container'      => 'div',
                'container_class'=> 'navlinks',
                'menu_class'     => '',
                'depth'          => 1,
            ] );
        } else {
            totalclean_fallback_menu();
        }
        ?>

        <div class="nav-right">
          <div class="social-icons">
            <a href="https://instagram.com/tcsgtdf" target="_blank" rel="noopener" aria-label="Instagram" title="Seguinos en Instagram">
              <svg viewBox="0 0 24 24" fill="none"><rect x="2" y="2" width="20" height="20" rx="6" stroke="#113F67" stroke-width="2"/><circle cx="12" cy="12" r="4.2" stroke="#113F67" stroke-width="2"/><circle cx="17.4" cy="6.6" r="1.2" fill="#113F67"/></svg>
            </a>
            <a href="https://wa.me/5492901557421" target="_blank" rel="noopener" aria-label="WhatsApp" title="Escribinos por WhatsApp">
              <svg viewBox="0 0 24 24" fill="none"><path d="M12 2a10 10 0 0 0-8.6 15L2 22l5.2-1.4A10 10 0 1 0 12 2Z" stroke="#113F67" stroke-width="2"/><path d="M8.5 8.7c.2-.6.5-.6.8-.6h.6c.2 0 .4 0 .6.5.2.5.7 1.7.7 1.8.1.1.1.3 0 .4-.1.2-.2.3-.3.5-.2.1-.3.3-.1.6.2.3.9 1.4 1.9 2.3 1.3 1.1 2.3 1.5 2.6 1.6.3.1.5.1.7-.1.2-.2.7-.8.9-1.1.2-.3.4-.2.6-.1.2.1 1.6.8 1.9 1 .3.1.5.2.5.3.1.2.1 1-.3 1.9-.4.9-2.1 1.6-2.9 1.7-.7.1-1.6.2-5.1-1.1-4.3-1.7-7-6-7.2-6.3-.2-.3-1.7-2.2-1.7-4.3 0-2 1.1-3 1.5-3.4Z" stroke="#113F67" stroke-width="1.3"/></svg>
            </a>
          </div>
          <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="cta-btn">Pedir presupuesto</a>
        </div>
      </div>
    </nav>
  </div>
</header>
