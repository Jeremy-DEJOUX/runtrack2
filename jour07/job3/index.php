<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="index.php" method="post">
        <label for="prenom">Votre Prénom:</label>
    <br/>
        <input type="text" name="prenom" id="prenom">
        <label for="valider"></label>
        <input type="submit" name="valider">
        <label for="reset"></label>
        <input type="submit" name="reset" value="reset">
    </form><br/>

    <?php

    if (isset($_POST['reset'])) {//si le bouton $post = reset alors les prénoms seront réinitialiser.
        $_SESSION['prenom']=""; // ""=valeur nulle qui sera executé si l'on clique sur reset.
    }
       if (isset($_POST) && isset($_POST['prenom'])) { //tant que POST et prénom de POST existent alors :
           $_SESSION['prenom'] = $_SESSION['prenom']. "<br/>".$_POST['prenom']; // le prénom tapé sera affiché avec un saut de ligne
       }
       echo $_SESSION['prenom'];
       ?>
</body>
</html>
