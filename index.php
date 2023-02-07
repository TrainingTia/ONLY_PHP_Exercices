<?php
function coupleAtos($numb1, $numb2)
{
    echo "Somme de ".$numb1." et ".$numb2;
    echo "<br>";
    $somme = $numb1 + $numb2;
    echo "<br>";
    echo "Somme de ".$numb1." + ".$numb2." = ".$somme;
}

coupleAtos(12, 15);

function learnReturn()
{
    return "Hello World";
}
echo "<br>";
echo learnReturn();

$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);