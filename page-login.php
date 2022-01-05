<?php
customRedirector(is_user_logged_in(), 'http://new-heroes.local/profil/');
/*
Template name: Login
 */
get_header();
?>
<section class="login-wrapper">
    <div class="form-login-wrapper">
        <h2 class="connexion">Connexion</h2>
        <div class="user-input-form">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse E-Mail</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Adresse E-Mail">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mot de Passe</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Mot de Passe">
            </div>

            <a href="#" class="password-failsafe">Mot de passe ou identifiant oubliés ?</a>
        </div>
        <div class="user-control">
            <div class="form-check">

            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">Rester Connecté</label>

            </div>

            <button type="button" class="btn btn-warning test" >Se connecter</button>
            <span class="warning-membership">Vous n'êtes pas membre ?</span>
            <button type="button" class="btn btn-outline-warning border"><a href="http://new-heroes.local/Register/" class="link">Créer un compte</a></button>
        </div>
    </div>
</section>

<?php

/*
        if(is_user_logged_in())
        {
            var_dump($_COOKIE);
        } else{
            echo '<p>test</p>';
        } 
*/