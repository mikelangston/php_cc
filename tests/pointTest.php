<?php
require_once './main.php';
use PHPUnit\Framework\TestCase;

class PointTest extends TestCase {
  public function testCreateFromIntegerCoordinates() : void {
    $this->assertInstanceOf(
      Point::class,
      new Point(0, 2)
    );
  }
}
?>