<form role="search" method="get" id="searchform" class="search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="text" id="s" class="search__form--input" name="s"value="<?php echo get_search_query(); ?>" placeholder="Search" />
  <input type="submit" id="search__form--submit" class="search__form--submit" value="" />
  <span class="search__form--icon"></span>
</form>