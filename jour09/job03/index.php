<?php

$base_de_donnes = mysqli_connect('localhost', 'root', '', 'jour08');
$querry = mysqli_query($base_de_donnes, "SELECT * FROM `etudiants` WHERE `sexe` = 'Femme'");
$id = mysqli_fetch_all($querry);
// var_dump($id)

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach ($id as $key){
                    echo "<tr>";
                    foreach ($key as $value){
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>