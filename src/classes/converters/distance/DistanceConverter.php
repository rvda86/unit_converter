<?php

require_once 'src/classes/converters/Converter.php';

class DistanceConverter extends Converter {
    // standard unit: meter

    public function __construct(String $ratio_to_meter) {
        $this->ratio_to_meter = $ratio_to_meter;
    }

    function convertFromStandardUnit(String $amount) {
        return bcdiv($amount, $this->ratio_to_meter);
    }

    function convertToStandardUnit(String $amount) {
        return bcmul($amount, $this->ratio_to_meter);
    }
}

?>