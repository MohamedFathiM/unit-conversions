<?php

namespace WeightConversion\UnitConversions;

class UnitConversionsClass
{
    public static $grams;

    public static function convert($grams)
    {
        return (new static($grams));
    }

    public function __construct($grams)
    {
        self::$grams = $grams;
    }

    public function toKilograms()
    {
        return self::$grams / 1000;
    }

    public function toStones()
    {
        return self::$grams * 0.000157473;
    }
}
