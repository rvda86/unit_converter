<?php

require_once "src/exceptions.php";

class RankineConverter extends Converter {
    // standard unit: Kelvin

    public function convertFromStandardUnit(String $amount) {
        if ($amount < 0) {
            throw new ValueTooLowException();
        }
        return bcmul($amount, bcdiv(9 ,5));
    }

    public function convertToStandardUnit(String $amount) {
        if ($amount < 0) {
            throw new ValueTooLowException();
        }
        return bcmul($amount, bcdiv(5, 9));
    }
}