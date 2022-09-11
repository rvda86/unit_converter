<?php

class FahrenheitConverter extends Converter {
    // standard unit: Kelvin

    function convertFromStandardUnit(String $amount) {
        return bcsub(bcmul($amount, bcdiv(9, 5)), 459.67);
    }

    function convertToStandardUnit(String $amount) {
        return bcmul(bcadd($amount, 459.67), bcdiv(5, 9));
    }
}