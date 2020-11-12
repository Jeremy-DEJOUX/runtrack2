<?php

$base_de_donnes = mysqli_connect('localhost', 'root', '', 'jour08');
$querry = mysqli_query($base_de_donnes, 'SELECT nom, capacite FROM `salles`');
$id = mysqli_fetch_all($querry);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
</head>
<body>
    <table>
        <tbody>
            <tr>
                <td>Nom</td>
                <td>Capacité</td>
            </tr>
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