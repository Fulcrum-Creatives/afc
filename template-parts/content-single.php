<article id="post-<?php the_ID(); ?>" <?php post_class('entry single'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
	<?php get_template_part( 'template-parts/content', 'featuredimage' ); ?>
	<header class="entry__header">
		<?php the_title( '<h1 class="entry__title" id="section-heading-<?php the_ID(); ?>">', '</h1>' ); ?>
	</header>
	<section class="entry__content">
		<?php the_content(); ?>
	</section>
</article>