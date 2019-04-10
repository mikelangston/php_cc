<?php
   // Point class definition
  class Point {
    // constructor expects two integers
    function __construct($x, $y){
      $this->x_cord = $x;
      $this->y_cord = $y;
    }
  }
  // Line class definition
  class Line {
    // constructor expects two Point Objects
    function __construct($point1, $point2){
      $this->x_cord1 = $point1->x_cord;
      $this->y_cord1 = $point1->y_cord;
      $this->x_cord2 = $point2->x_cord;
      $this->y_cord2 = $point2->y_cord;
    }
    // intersect method expects Object and is public interface method
    public function intersect($obj){
      if($this->calc_intersect($obj) == 0){
        echo "false\n";
      }
      else{
        echo "true\n";
      }
    }

    private function calc_intersect($obj){
      $a1 = $this->y_cord2 - $this->y_cord1;
      $b1 = $this->x_cord1 - $this->x_cord2;

      $a2 = $obj->y_cord2 - $obj->y_cord1;
      $b2 = $obj->x_cord1 - $obj->x_cord2;

      return $a1 * $b2 - $a2 * $b1;
    }
  }
  // Circle class definition
  class Circle {
    // constructor expects Point Object and radius
    function __construct($point, $radius){
      $this->x_cord = $point->x_cord;
      $this->y_cord= $point->y_cord;
      $this->radius = $radius;
    }
    // intersect method expects Object and is public interface method
    public function intersect($obj) {
      $x = $obj->x_cord;
      $y = $obj->y_cord;
      $r = $obj->radius;

      if($this->calc_intersect($x, $y, $r)){
        echo "true\n";
      }
      else{
        echo "false\n";
      }
    }
    // set radius default to null
    private function calc_intersect($x, $y, $r=null){
      if(is_null($r)){
        // return value for point inside circle
        return (sqrt($x - $this->x_cord) + sqrt($y - $this->y_cord)) < sqrt($this->radius);
      }
      else{
        // return value for circle intersecting with another circle
        return (sqrt($x - $this->x_cord) + sqrt($y - $this->y_cord)) <= sqrt($r - $this->radius);
      }
    }
  }
?>