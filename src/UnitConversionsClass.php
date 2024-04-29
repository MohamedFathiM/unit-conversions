<?php

namespace WeightConversion\UnitConversions;

class UnitConversionsClass
{
    public static $grams;

    public static function convert($grams)
    {
        return (new static($grams))->toKilograms();
    }

    public function __construct($grams)
    {
        self::$grams = $grams;
    }

    public function toKilograms()
    {
        return self::$grams / 1000;
    }
}
