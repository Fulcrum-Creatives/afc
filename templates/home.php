<?php
/*
Template Name: Home
*/
get_header();
?>
<main id="main" class="main" role="main">
  <section id="page-id-<?php the_ID(); ?>" <?php post_class('content__wrapper home-page'); ?> aria-labelledby="page-heading-<?php the_ID(); ?>">
    <?php 
    if ( have_posts() ) : 
      while ( have_posts() ) : 
        $do_not_duplicate[] = $post->ID;
  
        $afc_hp_bottom_link = fcwp_get_field('afc_hp_bottom_link');
        $afc_hp_bottom_link_text = fcwp_get_field('afc_hp_bottom_link_text'); 
        the_post();
        get_template_part( 'template-parts/homepage/content', 'headertext' );
        get_template_part( 'template-parts/homepage/content', 'divider' );
        get_template_part( 'template-parts/homepage/content', 'heroimage' );
        get_template_part( 'template-parts/homepage/content', 'posts' );
      ?>
      <div class="home-page__bottom-link">
        <a href="<?php echo $afc_hp_bottom_link; ?>">
          <?php echo $afc_hp_bottom_link_text; ?>
        </a>
      </div>
      <?php
      endwhile; 
    else:
      get_template_part( 'template-parts/content', 'none' );
    endif; 
    wp_reset_postdata();
    ?>
  <section class="content__wrapper">
</main>
<?php get_footer(); ?>