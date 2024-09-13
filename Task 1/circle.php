<?php
class Circle extends Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function getArea() {
        $area = pi() * pow($this->radius, 2);
        return $area;
    }
}
?>
