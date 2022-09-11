<?php


class RankineConverter extends Converter {
    // standard unit: Kelvin

    function convertFromStandardUnit(String $amount) {
        return bcmul($amount, bcdiv(9 ,5));
    }

    function convertToStandardUnit(String $amount) {
        return bcmul($amount, bcdiv(5, 9));
    }
}