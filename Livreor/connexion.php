<?php
session_start();
$bdd = mysqli_connect('localhost', 'root', '', 'livreor');//je connecte la bdd

if (isset($_POST['connect'])) { // si on appuie sur connect
    // jdéclare mes variables
    $login = ($_POST['login']); 
    $password = ($_POST['password']);
    $error_log = 'Login ou mot de passe incorrect!';
    $_SESSION['user_info'] = $login;
    $login = mysqli_real_escape_string($bdd, htmlspecialchars(trim($login))); //On sécurise le login
    $password = mysqli_real_escape_string($bdd, htmlspecialchars(trim($password))); //On sécurise le mdp

    if (!empty($login) && !empty($password)) { //si les champs ne sont pas vides
        $verification = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login ='$login'");// selectionne les mots de passes d'utilisateurs ou le mdp correspond au mdp crypté
        $count = mysqli_num_rows($verification); // $count va regrouper le resultat de l'inspection du tableau verification effectuée par mysqli_num_rows

        if($count){
        $result = mysqli_fetch_assoc($verification); //$result va récupérer le résultat du fetch de $verification entre la bdd et la requete

        if (password_verify($password, $result['password'])) { // $password c celui qu'on entre $result c la bdd 
                                                                // result = key =>value
                                                               // dans result key c'est le password la value c'est [0]=MDP crypté;
                                                                // $result ['password[0]']                                                   
    
                                                                
        $_SESSION['id'] = $result['id']; // la session aura l'id de la query l.14 ??????????
        $_SESSION['login'] = $result['login']; // le login qu'aura la session ??????????????
        


        header('Location: profil.php');
        }
    }
}
    else {
        $_SESSION['isconnected'] = false;
        echo $error_log;
    }
}
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
               echo'<li><a href="profil.php"><i class="fas fa-shield-alt"></i>Profil</a></li>
            <li><a href="commentaire.php"><i class="fas fa-shield-alt"></i>Commentaire</a></li>';
            }
            else {
                echo'
                <li><a href="inscription.php"><i class="fas fa-shield-alt"></i>Inscription</a></li>';
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
            <?php if (isset ($_SESSION['login'])) {
                echo "<p> Connexion : 
                 ". $_SESSION['user_info'] ."
                 </p>";
            } ?>
      
        <div id="deconnexion"> <a href="deconnexion.php"> Déconnexion</a> </div> 
       </div> 

        <div class="form_connexion">     

    <form action="connexion.php" method="post">

        <label for="login">Identifiant</label>
        <input type="text" id="login" name="login" placeholder="Votre login" required>
                
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>


        <input type="submit" name="connect">
        </form>
        </div>
        </div>
    </form>            
    </section>
</main>