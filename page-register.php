<?php
/*
Template name: Register
*/

get_header( 'login' );
?>
<div class="error">
    <img src="https://zupimages.net/up/22/01/386o.png">
    <h2 class="ar-error-msg">Site Desktop en maintenance, Version mobile disponible</h2>
</div>
<div class="ar-conn ar-insc">
    <h1 class="ar-h1-inscription">Inscription</h1>

<?php
echo do_shortcode('[forminator_form id="128"]');
?>
<div class="ar-inscription">
    <a class="ar-creer-compte" href="http://localhost/NewHeroes/wordpress/connexion/">J'ai déjà un compte</a>
</div>
</div>
