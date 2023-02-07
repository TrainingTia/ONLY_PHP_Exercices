<?php
//Exo Array_first
    // $color = array(
    //     1 => 'white',
    //     2 => 'green','red','blue','black','yellow'
    // );
    // See array value with "while"
    // for($i = 0; $i < count($color); $i++){
    //     echo $color[$i];
    //     echo "<br>";
    // }
    // See array value with "while"
    // $i = 0;
    // while ($i < count($color)) {
    //     echo $color[$i];
    //     echo "<br>";
    //     $i++;
    // }
// $array = ["nom", "prenom", "classe", "ville"];
// $i = 0;
// while ($i < count($array)) {
//     echo "<ul><li>$array[$i]</li></ul>";
//     echo "<br>";
//     $i++;
// }
// $scores = ['Orange', 'Bleue', "Gris"];
// // var_dump($scores);
// function printArray($data)
// {
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// }

// printArray($scores);
// $scores[] = "Verte"; // Add element to array
// printArray($scores);
// $scores[0] = "Rouge"; // Add element to index
// printArray($scores);
// unset($scores[0]); // Deleted by index
// printArray($scores);
// echo "The array length is : ".count($scores); // Get array length

$rates = [
    // ['Excellent' => 5],
    // ['Good' => 4],
    // ['OK' => 3],
    // ['Bad' => 2],
    // ['Very Bad' => 1]
    ["Lundi" => 1],
    ["Mardi" => 2],
    ["Mercredi" => 3]
];

foreach ($rates as $task) {
    foreach ($task as $task_detail) {
        echo "<pre>";
        echo $task_detail;
        echo "</pre>";
    }
}