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
}
?>