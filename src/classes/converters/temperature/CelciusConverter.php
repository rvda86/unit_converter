<?php

require_once "src/exceptions.php";

class CelciusConverter extends Converter {
    // standard unit: Kelvin

    public function convertFromStandardUnit(String $amount) {
        if ($amount < 0) {
            throw new ValueTooLowException();
        }
        return bcsub($amount, 273.15);
    }

    public function convertToStandardUnit(String $amount) {
        if ($amount < -273.15) {
            throw new ValueTooLowException();
        }
        return bcadd($amount, 273.15);
    }
}