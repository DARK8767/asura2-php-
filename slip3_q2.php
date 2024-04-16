<?php
 $choice=$_GET['option'];
 class Shape
 {
  public $val1,$val2;
  function __construct($a,$b)
  {
   $this->val1=$a;
   $this->val2=$b;
  }
  function get()
  {
   return $this->val1*$this->val2;
  }
 }
 class traingle extends Shape
 {
  var $area_tr;
  function __construct($a,$b)
  {
   parent::__construct($a,$b);
   $this->area_tr=0.5*parent::get();
  }
  function display()
  {
   echo "<br>AREA OF TRAINGLE=<b>".$this->area_tr."</b>";
  }
 }
 class square extends Shape
 {
  var $area_sqr;
                function __construct($a)
                {
                        parent::__construct($a,$a);
                        $this->area_sqr=parent::get();
                }
                function display()
                {
                        echo "<br>AREA OF SQUARE:<b>".$this->area_sqr."</b>";
                }
 }
 class circle extends Shape
 {
  var $area_cir;
  function __construct($a)
  {
   parent::__construct($a,$a);
   $this->area_cir=3.14*parent::get();
  }
  function display()
  {
   echo "<br>AREA OF CIRCLE:<b>".$this->area_cir."</b>";
  }
 }

 class rectangle extends Shape
 {
    var $area_rect;
    function __construct($a, $b)
    {
        parent::__construct($a, $b);
        $this -> area_rect = parent::get();
    }
    function display()
    {
        echo "<br>AREA OF RECTANGLE :<br>".$this->area_rect."<br>";
    }
 }

 switch($choice)
 {
  case 1: $ob=new traingle(3,4);
   $ob->display();
   break;
  case 2: $ob=new square(5);
                        $ob->display();
                        break;
  case 3: $ob=new circle(4);
   $ob->display();
   break;
  case 4: $ob=new rectangle(3, 8);
    $ob -> display();
    break;
 }
 
?>
