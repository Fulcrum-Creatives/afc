<?php 
$afc_hp_header_divider_text = fcwp_get_field('afc_hp_header_divider_text'); 
$acf_donation_url           = fcwp_get_field( 'acf_donation_url', true );
?>
<div class="home-page__header-divider">
  <div class="inner">
    <div class="header-divider__search">
      <form role="search" method="get" id="searchform" class="header-divider__searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" id="s" class="header-divider__input" name="s"value="<?php echo get_search_query(); ?>" placeholder="Enter Search Term" />
        <input type="submit" id="header-divider__submit" class="header-divider__submit" value="search" />
      </form>
    </div>
    <div class="header-divider__text">
      <?php echo $afc_hp_header_divider_text; ?>
    </div>
    <div class="header-divider__donate">
      <a href="<?php echo $acf_donation_url; ?>"></a>
    </div>
  </div>
</div>