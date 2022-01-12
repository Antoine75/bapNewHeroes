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
<div class="error">
    <img src="https://zupimages.net/up/22/01/386o.png">
    <h2 class="ar-error-msg">Site Desktop en maintenance, Version mobile disponible</h2>
</div>
<main id="primary" class="site-main ar-blog-section">
	<h2 class="ar-title-section">Nos articles</h2>

<div class="ar-filter-img">
	<img src="https://zupimages.net/up/22/01/hpno.png" alt="" onclick="Appear()">
</div>

<div id="reglage" class="ar-filter-section">
	<h2>Trier par Catégorie</h2>
	<div>
  		<input id="checkbox1" type="checkbox" name="sport" class="ar-check ar-sport-check" onclick="filterFunction1(), GereChkbox()">
  		<label for="sport">Sport</label>
	</div>
	<div>
  		<input id="checkbox2" type="checkbox" name="temoignage" class="ar-check ar-temoignage-check" onclick="filterFunction2(), GereChkbox()">
  		<label for="temoignage">Témoignage</label>
	</div>
	<div>
  		<input id="checkbox3" type="checkbox" name="conseil" class="ar-check ar-conseil-check" onclick="filterFunction3(), GereChkbox()">
  		<label for="conseil">Conseil</label>
	</div>
	<button onclick="DisableChkbox()">Retirer les filtres</button>
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

