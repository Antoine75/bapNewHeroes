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

get_header();
?>

	<main id="primary" class="site-main">
		<div class="ar-list">
			<h2>Nos services</h2>
			<div class="ar-card ar-competences">
				<p>Suivi de compétences</p>
				<a class="ar-link-card" href="#"></a>
			</div>
			<div class="ar-card ar-partenaires">
				<p>partenaires</p>
				<a class="ar-link-card" href="http://localhost/merge-test/wordpress/partenaires/"></a>
			</div>
			<div class="ar-card ar-actus">
				<p>actualités</p>
				<a class="ar-link-card" href="#"></a>
			</div>
		</div>



	</main><!-- #main -->

<?php
get_footer();

