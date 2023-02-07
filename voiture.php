<?php
// Class maison
class Maison{
    // Creation des proprétés
    public $windows;
    public $door;

    public function __construct($windows, $door) {
        $this->door = $door;
        $this->windows = $windows;
    }

    public function construction(){
        echo "La maison est en construction";
    }

    public function endHome(){
        echo "La maison est terminée !";
    }
}

$firstHome = new Maison("5", "2");
print_r($firstHome);
$firstHome->construction();
$firstHome->endHome();