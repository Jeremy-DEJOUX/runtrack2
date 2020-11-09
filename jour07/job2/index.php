<?php
if (isset($_POST['reset'])) { // commande qui permet de configurer le bouton pour réinitialiser.
    $_COOKIE['visite']=0;
}

if (isset($_COOKIE['visite'])) {//tant qu'il y a des visites dans $_COOKIE je veux qu'elles soient affichées.
    setcookie('visite', $_COOKIE['visite']+1);

    echo 'Le site a été visité', $_COOKIE['visite'] +1,'fois';
}
else {
    setcookie('visite', $_COOKIE['visite']+1);

    echo 'Le site a été visité', $_COOKIE['visite'] +1,'fois';
}
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
