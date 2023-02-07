<?php

class Welcome{
    public function hello($nom){
        echo "Hello All, i am " . $nom;
        $this->$nom;
    }
}

$newName = new Welcome();
$newName->hello("Tia");