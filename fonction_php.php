<?php
function multipliParNeuf(&$nombre){
  $nombre *= 9;
  echo 'Resultat = '.$nombre;
  echo "<br/>";
  echo "<br/>";
}
?>

<?php
function afficheContent($tableau){
  echo 'Valeurs du tableau : '.'<br/>';
  foreach ($tableau as $key => $value) {
    echo $tableau[$key].'<br/>';
  }
  echo "<br/>";
  echo "<br/>";
}
 ?>

 <?php
 function ajoutLigneMilieuTableau($tableau, $c){
   var_dump($tableau);
   $midTab = (sizeof($tableau)/2);
   var_dump($midTab);
   foreach ($tableau as $key => $values) {
     if ($key < $midTab) {
       $nouveauTab [] = $values;
     }
     if ($key == $midTab) {
       $nouveauTab[$midTab] = $c;
     }
     if ($key >= $midTab) {
       array_push($nouveauTab, $values);
     }
   }
   var_dump($nouveauTab);
 } ?>

 <?php
 function majMin($str){
   echo 'Avant : '.$str;
   echo "<br/>";
   $str = strtolower($str);
   $str = ucfirst($str);
   echo 'Apres : '.$str;
   echo "<br/>";
 } ?>

 <?php
 function definitionAbrev($tableau){
   foreach ($tableau as $key => $value) {
     echo 'L\'abreviation : '.$key.' signifie : '.$value.'<br/>';
   }
 } ?>
