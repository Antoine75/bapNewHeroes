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

<form method="GET">
	<?php

	$terms = get_terms([
		'taxonomy' => 'home-type',
		'hide_empty' => false
	]);

	foreach ($terms as $term) :
	?>

	<label>
	  	<input 
	  		type="checkbox" 
	  		name="home_type[]" 
	  		value="<?php echo $term->slug; ?>"
		>

	  <?php echo $term->name; ?>
	</label>

	<?php endforeach; ?>
	<button type="submit">Apply</button>
</form>


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

