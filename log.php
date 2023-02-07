<?php
// definition du chemin d'accès
$logFile = "/home/malack/DevLabs/EXERCICES/EXERCICE - Perfectionnement/PHP/class.php";
// recuperer le contenu du fichier ciblé
$log = file_get_contents($logFile);
// Affichage du contenu
echo $log;