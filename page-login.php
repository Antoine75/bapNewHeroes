<?php
/*
Template name: Login
*/


if (is_user_logged_in() == TRUE){
    header('Location: http://localhost/NewHeroes/wordpress/profil/');
} else {
 get_header( 'login' );
?>

<?php
get_sidebar();
?>

<a href="http://localhost/NewHeroes/wordpress/inscriptions/">Créer un compte</a>

<?php };