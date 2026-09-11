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
































?>