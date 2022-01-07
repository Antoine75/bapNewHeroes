<?php
/*
Template name: Register
*/

get_header( 'login' );
?>
    <?php
echo do_shortcode('[forminator_form id="128"]');
?>
<!-- <section class="register-wrapper">
    <div class="form-register-wrapper">
        <h2 class="connexion">Créer un Compte</h2>
        <form class="user-input-form" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse E-Mail</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Adresse E-Mail">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom d'Utilisateur</label>
                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Nom d'utilisateur">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mot de Passe</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Mot de passe">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Confirmez le mote de passe</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Confirmez le mot de passe">
            </div>
        </form>
        <div class="user-control">
            <button type="button" class="btn btn-outline-warning border" id="account">Créer un compte</button>
        </div>
    </div>
</section> -->