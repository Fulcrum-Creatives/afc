<article id="post-<?php the_ID(); ?>" <?php post_class('excerpt entry__content'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
  <header class="entry__header">
    <h2 class="entry__title" id="section-heading-<?php the_ID(); ?>">
      <a href="<?php the_permalink() ?>" rel="bookmark">
        <?php the_time( get_option( 'date_format' ) ); ?> <?php the_title(); ?>
      </a>
    </h2>
  </header>
  <div>
    <?php fcwp_custom_excerpt( $excerpt_args = array(
      'is_ellipsis_link'    => false,
    ) ) ?>
  </div>
</article>