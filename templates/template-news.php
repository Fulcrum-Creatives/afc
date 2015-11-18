<?php
/*
Template Name: News
*/
get_header();
?>
<main id="main" class="main" role="main">
  <section id="page-id-<?php the_ID(); ?>" <?php post_class('content__wrapper'); ?> aria-labelledby="page-heading-<?php the_ID(); ?>">
    <?php 
    $news_query = new WP_Query( array(
        'post_type' => 'post'
    ) );
    if ( have_posts() ) :
      while ( $news_query->have_posts() ) : 
        $news_query->the_post();
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