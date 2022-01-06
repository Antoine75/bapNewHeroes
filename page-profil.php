<?php
/*
Template name: Profil
*/

get_header( 'profil' );
?>

<section class="profil-wrapper">
    
    <h2 class="profil-text">Mes Informations</h2>

    <div class="profil-item">
        <h3 class="profil-item-title">Données Utilisateur</h3>
        <span class="profil-info-item">Nom : </span>
        <span class="profil-info-item">Prénom : </span>
        <span class="profil-info-item">Date de Naissance : </span>
        <span class="profil-info-item">E-Mail : </span>
        <span class="profil-info-item">Mot de Passe : </span>
        <span class="profil-info-item">Sport : </span>
        <button type="button" class="btn btn-outline-warning">Se déconnecter</button>
    </div>

    <div class="profil-item">
    <h3 class="profil-item-title">Description</h3>
        <p class="profil-description"> LOREM IPSUM</p>
    </div>

    <div class="profil-item">
        <h3 class="profil-item-title">Liste de mes Blogs</h3>
        <div class="article-item">

        </div>
        <a class="btn btn-primary ar-add-blog" href="http://localhost/merge-test/wordpress/wp-admin/post-new.php" target="_blank" role="button">+</a>
    </div>
</section>