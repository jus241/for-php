<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="for.php" method="post">
        <label for="number">Number</label>
        <input type="number" placeholder="choisir un nombre" name="number">
        <input type="submit" value="calculer">
    </form>
    <br>
</body>

</html>

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

























?>