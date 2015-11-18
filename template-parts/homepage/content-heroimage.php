<?php
$afc_hp_header_image           = fcwp_get_field('afc_hp_header_image');
$afc_hp_header_image_text      = fcwp_get_field('afc_hp_header_image_text');
$afc_hp_header_image_link      = fcwp_get_field('afc_hp_header_image_link');
$afc_hp_header_image_link_text = fcwp_get_field('afc_hp_header_image_link_text'); 
?>
<div class="home-page__hero-image">
  <img src="<?php echo $afc_hp_header_image['url']; ?>" alt="<?php echo $afc_hp_header_image['alt']; ?>" />
  <div class="hero-image__caption">
    <div class="inner">
      <div class="hero-image__caption--text">
        <?php echo $afc_hp_header_image_text; ?>
      </div>
      <div class="hero-image__caption--button">
        <a href="<?php echo $afc_hp_header_image_link; ?>">
        <?php echo $afc_hp_header_image_link_text; ?>
        </a>
      </div>
    </div>
    <div class="hero-image__background"></div>
  </div>
</div>