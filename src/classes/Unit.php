<?php

class Unit {

    public function __construct(Converter $converter) {
        $this->converter = $converter;
    }

    function setAmount(String $amount) {
        $this->amount = $amount;
        $this->amountInStandardUnit = $this->convertToStandardUnit($amount);
    }

    function setAmountFromStandardUnit (String $amount) {
        $this->amount = $this->convertFromStandardUnit($amount);
    }

    function getAmount() {
        return $this->amount;
    }

    function getAmountInStandardUnit() {
        return $this->amountInStandardUnit;
    }

    function convertFromStandardUnit(String $amount) {
        return $this->converter->convertFromStandardUnit($amount);
    }

    function convertToStandardUnit(String $amount) {
        return $this->converter->convertToStandardUnit($amount);
    }
}

