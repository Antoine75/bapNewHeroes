<?php
/*
Template name: Profil
 */
global $wpdb;
get_header();
?>
<section class="profil-wrapper">
    <h2 class="profil-text">Mes Informations</h2>
    <?php
    ?>
    <div class="profil-item">
    <?php
    ?>
        <h3 class="profil-item-title">Données Utilisateur</h3>
        <span class="profil-info-item">Nom : <? $firstname ?></span>
        <span class="profil-info-item">Pseudo : <? $username ?></span>
        <span class="profil-info-item">Date de Naissance : <? $birth ?></span>
        <span class="profil-info-item">E-Mail : <? $password ?></span>
        <span class="profil-info-item">Mot de Passe : <? $sport ?></span>
        <span class="profil-info-item">Sport : <? $description ?></span>
        <?php get_sidebar() ?>

    </div>

    <div class="profil-item">
    <h3 class="profil-item-title">Description</h3>
        <p class="profil-description"></p>
    </div>

    <div class="profil-item">
    <h3 class="profil-item-title">Liste de mes Blogs</h3>
    <a class="btn btn-primary ar-add-blog" href="http://localhost/NewHeroes/wordpress/wp-admin/post-new.php" role="button">+</a>
    </div>
</section>
        