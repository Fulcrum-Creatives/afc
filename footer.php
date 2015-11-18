<footer class="body__footer" role="contentinfo">
  <div class="content__wrapper">
    <?php get_template_part( 'template-parts/menu', 'footer' ); ?>
    <div class="footer__info">
      <ul>
        <li>
          <a href="<?php echo home_url(); ?>/privacy-policy/">
            <?php _e( 'Privacy Policy', FCWP_TEXTDOMAIN ); ?>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/contact/">
            <?php _e( 'Contact', FCWP_TEXTDOMAIN ); ?>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/staff-email/">
            <?php _e( 'Staff Email', FCWP_TEXTDOMAIN ); ?>
          </a>
        </li>
        <li>
          <?php _e( '&copy; ' . date('Y') . 'Action for Children. All Rights Reserved.' , FCWP_TEXTDOMAIN ); ?>
        </li>
      </ul>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>