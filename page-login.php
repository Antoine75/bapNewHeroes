<?php
/*
Template name: Login
*/


if (is_user_logged_in() == TRUE){
    header('Location: http://localhost/NewHeroes/wordpress/profil/');
} else {
 get_header( 'login' );
?>
<div class="error">
    <img src="https://zupimages.net/up/22/02/aczk.png">
    <h2 class="ar-error-msg">Site Desktop en maintenance, Version mobile disponible</h2>
</div>


<div class="ar-conn">
<h1 class="ar-h1-connexion">Connexion</h1>

<?php

get_sidebar();
?>
<div class="ar-inscription ar-insc-connex">
    <p>Vous n'êtes pas membre ?</p>
    <a class="ar-creer-compte" href="http://localhost/NewHeroes/wordpress/inscriptions/">Créer un compte</a>
</div>
</div>

<?php };