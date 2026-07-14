<?php
/**
 * Archivo requerido por WordPress. Se usa como último recurso
 * si ninguna otra plantilla (front-page, page-*, page.php) aplica.
 */
get_header();
?>

<section style="padding:80px 0; text-align:center;">
  <div class="wrap">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
      <?php endwhile; ?>
    <?php else : ?>
      <h1 class="page-title">Nada por aquí</h1>
      <p class="sub">No se encontró contenido para mostrar.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
