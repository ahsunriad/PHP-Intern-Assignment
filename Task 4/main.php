<?php
require_once 'animal.php';
require_once 'cat.php';
require_once 'cow.php';

    $Cat  = new Cat();
    $Cat->soundsLike(); 
    $Cow = new Cow();
    $Cow->soundsLike(); 

?>
