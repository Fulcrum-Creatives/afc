<?php get_header(); ?>
<main id="main" class="main" role="main">
  <section id="page-id-<?php the_ID(); ?>" <?php post_class('content__wrapper'); ?> aria-labelledby="page-heading-<?php the_ID(); ?>">
    <?php 
    if ( have_posts() ) : 
      ?>
      <header id="page__header" class="page__header">
        <?php fcwp_archive_title(); ?>
      </header>
      <?php
      while ( have_posts() ) : 
        the_post();
        get_template_part( 'template-parts/content', 'excerpt' );
      endwhile; 
      fcwp_pagination('split', array(
        'prelabel'  => 'Previous',
        'nextlabel' => 'Next',
      ));
    else:
      get_template_part( 'template-parts/content', 'none' );
    endif; 
    wp_reset_postdata();
    ?>
  <section class="content__wrapper">
  <?php 
  get_template_part( 'template-parts/content', 'links' );
  get_template_part( 'template-parts/content', 'divider' ); 
  ?>
</main>
<?php get_footer(); ?>