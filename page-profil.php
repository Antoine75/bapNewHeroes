<?php
/*
Template name: Profil
 */
get_header( 'profil' );
?>
<section class="profil-wrapper">
    <h2 class="profil-text">Mes Informations</h2>
    <?php
    ?>
    <div class="profil-item">
    <?php
    $user_id = get_current_user_id(); 
	$user_info = get_userdata($user_id);

    ?>
        <h3 class="profil-item-title">Données Utilisateur</h3>
        <span class="profil-info-item">Pseudo : <?php echo $user_info->user_nicename; ?></span>
        <span class="profil-info-item">Rôle : <?php if($user_info->administrator == TRUE){ echo 'Administrateur'; } else{ echo 'Membre'; }; ?></span>
        <span class="profil-info-item">E-Mail : <?php echo $user_info->user_email ?></span>
        <span class="profil-info-item">Mot de Passe : ******* </span>
        <a class="btn btn-primary ar-edit-profil" href="http://localhost/NewHeroes/wordpress/wp-admin/profile.php" role="button">Edit</a>
        <?php get_sidebar() ?>

    </div>

    <div class="profil-item">
    <h3 class="profil-item-title">Ecrire un nouvel Article</h3>
    <a class="btn btn-primary ar-add-blog" href="http://localhost/NewHeroes/wordpress/wp-admin/post-new.php" role="button">+</a>
    </div>
</section>
        