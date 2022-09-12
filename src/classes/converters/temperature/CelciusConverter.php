<?php

class CelciusConverter extends Converter {
    // standard unit: Kelvin

    public function convertFromStandardUnit(String $amount) {
        return bcsub($amount, 273.15);
    }

    public function convertToStandardUnit(String $amount) {
        return bcadd($amount, 273.15);
    }
}