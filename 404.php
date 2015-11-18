<?php get_header(); ?>
<main id="main" class="main" role="main">
  <div id="error" class="error content__wrapper">
    <header id="page__header" class="page__header">
      <h1><?php _e('Page Not Found', FCWP_TEXTDOMAIN); ?></h1>
    </header>
    <p><?php _e('Sorry, but the page you requested has not been found', FCWP_TEXTDOMAIN); ?></p>
    <p><?php _e('Check the URL or use the search from below.', FCWP_TEXTDOMAIN); ?></p>
    <div class="home-page__header-divider">
      <div class="inner">
        <div class="header-divider__search">
          <form role="search" method="get" id="searchform" class="header-divider__searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" id="s" class="header-divider__input" name="s"value="<?php echo get_search_query(); ?>" placeholder="Enter Search Term" />
            <input type="submit" id="header-divider__submit" class="header-divider__submit" value="search" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php 
  get_template_part( 'template-parts/content', 'links' );
  get_template_part( 'template-parts/content', 'divider' ); 
  ?>
</main>
<?php get_footer(); ?>