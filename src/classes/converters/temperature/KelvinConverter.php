<?php


class KelvinConverter extends Converter {
    // standard unit: Kelvin

    public function convertFromStandardUnit(String $amount) {
        return $amount;
    }

    public function convertToStandardUnit(String $amount) {
        return $amount;
    }
}