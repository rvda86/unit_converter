<?php


class RankineConverter extends Converter {
    // standard unit: Kelvin

    public function convertFromStandardUnit(String $amount) {
        return bcmul($amount, bcdiv(9 ,5));
    }

    public function convertToStandardUnit(String $amount) {
        return bcmul($amount, bcdiv(5, 9));
    }
}