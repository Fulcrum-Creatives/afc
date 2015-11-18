<div class="header__logo">
  <?php $afc_logo = fcwp_get_field( 'afc_logo', true ); ?>
  <h1 class="site__logo">
    <a href="<?php echo home_url(); ?>">
    	<img src="<?php echo $afc_logo['url']; ?>" alt="<?php echo $afc_logo['alt']; ?>" />
    	<span class="ir">
  			<?php echo bloginfo('name'); ?>
  		</span>
    </a>
  </h1>
</div>