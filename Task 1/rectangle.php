<?php
// Rectangle class inherits from Shape
class Rectangle extends Shape {
    private $height;
    private $width;
    
    public function __construct($height, $width) {
        $this->height = $height;
        $this->width = $width;
    }
    
    public function getArea() {
        $area = $this->width * $this->height;
        return $area;
    }
}
?>
