<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <title>Inscription</title>
</head>
<body>
<!-- DEBUT DU HEADER -->
<div class="wrapper">
    <div class="sidebar">

        <h2>Double Bouclier</h2>

        <img src="image/boubou.png" alt="">

        <ul>
            <li><a href="livre-or.php"><i class="fas fa-shield-alt"></i>Livre d'or</a></li>
            <?php
            if (isset ($_SESSION['login'])) {
               echo'<li><a href="profil.php"><i class="fas fa-shield-alt"></i>Profil</a></li>
            <li><a href="commentaire.php"><i class="fas fa-shield-alt"></i>Commentaire</a></li>';
            }
            else {
                echo'<li><a href="inscription.php"><i class="fas fa-shield-alt"></i>Inscription</a></li>
                <li><a href="connexion.php"><i class="fas fa-shield-alt"></i>Connexion</a></li>';
                }     
            ?>
        </ul> 

        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <!-- FIN DU HEADER -->

    <div class="main_content">

        <div class="header">Merci d'avoir participer à la soirée d'inauguration de la boutique DoubleBouclier  <?php if (isset ($_SESSION['login'])) {
                echo "<p> Connexion : 
                 ". $_SESSION['user_info'] ."
                 </p>";
            } ?> ! </div>  

        <div class="info">
          <div>Vous venez de participer à la soirée d'inauguration de notre boutique, c'est un évènement sur lequel nous avons travaillé depuis des années et il est primordial pour nous de receuillir vos retours concernant cette soirée. </div>
          <div>Sur cette page, vous aurez l'occasion de pouvoir déposer votre avis quant à cette soirée dans notre livre d'or</div>
          <div>L'ensemble de l'équipe DoubleBouclier vous remercie de nous avoir accordé votre temps et d'avoir pris le temps de déposer vos avis qui constitueront une base de données plus qu'utile pour nous ! Nous espèrons vivement vous revoir dans notre boutique. </div>
        </div>

    </div>
</div>