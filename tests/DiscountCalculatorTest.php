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

    /**
     * @dataProvider discountCases
     */
    public function testCalculateDiscountForEdgeCases(float $price, float $percent, float $expected): void
    {
        $calculator = new DiscountCalculator();

        $this->assertEqualsWithDelta($expected, $calculator->calculate($price, $percent), 0.000001);
    }

    public static function discountCases(): array
    {
        return [
            'zero percent' => [120.0, 0.0, 120.0],
            'one hundred percent' => [120.0, 100.0, 0.0],
            'zero price' => [0.0, 25.0, 0.0],
            'fractional percent' => [19.99, 12.5, 17.49125],
        ];
    }

    public function testRejectsNegativePrice(): void
    {
        $calculator = new DiscountCalculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->calculate(-0.01, 10);
    }

    public function testInvalidDiscount()
    {
        $calculator = new DiscountCalculator();
        $this->expectException(
            InvalidArgumentException::class
        );
        $calculator->calculate(100, 150);
    }

    public function testRejectsNegativePercent(): void
    {
        $calculator = new DiscountCalculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->calculate(100, -0.01);
    }
}
