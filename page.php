<?php get_header(); ?>
<main id="main" class="main" role="main">
  <section id="page-id-<?php the_ID(); ?>" <?php post_class('content__wrapper'); ?> aria-labelledby="page-heading-<?php the_ID(); ?>">
    <?php 
    if ( have_posts() ) : 
      while ( have_posts() ) : 
        the_post();
        get_template_part( 'template-parts/content', 'featuredimage' );
        fcwp_page_title();
        get_template_part( 'template-parts/content', 'page' );
      endwhile; 
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