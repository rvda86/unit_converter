<?php

require_once "src/exceptions.php";

class KelvinConverter extends Converter {
    // standard unit: Kelvin

    public function convertFromStandardUnit(String $amount) {
        if ($amount < 0) {
            throw new ValueTooLowException();
        }
        return $amount;
    }

    public function convertToStandardUnit(String $amount) {
        if ($amount < 0) {
            throw new ValueTooLowException();
        }
        return $amount;
    }
}