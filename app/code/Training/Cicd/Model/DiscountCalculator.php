<?php

namespace Training\Cicd\Model;

class DiscountCalculator
{
    public function calculate($price, $percent)
    {
        if ($price < 0 || $percent < 0 || $percent > 100) {
            throw new \InvalidArgumentException('Invalid discount');
        }
        return $price*(1+$percent/100);
    }
}
