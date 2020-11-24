<?php


namespace Tests\Unit;

use MJ\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testSquare() {
        $this->assertEquals(4, Math::square(2));
        $this->assertEquals(81, Math::square(9));
        $this->assertEquals(42.25, Math::square(6.5));
    }

    public function testRound() {
        $this->assertEquals(6, Math::round(6.4));
        $this->assertEquals(7, Math::round(6.5));
        $this->assertEquals(6, Math::round(6.499999));
        $this->assertEquals(6.8, Math::round(6.82, 1));
        $this->assertEquals(6.8, Math::round(6.75,1));
    }
}