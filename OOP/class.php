<?php

// class Math{
//   function __construct(){
    
//   }
//   function Math(){

//   }
//   function add($a, $b){
//     return $a + $b;
//   }
//   function sub($a, $b){
//     return $a - $b;
//   }
//   static function getPI(){
//     return (22/7);
//   }
// }
// $obj =new Math();
// echo $obj->add(4,5);

// $obj2 =new Math();
// echo $obj2->add(5,6);

// echo Math::getPI();

class Point{
  public $x;
  public $y;

  function __construct($_x,$_y){
    $this->x=$_x;
    $this->y=$_y;
  }
  public function __toString(){
    return $this->x.",".$this->y;
  }
}
class line{
  public $p1;
  public $p2;

  function __construct(Point $_p1, Point $_p2){
    $this->p1=$_p1;
    $this->p2=$_p2;
  
  }
  public function getDistance2(){
    $pw1=pow((($this->p2->x)-($this->p1->x)),2);
    $pw2=pow((($this->p2->y)-($this->p1->y)),2);

    $distance=sqrt($pw1+$pw2);
    return $distance;
  }
  public static function getDistance($x2,$x1,$y2,$y1){
    $distance=sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
    return $distance;
  }
  
}
$p1 = new Point(5, 3);
$p2 = new Point(5, 6);
// echo $p1;
// echo $p2;

$line = new Line($p1, $p2);
echo $line->getDistance2();
echo "<br/>";
echo "<br/>";
echo Line::getDistance(5, 5, 6, 3);
?>