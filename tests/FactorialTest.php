
<?php

use PHPUnit\Framework\TestCase;

require 'src/factorial.php';

class FactorialTest extends TestCase {
    public function testFactorialOfZero() {
        $this->assertEquals(1, factorial(0));
    }

    public function testFactorialOfPositiveNumber() {
        $this->assertEquals(120, factorial(5));
    }

    public function testFactorialOfLargeNumber() {
        $this->assertEquals(3628800, factorial(10));
    }

    public function testFactorialOfNegativeNumber() {
        $this->expectException(InvalidArgumentException::class);
        factorial(-1);
    }
}
?>
