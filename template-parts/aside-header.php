<?php $acf_donation_url = fcwp_get_field( 'acf_donation_url', true ); ?>
<div class="header__aside-donate">
  <a href="<?php echo $acf_donation_url; ?>"></a>
</div>
<div class="header__aside-search">
  <?php get_search_form(); ?>
</div>
<div class="header__aside-menu">
</div>