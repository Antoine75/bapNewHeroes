<?php
/*
Template name: Partenaire
 */

get_header( 'partenaire' );
?>

	<main id="primary" class="site-main">
		<h2 class="ar-title-section">Nos partenaires</h2>
		<div class="ar-part-grid">
			<div class="ar-part-card ar-bg-grey">
				<img src="https://zupimages.net/up/22/01/yeij.png">
				<div>
					<h3>Nom du partenaire</h3>
					<p>Courte description ...</p>
				</div>
				<a class="btn btn-primary" href="#" role="button">En savoir plus</a>
			</div>

			<div class="ar-part-card ar-bg-green">
				<img src="https://zupimages.net/up/22/01/sf3x.png">
				<div>
					<h3>Nom du partenaire</h3>
					<p>Courte description ...</p>
				</div>
				<a class="btn btn-primary" href="#" role="button">En savoir plus</a>
			</div>
			
			<div class="ar-part-card ar-bg-grey">
				<img src="https://zupimages.net/up/22/01/bo90.png">
				<div>
					<h3>Nom du partenaire</h3>
					<p>Courte description ...</p>
				</div>
				<a class="btn btn-primary" href="#" role="button">En savoir plus</a>
			</div>
			
			<div class="ar-part-card ar-bg-green">
				<img src="https://zupimages.net/up/22/01/n27z.png">
				<div>
					<h3>Nom du partenaire</h3>
					<p>Courte description ...</p>
				</div>
				<a class="btn btn-primary" href="#" role="button">En savoir plus</a>
			</div>
			
			<div class="ar-part-card ar-bg-grey">
				<img src="https://zupimages.net/up/22/01/yeij.png">
				<div>
					<h3>Nom du partenaire</h3>
					<p>Courte description ...</p>
				</div>
				<a class="btn btn-primary" href="#" role="button">En savoir plus</a>
			</div>
			
			<div class="ar-part-card ar-bg-green">
				<img src="https://zupimages.net/up/22/01/sf3x.png">
				<div>
					<h3>Nom du partenaire</h3>
					<p>Courte description ...</p>
				</div>
				<a class="btn btn-primary" href="#" role="button">En savoir plus</a>
			</div>
			
			<div class="ar-part-card ar-bg-grey">
				<img src="https://zupimages.net/up/22/01/bo90.png">
				<div>
					<h3>Nom du partenaire</h3>
					<p>Courte description ...</p>
				</div>
				<a class="btn btn-primary" href="#" role="button">En savoir plus</a>
			</div>
			
			<div class="ar-part-card ar-bg-green">
				<img src="https://zupimages.net/up/22/01/n27z.png">
				<div>
					<h3>Nom du partenaire</h3>
					<p>Courte description ...</p>
				</div>
				<a class="btn btn-primary" href="#" role="button">En savoir plus</a>
			</div>
			
		</div>
		

	</main><!-- #main -->

<?php
Forminator_API::initialize();
echo do_shortcode('[forminator_form id="57"]');

get_footer();
