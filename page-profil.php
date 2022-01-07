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
        <form method="post" action="page-profile.php">
            <button type="submit" class="btn btn-outline-warning" name="disconnect">Se Déconnecter</button>
        </form>
        <?php 
            function formSubmit(){
                if(isset($_POST['disconnect']))
                {
                    logOut();
                }
            }
        ?>
    </div>

    <div class="profil-item">
    <h3 class="profil-item-title">Description</h3>
        <p class="profil-description"></p>
    </div>

    <div class="profil-item">
    <h3 class="profil-item-title">Liste de mes Blogs</h3>
    </div>
</section>