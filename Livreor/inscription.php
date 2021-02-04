<?php
$bdd = mysqli_connect('localhost', 'root', '', 'livreor'); //connexion à la BDD
if (isset($_POST['register'])) { //si on clique sur register alors je déclare mes variables
    $login = ($_POST['login']); //POST = ce qui a été tapé par l'user
    $password= ($_POST['password']); 
    $confirm_password=($_POST['confirm_password']);

    // $error_log = 'Login ou mot de passe incorrect!';
    $error_log = null;

    //mysqli_query($bdd,$requete)
    if ($confirm_password == $password && !empty($login) && !empty($password)){ //condition si password = confirm password et les champs login et password ne sont pas vide
        //on sécurise chaques variables 
        $secured_login = mysqli_real_escape_string($bdd, htmlspecialchars(trim($login)));
        $secured_password = mysqli_real_escape_string($bdd, htmlspecialchars(trim($password)));
        $secured_confirm_password =  mysqli_real_escape_string($bdd, htmlspecialchars(trim($confirm_password)));
        // cryptage du mdp
        $cryptedpass = password_hash($secured_password, PASSWORD_BCRYPT);
        

        $verification = mysqli_query($bdd, "SELECT login FROM utilisateurs WHERE login ='$secured_login' "); //si $ verification est false alors
        if (mysqli_num_rows($verification)) { // on inspecte le tableau verification avec mysqlinumrows
            echo "l'identifiant est déjà utilisé, veuillez en choisir un autre";
        }

        else {             // si $verification est true
            $query = mysqli_query($bdd, "INSERT INTO utilisateurs (login, password) VALUES ('$secured_login','$cryptedpass')"); // je créer une requête qui va insérer les infos dans la bdd
            // mysqli_query($bdd,$query);
            header('Location: connexion.php');
            // exit();s
        }
    }
    // else {
    //     echo $error_log;
    // }
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
<div class="wrapper" id="body_inscription">
    
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
                echo'<li><a href="connexion.php"><i class="fas fa-shield-alt"></i>Connexion</a></li>';
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

    <div class="main_content" id="main_inscription">

        <div class="header">Inscription</div>  
        <?php if (isset ($_SESSION['login'])) {
                echo "<p> Inscription : 
                 ". $_SESSION['user_info'] ."
                 </p>";} ?>

            <section class="form_inscription">
    
                <form action="inscription.php" method="post">

                    <label for="login">Identifiant</label>
                    <input type="text" id="login" name="login" placeholder="Votre login" required>

                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>

                    <label for="confirm_password">Confirmation du mot de passe</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="confirmez votre mot de passe" required>

                    <input type="submit" id="bouton_inscription" name="register">
                    
                </form>

            </section>

        </div>
    </div>
    
</body>
</html>