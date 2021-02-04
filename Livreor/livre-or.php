

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
    <title>Profil</title>
</head>
<body>
<!-- DEBUT DU HEADER -->
<div class="wrapper">
    <div class="sidebar">

        <h2>Double Bouclier</h2>

        <img src="image/boubou.png" alt="">

        <ul>
            <li><a href="index.php"><i class="fas fa-shield-alt"></i>Index</a></li>

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

        <div class="header">Livre d'or DoubleBouclier</div>  

<?php
$bdd = mysqli_connect('localhost', 'root', '', 'livreor');// je me connecte a ma bdd
$sql_recuperation = mysqli_query($bdd,"SELECT u.login, c.date, c.commentaire FROM utilisateurs AS u 
INNER JOIN commentaires AS c WHERE c.id_utilisateur = u.id ORDER BY c.date DESC");// je récupère les données qui m'interesse


while($commentaire_display = mysqli_fetch_assoc($sql_recuperation)){//je les imprime depuis un tableau 
    echo "<table style=' border-collapse: collapse';><tr><th class='th_pseudo'>". htmlspecialchars($commentaire_display['login'])
     . "</th></tr><tr><td class='td_date'>" . htmlspecialchars($commentaire_display['date'])
      . "</td><td class='td_commentaire'>" . htmlspecialchars($commentaire_display['commentaire']) . "</td></tr></table>";
}
?>