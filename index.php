<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 6 Exercice 2</title>
  </head>
  <body>
    <?php
      if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])) // On a le nom et le prénom
      {
      	echo $_GET['prenom'].' '. $_GET['nom'].' '.$_GET['age'];
      }
      else // Il manque des paramètres, on avertit le visiteur
      {
      	echo 'Il y a une erreur !';
      }
    ?>
  </body>
</html>
