<?php
session_start();
?>
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
            <li><a href="index.php"><i class="fas fa-shield-alt"></i>Index</a></li>
            <li><a href="livre-or.php"><i class="fas fa-shield-alt"></i>Livre d'or</a></li>

            <?php
            if (isset ($_SESSION['login'])) {
               echo'<li><a href="profil.php"><i class="fas fa-shield-alt"></i>Profil</a></li>';
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

    <div class="header">
       <p> Postez votre commentaire 
       <?php echo $_SESSION['user_info']; ?>         <div id="deconnexion"> <a href="deconnexion.php"> Déconnexion</a> </div> 
       </div> 

    <main>
        <div class="form_commentaire">
      
            <form action="" method="post" class="form_edit">
            <fieldset>            
            <div class="comment_label">
        <label for="commentaire"><b>Commentaire:</b></label>
            </div>
            <div class="comment">
            <textarea rows="15" cols="70" name="commentaire" id="text-commentaire" placeholder="commentaire"></textarea>
            <input type="submit" name="submit" value="Poster">
            </div>
            </fieldset>
        </form>
        </div>
    <?php

    $bdd = mysqli_connect('localhost', 'root', '', 'livreor');// je me connecte a ma bdd

    if(isset($_POST['submit']))
    { //si on appuie sur envoyer, $_POST prend un nouveau prénom dans son tableau 

        $commentaire = $_POST['commentaire'];
        $commentaire = mysqli_real_escape_string($bdd,trim($commentaire));

        echo $_SESSION['id']; 
        $mon_id = $_SESSION['id'];
        $sql_commentaire = "INSERT INTO commentaires(commentaire, id_utilisateur, date) VALUES('$commentaire', '$mon_id', NOW())"; //NOW=heure minute seconde exact
        mysqli_query($bdd, $sql_commentaire); 
        echo "Votre commentaire à bien été envoyé";
    }

    ?>
    </main>

    
</body>
</html>