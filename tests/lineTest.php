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

  public function testTwoLinesIntersect() : void {
    $line1 = new Line(new Point(0, -5), new Point(0, 5));
    $line2 = new Line(new Point(5, 0), new Point(-5, 0));

    $this->expectOutputString("true\n");
    $line1->intersect($line2);
  }
}
?>