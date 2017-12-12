<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 6 Exercice 2</title>
  </head>
  <body>
    <?php
      if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age']))
      {
      	echo $_GET['prenom'].' '. $_GET['nom'].' '.$_GET['age'];
      }
      else 
      {
      	echo 'Il y a une erreur !';
      }
    ?>
  </body>
</html>
