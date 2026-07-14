<?php
/**
 * Plantilla genérica de página.
 * Se usa para cualquier página que no tenga un template propio
 * (front-page.php, page-servicios.php, page-quienes-somos.php, page-contacto.php).
 */
get_header();
?>

<section class="page-hero">
  <div class="wrap">
    <div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a> · <?php the_title(); ?></div>
    <h1 class="page-title"><?php the_title(); ?></h1>
  </div>
</section>

<section style="padding-top:0;">
  <div class="wrap" style="max-width:820px;">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
  </div>
</section>

<?php get_footer(); ?>
