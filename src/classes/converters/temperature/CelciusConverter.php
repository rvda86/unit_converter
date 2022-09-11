<?php

class CelciusConverter extends Converter {
    // standard unit: Kelvin

    function convertFromStandardUnit(String $amount) {
        return bcsub($amount, 273.15);
    }

    function convertToStandardUnit(String $amount) {
        return bcadd($amount, 273.15);
    }
}