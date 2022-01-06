<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bapnewheroes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('ar-blog-list'); ?>>
	<?php 

	if(has_post_thumbnail()) {
		bapnewheroes_post_thumbnail();
	} else {
		echo '
		<a class="post-thumbnail" href="' . esc_url( get_permalink() ) . '" aria-hidden="true" tabindex="-1">
		<img src="https://zupimages.net/up/22/01/mt4s.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy">
		</a>
		';
	}; ?> 
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type()) :
			?>
			<div class="entry-meta">
				<?php
				bapnewheroes_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<div class="ar-author">
			<p>Auteur :
			<?php the_author(); ?>
			</p>
		</div>
		<img src="https://zupimages.net/up/22/01/xxea.png" alt="">
	</header><!-- .entry-header -->
	<a class="ar-link-article" href="<?php echo esc_url( get_permalink() ) ?>"></a>
</article><!-- #post-<?php the_ID(); ?> -->
