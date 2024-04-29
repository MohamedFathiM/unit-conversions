<?php

use WeightConversion\UnitConversions\UnitConversionsClass;

it('can test', function () {
    expect(true)->toBeTrue();
});


it('1000 grams is equal to 1 kilogram', function () {
    expect(UnitConversionsClass::convert(1000))->toEqual(1);
});
