<?php

require_once "src/exceptions.php";

class FahrenheitConverter extends Converter {
    // standard unit: Kelvin

    public function convertFromStandardUnit(String $amount) {
        if ($amount < 0) {
            throw new ValueTooLowException();
        }
        return bcsub(bcmul($amount, bcdiv(9, 5)), 459.67);
    }

    public function convertToStandardUnit(String $amount) {
        if ($amount < -459.67) {
            throw new ValueTooLowException();
        }
        return bcmul(bcadd($amount, 459.67), bcdiv(5, 9));
    }
}