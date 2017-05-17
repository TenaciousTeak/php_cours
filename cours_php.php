<?php
//Exercie 0
$fruit = 'banane';
echo $fruit.'</br>';
echo 'Ceci est une '.$fruit.'</br>';
$age = 28;
echo 'Age :'.$age.'</br>';
$age++;
echo 'Age :'.$age.'</br>';
$tabFruit = ['pomme', 'peche', 'poire', 'abricot'];
print_r($tabFruit);
var_dump ($tabFruit);
?>


<?php
//Exercice 1
$nombre = rand (1, 100);
if ($nombre % 3 == 0 && $nombre % 5 == 0) {
  echo $nombre.': est un multiple de 3 et de 5.'.'</br>';
}
else {
  echo $nombre.': n\'est pas multiple de 3 et de 5.'.'</br>';
}
 ?>


<?php
//Exercice 2
$age = rand (0,80);
$sexe = 'F';
if ($age >= 21 && $age <= 40 && $sexe = 'F' ) {
  echo "Age : ".$age.'</br>';
  echo "Sexe: ".$sexe.'</br>';
  echo " True";
  echo "</br>";
  echo "</br>";
}
else {
  echo "Age : ".$age.'</br>';
  echo "Sexe: ".$sexe.'</br>';
  echo " False";
  echo "</br>";
  echo "</br>";
}
 ?>

<?php
//Exercice 3
$boolean = true;
$i = 1;

while ($boolean) {
  $nbRandom = rand(0,1000);
  $nbRandom2 = rand(0,1000);
  $nbRandom3 = rand(0,1000);
  $i++;
  if ($nbRandom % 2 == 0 && $nbRandom2 % 2 !=0 && $nbRandom3 % 2 != 0) {
    $boolean = false;
    echo 'Il a fallut '.$i.' coups pour obtenir la combinaison: '.$nbRandom.' '.$nbRandom2.' '.$nbRandom3.'.';
  }
}
echo "</br>";
echo "</br>";
echo "</br>";
?>

<?php
//Exercice 4
$personnes = [
  ['nom' => 'Louarn','prenom' => 'Lionnel','Age' => 30,'sexe' => 'M'],
  ['nom' => 'Hermite','prenom' => 'Steven','Age' => 25,'sexe' => 'M'],
  ['nom' => 'Caron','prenom' => 'Ivana','Age' => 32,'sexe' => 'F'],
  ['nom' => 'Halim','prenom' => 'Nabil','Age' => 27,'sexe' => 'M'],
  ['nom' => 'Crapez','prenom' => 'Phillipe','Age' => 40,'sexe' => 'M'],
  ['nom' => 'Bouloumie','prenom' => 'Leo','Age' => 20,'sexe' => 'M']
];
for ($i=0; $i <sizeof($personnes) ; $i++) {
  echo $personnes[$i]['nom'].'</br>';
  echo $personnes[$i]['prenom'].'</br>';
  echo $personnes[$i]['Age'].'</br>';
  echo $personnes[$i]['sexe'].'</br>';
  echo "</br>";

};
foreach ($personnes as $key => $value) {
  echo 'Indice : '.$key.'</br>'.'Valeur'.$personnes.'<br/>';
}
?>

<?php
//creation d'une fonction
function nomDeLaFonction ($param1, $param2){
    //Bloc d'instruction
}
//Exemple
function multiplierNombres($a, $b){
  $produit = $a * $b;
  echo "Le produit de ".$a.' et de '.$b.' est : '.$produit;
}
multiplierNombres(5,6);
echo "</br>";
?>
