<?php
   // Point class definition
  class Point {
    // constructor expects two integers
    function __construct($x, $y){
      $this->xCoord = $x;
      $this->yCoord = $y;
    }
  }
  // Line class definition
  class Line {
    // constructor expects two Point Objects
    function __construct($point1, $point2){
      $this->xCoord1 = $point1->xCoord;
      $this->yCoord1 = $point1->yCoord;
      $this->xCoord2 = $point2->xCoord;
      $this->yCoord2 = $point2->yCoord;
    }
    // intersect method expects Object and is public interface method
    public function intersect($obj){
      if($this->calcIntersection($obj) == 0){
        echo "false\n";
      }
      else{
        echo "true\n";
      }
    }

    private function calcIntersection($obj){
      $a1 = $this->yCoord2 - $this->yCoord1;
      $b1 = $this->xCoord1 - $this->xCoord2;

      $a2 = $obj->yCoord2 - $obj->yCoord1;
      $b2 = $obj->xCoord1 - $obj->xCoord2;

      return $a1 * $b2 - $a2 * $b1;
    }
  }
  // Circle class definition
  class Circle {
    // constructor expects Point Object and radius
    function __construct($point, $radius){
      $this->xCoord = $point->xCoord;
      $this->yCoord= $point->yCoord;
      $this->radius = $radius;
    }
    // intersect method expects Object and is public interface method
    public function intersect($obj) {
      $x = $obj->xCoord;
      $y = $obj->yCoord;
      $r = $obj->radius;

      if($this->calcIntersection($x, $y, $r)){
        echo "true\n";
      }
      else{
        echo "false\n";
      }
    }
    // set radius default to null
    private function calcIntersection($x, $y, $r=null){
      if(is_null($r)){
        // return value for point inside circle
        return (sqrt($x - $this->xCoord) + sqrt($y - $this->yCoord)) < sqrt($this->radius);
      }
      else{
        // return value for circle intersecting with another circle
        return (sqrt($x - $this->xCoord) + sqrt($y - $this->yCoord)) <= sqrt($r - $this->radius);
      }
    }
  }
?>