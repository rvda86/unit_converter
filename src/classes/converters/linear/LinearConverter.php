<?php

require_once 'src/classes/converters/Converter.php';

class LinearConverter extends Converter {
    // standard distance unit: meter
    // standard area unit: square meter
    // do not use for temperature conversions

    public function __construct(String $ratioToStandardUnit) {
        $this->ratioToStandardUnit = $ratioToStandardUnit;
    }

    public function convertFromStandardUnit(String $amount) {
        return bcdiv($amount, $this->ratioToStandardUnit);
    }

    public function convertToStandardUnit(String $amount) {
        return bcmul($amount, $this->ratioToStandardUnit);
    }
}

?>