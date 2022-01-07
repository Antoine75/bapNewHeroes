<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bapnewheroes
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		
		while ( have_posts() ) :
			the_post();

			?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('ar-article-single'); ?>>
			<?php 
			
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			$tags = get_field("etiquettes");
			$i = 0;
			while($i < count($tags)){
				
				echo $tags[$i];
				$i += 1;
			}

			if(has_post_thumbnail()) {
				bapnewheroes_post_thumbnail();
			} else {
				echo '<img src="https://zupimages.net/up/22/01/mt4s.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy">';
			}; ?> 
				
				
				
			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bapnewheroes' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
		
				?>
			</div><!-- .entry-content -->
			
			<footer class="entry-footer">
				<?php bapnewheroes_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-<?php the_ID(); ?> -->

			<?php

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.

		?>

	</main><!-- #main -->

<?php
