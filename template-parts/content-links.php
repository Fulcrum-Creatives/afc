<?php
$afc_resources_1_heading = fcwp_get_field( 'afc_resources_1_heading', true );
$afc_resources_1_text    = fcwp_get_field( 'afc_resources_1_text', true );
$afc_resources_1_link    = fcwp_get_field( 'afc_resources_1_link', true );
$afc_resources_2_heading = fcwp_get_field( 'afc_resources_2_heading', true );
$afc_resources_2_text    = fcwp_get_field( 'afc_resources_2_text', true );
$afc_resources_2_link    = fcwp_get_field( 'afc_resources_2_link', true );
$afc_resources_3_heading = fcwp_get_field( 'afc_resources_3_heading', true );
$afc_resources_3_text    = fcwp_get_field( 'afc_resources_3_text', true );
$afc_resources_3_link    = fcwp_get_field( 'afc_resources_3_link', true );
?>
<div class="page__links">
  <div class="row">
    <div class="col__1-2 page__links-next">
      <?php _e( 'Next Steps', FCWP_TEXTDOMAIN ); ?>
    </div>
    <div class="col__1-2 page__links-resources">
      <?php _e( 'Resources', FCWP_TEXTDOMAIN ); ?>
    </div>
  </div>
  <div class="row page__links-boxes">
    <div class="col__1-3">
      <h3 class="page__links-heading">
        <a href="<?php echo $afc_resources_1_link; ?>">
          <?php echo $afc_resources_1_heading; ?>
        </a>
      </h3>
      <div class="page__links-body">
        <?php echo $afc_resources_1_text; ?>
      </div>
    </div>
    <div class="col__1-3">
      <h3 class="page__links-heading">
        <a href="<?php echo $afc_resources_2_link; ?>">
          <?php echo $afc_resources_2_heading; ?>
        </a>
      </h3>
      <div class="page__links-body">
        <?php echo $afc_resources_2_text; ?>
      </div>
    </div>
    <div class="col__1-3">
      <h3 class="page__links-heading">
        <a href="<?php echo $afc_resources_3_link; ?>">
          <?php echo $afc_resources_3_heading; ?>
        </a>
      </h3>
      <div class="page__links-body">
        <?php echo $afc_resources_3_text; ?>
      </div>
    </div>
  </div>
</div>