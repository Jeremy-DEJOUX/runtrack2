<?php
session_start();

$bdd = mysqli_connect('localhost','root','','livreor'); // je co la bdd

if (isset($_SESSION['id'])) {
    $getid = intval($_SESSION['id']);
    $req_user = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id = $getid");
    $user_info = mysqli_fetch_assoc($req_user);

    if (isset($_POST['register'])) { // si on clique sur register alors 
    // je déclare mes variables et les sécurisent 
        $error_log = null;
        $n_login=($_POST['login']);
        $n_login = mysqli_real_escape_string($bdd, htmlspecialchars(trim($n_login)));
        $n_password = ($_POST['password']);
        $n_password = mysqli_real_escape_string($bdd, htmlspecialchars(trim($n_password)));
        $confirm_password = ($_POST['confirm_password']);
        $confirm_password = mysqli_real_escape_string($bdd, htmlspecialchars(trim($confirm_password)));

        if (!empty($n_login) AND !empty($n_password) AND !empty($confirm_password)) { // si mes champs ne sont pas vides 
            $query = mysqli_query($bdd, "SELECT id FROM utilisateurs WHERE login = '$n_login'"); // on créée un tableau query qui va receuillir la requête
            $count = mysqli_num_rows($query); // on inspecte le tableau query avec mysqli_num_rows

            if (!$count) { 
                $cryptedpass = password_hash($n_password, PASSWORD_BCRYPT);
                $mon_id = $_SESSION['id'];
                $insert = mysqli_query($bdd, "UPDATE utilisateurs SET login = '$n_login', password = '$cryptedpass' WHERE id = '$mon_id'");
                
                if ($insert) {
                    $_SESSION['user_info'] = $n_login;
                    header("Location: profil.php");
                }
                else{
                    $error_log = "ERROR";
                }
            }
            else{
                $error_log = "Login existant";
            }
        }
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
            <li><a href="livre-or.php"><i class="fas fa-shield-alt"></i>Livre d'or</a></li>

            <?php
            if (isset ($_SESSION['login'])) {
               echo'<li><a href="commentaire.php"><i class="fas fa-shield-alt"></i>Commentaire</a></li>';
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
        Modifiez votre profil : 
            <?php echo $_SESSION['user_info']; ?>  
         <div id="deconnexion"> <a href="deconnexion.php"> Déconnexion</a> </div> 
       </div> 
      

    <section>

        <div class="form_profil">
        <form method="post" action="">
       
        <label for="login">Nouvel identifiant:</label>
        <input type="text"  name="login" placeholder="nouvel identifiant" required>

        <label for="password">Nouveau mot de passe:</label>
        <input type="password" name="password" placeholder="nouveau mot de passe" required>

        <label for="confirm_password">Confirmation du nouveau mot de passe:</label>
        <input type="password" name="confirm_password" placeholder="*********" required>

        <input type="submit" name="register">
        
        </form>
        </div>

    </section>
</body>
</html>
