<?php

$base_de_donnes = mysqli_connect('localhost', 'root', '', 'jour08');
$querry = mysqli_query($base_de_donnes, "SELECT COUNT(*) FROM `etudiants`");
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
                <th>nb_etudiant</th>
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