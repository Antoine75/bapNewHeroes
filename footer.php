<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bapnewheroes
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="ar-footer-grid">
			<form class="ar-form" >
    			<label for="email">Abonnez-vous à la newletter </label>
    			<input class="ar-email" type="email" name="email" id="email" required>
				<input class="ar-submit" type="submit" value="Envoyer">
			</form>
			<div class="ar-follow">
				<p>Suivez-nous</p>
				<div class="ar-footer-img">
					<i class="fab fa-instagram"></i>
					<i class="fab fa-facebook-square"></i>
					<i class="fab fa-linkedin"></i>
				</div>
			</div>
		</div>
		<div class="ar-footer-mention">
		<p>© 2021 | New Heroes - Mentions légales</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
