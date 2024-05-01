<?php

use WeightConversion\UnitConversions\UnitConversionsClass;

it('can test', function () {
    expect(true)->toBeTrue();
});


it('1000 grams is equal to 1 kilogram', function () {
    expect(UnitConversionsClass::convert(1000)->toKilograms())->toEqual(1);
});

it('1 grams is equal to 0.000157473 stones', function () {
    expect(UnitConversionsClass::convert(1)->toStones())->toEqual(0.000157473);
});
