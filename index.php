<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bapnewheroes
 */

get_header( 'blog' );
?>

<main id="primary" class="site-main">
	<h2 class="ar-title-section">Nos articles</h2>

	<div>
  		<input type="checkbox" id="sport" name="sport" class="ar-check ar-sport-check" onclick="filterFunction1()">
  		<label for="sport">Sport</label>
	</div>
	<div>
  		<input type="checkbox" id="temoignage" name="temoignage" class="ar-check ar-temoignage-check" onclick="filterFunction2()">
  		<label for="temoignage">Témoignage</label>
	</div>
	<div>
  		<input type="checkbox" id="conseil" name="conseil" class="ar-check ar-conseil-check" onclick="filterFunction3()">
  		<label for="conseil">Conseil</label>
	</div>
	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php

			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header><!-- .page-header -->

	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		/*
		 * Include the Post-Type-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content', get_post_type() );

	endwhile;

	the_posts_navigation();

	else :

	get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main><!-- #main -->


<?php
get_footer();

