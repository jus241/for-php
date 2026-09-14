

<?php
//nembre dans lordre

// for($i = 1; $i <=10; $i++){
//  echo $i;
// }

//Nembre decroissante 
// for ($i =9 ; $i >=1; $i--)
//  echo $i;

// $number = $_POST['number'];
// for($i = 0 ; $i <= 10 ; $i++){
//     echo "{$number} x {$i} =" . $number * $i ."<br>";
// }

// $table = $_POST['number'];
// for($i = 0 ; $i <= 10 ; $i++){
//   echo "{$table} x {$i} =" . $table * $i ."<br>";
// }

// for($i = 1 ; $i <= 20 ; $i++){
//     if($i % 2 == 0){
//         echo $i . "";
//     }
// }





// echo"Les nombres pairs" ." <br>";

// for($i = 1; $i <=40; $i++){
//     if($i % 2 == 0){
//         echo $i ."<br>";
//     }
// }

// // echo"Les nombres impairs " ."<br>"; 

// for($i = 1; $i <=40; $i++){
//     if($i % 2 !== 0){
//         echo $i ."<br>";
//     }
// }

// for ($i = 1; $i <= 40; $i++) {
//     // Si le nombre est pair
//     if ($i % 2 == 0) {
//         echo $i . " est pair<br>";
//     } 
//     // Sinon (si le reste n'est pas 0, c'est obligatoirement impair)
//     else {
//         echo $i . " est impair<br>";
//     }
// }

// echo "Table de multiplication <br>";
// $table = $_POST['number'];

// for( $i =1 ; $i <= 10; $i++){
//     echo $table. " x " .$i ."=" .$table * $i ."<br>";
// }

$table = 1;

// for ($i =1 ; $i <= 10; $table++) {
//     for ($j = 1; $j <= 10; $j++) {
//         echo $table . " x " . $j . " = " . $table * $j . "<br>";
//     }
// }


// for($i = 1; $i <= 10; $i++){
//     if($i % 2 !==0){
//         echo $i ." est pair <br>";
//     }else{
//         echo $i ." est impair <br>";
//     }
// }



// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo  $i ." il est divisible par 3 et 5 <br>" ;
//     } elseif ($i % 5 == 0) {
//         echo $i ." il est divisible par 5 <br>";
//     }elseif($i % 3 == 0){
//         echo $i ." il est divisible par 3 <br>";
//     } else{
//         echo $i ."Non divisible <br>";
//     }
// }

// $somme = 0;

// for ($i = 1; $i <= 100; $i++) {
//     $somme = $somme + $i;
// }

// echo "La somme est : " . $somme;

// $fruits = ["pomme" , "banane", "orange"];

// echo $fruits[1];


// $nombres = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// foreach ($nombres as $elements){
// if ($elements % 2 ==0){
// echo $elements . "<br>";
// }};
// $nombres = [10, 20, 5, 15, 30];

// $somme = 0;

// foreach($nombres as $elements){
//     echo $elements + $somme;
// }

// $nombres = [10, 20, 5, 15, 30];

// $somme = 0;

// foreach($nombres as $elements){

//     $somme = $somme + $elements;
// }

// echo "Somme : " . $somme;

// $nombres = [10, 20, 5, 15, 30];

// $somme = 0;

// foreach($nombres as $elements){
//     $somme = $somme + $elements;
// }
// echo "la somme :" . "<br>";

// $notes = [12, 15, 8, 17, 10];
// $sommeDeNote = 0;

// foreach ($notes as $elements) {

//       $sommeDeNote = $sommeDeNote + $elements;

//     if ($elements >= 10) {
//         echo "Note validée : " . $elements . "<br>";
//     } else {
//         echo "Note non validée : " . $elements . "<br>";
//     }
// }

// echo "Somme totale : " . $sommeDeNote;


// $Moyenne = $sommeDeNote / 5;

// echo "la moyenne " . $Moyenne;


// Exercice 1 — Tableau associatif

// $eleve = [
//     "nom" => "G-24",
//     "age" => 18,
//     "filiere" =>  "DMW",    
// ];

// foreach($eleve as $cle => $valeur){
//     echo $cle . " : " .$valeur;
// }


// Exercice 2 — Informations d'une filière
// $filiere = [
//     "nom" => "Développement Multimédia Web",
//     "sigle" => "DMW",
//     "duree" => 3,
//     "diplome" => "Baccalauréat Technique",
// ];

// foreach ($filiere as $cle => $valeur) {
//     echo $cle . " : " . $valeur . "<br>";
// }

// $notes = [12, 15, 9, 14, 16 , 33, 34, 55, 03];

// $somme = 0;
// foreach($notes as $nombre){
//     $somme = $somme + $nombre;
//     }
//     echo "la somme des notes: " .$somme ."<br>";
//     $moyenne  =$somme / count($notes);
//     echo "la moyenne est de : " .$moyenne;

// Exercice 4 — Notes + foreach + if → Admis / Échec ← on est ici

// $notes = [12, 15, 9, 14, 16, 7, 18];

// foreach($notes as $nombre){
//     if ($nombre >= 10) {
//         echo "Note" . $nombre . " est admis <br>";
//     }else {
//          echo "Note" . $nombre . " Échec <br>";
//     }
// }

// $notes = [12, 15, 9, 14, 16, 7, 18];
// $admis = 0;
// $echecs = 0;
// foreach ($notes as $nombre){

//     if ($nombre >= 10) {
//          $admis = $admis + 1;
//     } else {
//           $echecs = $echecs + 1;
//     }

// }
// echo "Nombre d'admis"  . $admis. "<br>";
// echo "Nombre echecs" . $echecs . "<br>";

// $notes = [12, 15, 9, 14, 16, 7, 18];

// $meilleureNote = 0;

// foreach($notes as $nombre){

//     if($nombre > $meilleureNote){
//         $meilleureNote = $nombre;
//     }

// }
// echo "La meilleure note est : " . $meilleureNote;
// On clôture donc le chapitre Tableaux (array). Tu as maintenant vu :

// array → foreach → tableaux associatifs → accumulation → count() → conditions avec les tableaux.

// les Fonctions

// function direBonjour(){
//     echo"Bienvenue dans mon programme PHP !";
// }

// direBonjour()

function saluer($g_24){
echo "Bonjour " . $g_24;
}
saluer("G-24");


?>
