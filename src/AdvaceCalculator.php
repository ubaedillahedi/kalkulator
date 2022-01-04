<?php

namespace ediubaedillah\kalkulator;

class AdvanceCalculator
{
    public static function decimalToBinary(int $number)
    {
        return decbin($number);
    }

    public static function binaryToDecimal(string $string)
    {
        return bindec($string);
    }
}
