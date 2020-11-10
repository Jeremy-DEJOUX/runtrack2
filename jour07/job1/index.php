<?php
        session_start();
        if (isset($_POST['reset'])) { // si le bouton a pour valeur reset alors on termine la session.
            unset($_SESSION['nbvisites']);
        }
        if (!isset($_SESSION['nbvisites'])) { // on vérifie que la variable existe et qu'elle continue d'exister ici on exprime le nombre de visites.
            $_SESSION['nbvisites'] = 1;
        }
        else {
            $_SESSION['nbvisites']++;
        }

        echo "La page est visitée"." ".$_SESSION['nbvisites']." "."fois";


        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="index.php" method="post">
        <input type="submit" name="reset"/>
        </form>
</body>
</html>
