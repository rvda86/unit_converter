<?php

require_once 'src/classes/converters/Converter.php';

class AreaConverter extends Converter {
    // standard unit: square meter

    public function __construct(String $ratio_to_square_meter) {
        $this->ratio_to_square_meter = $ratio_to_square_meter;
    }

    public function convertFromStandardUnit(String $amount) {
        return bcdiv($amount, $this->ratio_to_square_meter);
    }

    public function convertToStandardUnit(String $amount) {
        return bcmul($amount, $this->ratio_to_square_meter);
    }
}

?>