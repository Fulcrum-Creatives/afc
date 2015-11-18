<?php 
global $do_not_duplicate;
$afc_hp_post_box_header = fcwp_get_field('afc_hp_post_box_header'); 
$afc_hp_post_box_1_category = fcwp_get_field('afc_hp_post_box_1_category'); 
$afc_hp_post_box_1_title = fcwp_get_field('afc_hp_post_box_1_title'); 
$afc_hp_post_box_2_category = fcwp_get_field('afc_hp_post_box_2_category'); 
$afc_hp_post_box_2_title = fcwp_get_field('afc_hp_post_box_2_title');
$afc_hp_post_box_3_category = fcwp_get_field('afc_hp_post_box_3_category'); 
$afc_hp_post_box_3_title = fcwp_get_field('afc_hp_post_box_3_title');
?>
<div class="home-page__posts-header">
  <?php echo $afc_hp_post_box_header; ?>
</div>
<div class="home-page__posts row">
  <div class="col__1-3 posts-1">
    <div class="posts__header">
      <a href="<?php echo get_category_link( $afc_hp_post_box_1_category ); ?>">
        <?php echo $afc_hp_post_box_1_title; ?>
      </a>
    </div>
    <div class="posts__body">
      <?php
      $post_1_query = new WP_Query( array(
          'post_type'      => 'post',
          'posts_per_page' => '1',
          'category__in'   => $afc_hp_post_box_1_category,
          'no_found_rows'  => true
      ) );
      while( $post_1_query->have_posts() ) : 
        $post_1_query->the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
          <header class="entry__header">
            <h2 class="entry__title" id="section-heading-<?php the_ID(); ?>">
              <a href="<?php the_permalink() ?>" rel="bookmark">
                <?php the_time( get_option( 'date_format' ) ); ?> <?php the_title(); ?>
              </a>
            </h2>
          </header>
          <div class="entry__content">
            <?php fcwp_custom_excerpt( $excerpt_args = array(
              'is_ellipsis_link'    => false,
            ) ) ?>
          </div>
        </article>
        <?php
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </div>

  <div class="col__1-3 posts-2">
    <div class="posts__header">
      <a href="<?php echo get_category_link( $afc_hp_post_box_2_category ); ?>">
        <?php echo $afc_hp_post_box_2_title; ?>
      </a>
    </div>
    <div class="posts__body">
      <?php
      $post_2_query = new WP_Query( array(
          'post_type'      => 'post',
          'posts_per_page' => '1',
          'category__in'   => $afc_hp_post_box_2_category,
          'post__not_in'   => $do_not_duplicate,
          'no_found_rows'  => true
      ) );
      while( $post_2_query->have_posts() ) : 
        $post_2_query->the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
          <header class="entry__header">
            <h2 class="entry__title" id="section-heading-<?php the_ID(); ?>">
              <a href="<?php the_permalink() ?>" rel="bookmark">
                <?php the_time( get_option( 'date_format' ) ); ?> <?php the_title(); ?>
              </a>
            </h2>
          </header>
          <div class="entry__content">
            <?php fcwp_custom_excerpt( $excerpt_args = array(
              'is_ellipsis_link'    => false,
            ) ) ?>
          </div>
        </article>
        <?php
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </div>

  <div class="col__1-3 posts-3">
    <div class="posts__header">
      <a href="<?php echo get_category_link( $afc_hp_post_box_3_category ); ?>">
        <?php echo $afc_hp_post_box_3_title; ?>
      </a>
    </div>
    <div class="posts__body">
      <?php
      $post_2_query = new WP_Query( array(
          'post_type'      => 'post',
          'posts_per_page' => '1',
          'category__in'   => $afc_hp_post_box_3_category,
          'post__not_in'   => $do_not_duplicate,
          'no_found_rows'  => true
      ) );
      while( $post_2_query->have_posts() ) : 
        $post_2_query->the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
          <header class="entry__header">
            <h2 class="entry__title" id="section-heading-<?php the_ID(); ?>">
              <a href="<?php the_permalink() ?>" rel="bookmark">
                <?php the_time( get_option( 'date_format' ) ); ?> <?php the_title(); ?>
              </a>
            </h2>
          </header>
          <div class="entry__content">
            <?php fcwp_custom_excerpt( $excerpt_args = array(
              'is_ellipsis_link'    => false,
            ) ) ?>
          </div>
        </article>
        <?php
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </div>
      </div>