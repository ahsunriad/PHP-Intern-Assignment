<?php
require_once 'shape.php';
require_once 'circle.php';
require_once 'rectangle.php';

//User Input Validation
function getPositiveNumber($inputMessage) {
    do {
        echo $inputMessage;
        $input = readline();
        if (is_numeric($input) && $input >= 0) {
            return $input; 
        } else {
            echo "Please Enter a Valid Positive Number.\n";
        }
    } while (true); 
}

$radius = getPositiveNumber("Please Enter Circle Radius (in meter): "); //Circle Input
$circle = new Circle($radius);
echo "Area of the circle: " . $circle->getArea() . "m.\n";

$height = getPositiveNumber("\nPlease Enter Rectangle Height (in meter): "); //Height Input
$width = getPositiveNumber("Please Enter Rectangle Width  (in meter): "); //Width Input
$rectangle = new Rectangle($height, $width);
echo "Area of the Rectangle: " . $rectangle->getArea() . "m.";
?>
