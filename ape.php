<?php
require_once 'Animal.php';

class Ape extends Animal {

    public function getLegs() {
        return 2;
    }
    public function yell() {
        return "Auoo";
    }
}
?>
