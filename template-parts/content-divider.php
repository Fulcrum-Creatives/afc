<?php
$afc_tips_text = fcwp_get_field( 'afc_tips_text', true );
$afc_tips_link = fcwp_get_field( 'afc_tips_link', true );
?>
<div class="home-page__bottom-link">
  <a href="<?php echo $afc_tips_link ?>">
    <?php echo $afc_tips_text; ?>
  </a>
</div>