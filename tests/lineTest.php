<?php
require_once './main.php';
use PHPUnit\Framework\TestCase;

class LineTest extends TestCase {
  public function testCreateFromTwoPoints() : void {
    $point1 = new Point(0, -5);
    $point2 = new Point(0, 5);
    $this->assertInstanceOf(
      Line::class,
      new Line($point1, $point2)
    );
  }
}
?>