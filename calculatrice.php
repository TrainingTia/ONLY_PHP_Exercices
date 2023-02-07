<?php
echo "\nMerci d'utiliser notre calculatrice\n Les opertions disponibles sont : - et + \n\n";
$choice = readline("\nQuel opération voulez vous effectuer : ....");
$firstValue = readline("\nVeuillez entrez votre premier nombre: ");
$secondValue = readline("\nVeuillez entrez votre second nombre: ");
$goodBye = "\n Merci d'avoir choisir Tia Calculatrice ! \n";

// Déclaration de la fonction somme
function somme($nombre1, $nombre2){
    $somme = $nombre1 + $nombre2;
    echo "\n\nle resultat de ".$nombre1." + ".$nombre2." = ".$somme."\n\n";
}

// Déclaration de la fonction soustraction
function soustraction($nombre1, $nombre2){
    $reduce = $nombre1 - $nombre2;
    echo "\n\nle resultat de ".$nombre1." - ".$nombre2." = ".$reduce."\n\n";
}

// Condition de vérification du choix
if ($choice === '-'){
    soustraction($firstValue, $secondValue);
    echo $goodBye;
} elseif ($choice === '+') {
    somme($firstValue, $secondValue);
    echo $goodBye;
} else {
    echo "\nVotre choix est inconnu désolé !\n\n";
}