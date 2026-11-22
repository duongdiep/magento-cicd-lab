<?php
use PHPUnit\Framework\TestCase;
use Training\Cicd\Model\DiscountCalculator;

class DiscountCalculatorTest extends TestCase
{
    public function testCalculateDiscount()
    {
        $calculator = new DiscountCalculator();
        $this->assertEquals(
            90,
            $calculator->calculate(100, 10)
        );
    }

    public function testInvalidDiscount()
    {
        $calculator = new DiscountCalculator();
        $this->expectException(
            InvalidArgumentException::class
        );
        $calculator->calculate(100, 150);
    }
}
