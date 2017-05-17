<?php require_once('fonction_php.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php/fonctions</title>
  </head>
  <body>
            <h1>Page html en php pour les includes().</h1>


          <h2>Exo 1</h2>
            <?php
            $nombreChoisis = 6 ;
            multipliParNeuf($nombreChoisis); ?>
          <h2>Exo 2</h2>
            <?php
              $identites = ['nom' => 'Rodriguez','prenom' => 'Fabien','age' => 32];
                afficheContent($identites); ?>
          <h2>Exo 3</h2>
            <?php
              $tabTest = ['a', 'b', 'd', 'e'];
              $c ='c';
               ajoutLigneMilieuTableau($tabTest, $c);
             ?>
          <h2>Exo 4</h2>
            <?php
              $str1 = 'bonjour';
              $str2 = 'BONJOUR';
              $str3 = 'BONjour';
              $str4 = 'BoNjOuR';
              majMin($str1);
              majMin($str2);
              majMin($str3);
              majMin($str4);
             ?>
          <h2>Exo 5</h2>
            <?php
              $abrevs = ['HTML' => 'HyperText Markeup Language', 'PHP' => 'Hypertext PreProcessor', 'XML' => 'eXtended Markeup Language', 'CSS' => 'Cascading Style Sheets'];
              definitionAbrev($abrevs);
              echo "<br/>";
              echo "<br/>";
              echo "<br/>";
             ?>

  </body>
</html>
