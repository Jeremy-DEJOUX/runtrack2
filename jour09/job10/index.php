<?php

$base_de_donnes = mysqli_connect('localhost', 'root', '', 'jour08');
$querry = mysqli_query($base_de_donnes, "SELECT * FROM `salles` ORDER BY `capacite` ASC");
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
                <th>Nom</th>
                <th>Id_Etage</th>
                <th>Capacite</th>
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