<?php
require_once './main.php';
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase {
  public function testCreateFromTwoPoints() : void {
    $point = new Point(0, 5);
    $radius = 20;

    $this->assertInstanceOf(
      Circle::class,
      new Circle($point, $radius)
    );
  }

  public function testPointInCircle() : void {
    $point = new Point(1, 3);
    $circle = new Circle(new Point(0, 0), 20);

    $this->expectOutputString("true\n");
    $circle->intersect($point);
  }

  public function testCircleIntersections() : void {
    $circle1 = new Circle(new Point(1, 3), 10);
    $circle2 = new Circle(new Point(2, 5), 11);

    $this->expectOutputString("true\n");
    $circle1->intersect($circle2);
  }
}
?>