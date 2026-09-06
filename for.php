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
        <input type="number" placeholder="choisir un mnembre" name="number">
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





echo"Les nombres pairs" ." <br>";

for($i = 1; $i <=40; $i++){
    if($i % 2 == 0){
        echo $i ."<br>";
    }
}

echo"Les nombres impairs " ."<br>";

for($i = 1; $i <=40; $i++){
    if($i % 2 !== 0){
        echo $i ."<br>";
    }
}

?>
