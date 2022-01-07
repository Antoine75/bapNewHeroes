<?php
customRedirector(is_user_logged_in(), 'http://new-heroes.local/profil/');
/*
Template name: Login
 */
get_header();
?>
<h2 class="connexion">Connexion</h2>
    <?php
        echo do_shortcode('[forminator_form id="42"]');
    ?>

<?php

// $login = $_POST['login'];

// function test(){
//     if(isset($login))
//     {
//         logIn();
//     }
// };

/*
        if(is_user_logged_in())
        {
            var_dump($_COOKIE);
        } else{
            echo '<p>test</p>';
        } 
*/