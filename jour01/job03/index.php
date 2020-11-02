<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>


  <?php
    $bool = true;
    $entier = 24;
    $txt = "Hello Wolrd";
    $virgul = 24.5;

   ?>


  <body>
<!-- =====================HEADER=================== -->
    <header>
    </header>


<!-- =======================MAIN========================= -->
    <main>
      <table>
        <thead>
          <td>Type</td>
          <td>Nom</td>
          <td>Valeur</td>
        </thead>

        <tr>
          <td>Booléen</td>
          <td>bool</td>
          <td> <?php echo $bool; ?> </td>
        </tr>

        <tr>
          <td>Entier</td>
          <td>entier</td>
          <td> <?php echo $entier; ?></td>
        </tr>

        <tr>
          <td>Chaîne de caractères</td>
          <td>txt</td>
          <td><?php echo $txt; ?></td>
        </tr>

        <tr>
          <td>nombre à virgule flottante</td>
          <td>virgul</td>
          <td><?php echo $virgul ?></td>
        </tr>
      </table>
    </main>


<!-- ==========================FOOTER========================== -->
    <footer>

    </footer>
  </body>

</html>

<!-- ============================PHP============================== -->
