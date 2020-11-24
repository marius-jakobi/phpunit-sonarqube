<?php

namespace MJ;

class Math
{
    public static function square(float $number) : float {
        return pow($number, 2);
    }

    public static function round(float $number, int $precision = 0) : float {
        return round($number, $precision);
    }
}