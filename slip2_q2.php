<?php
interface shape
{
    public function area();
    public function volume();
}
define("pi", 3.14);
class cylinder implements shape
{
    private $h;
    private $r;
    public function __construct($a, $b)
    {
        $this -> h = $a;
        $this -> r = $b;
    }
    public function area()
    {
        $area = (2 * pi * $this -> r * $this -> h) + (2 * pi * $this -> r * $this -> r);
        echo "Area of Cylinder : $area "."<br>";
    }
    public function volume()
    {
        $volume = (pi * $this -> r * $this -> r * $this -> h);
        echo "Volume of Cylinder is : $volume "."<br>";
    }
}

$obj = new cylinder(4, 5);
$obj -> area();
$obj -> volume();
?>