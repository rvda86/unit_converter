<?php

class Unit {

    private $converter;
    private $unitType;
    private $amount;
    private $amountInStandardUnit;

    public function __construct(Converter $converter, String $unitType) {
        $this->converter = $converter;
        $this->unitType = $unitType;
    }

    public function setAmount(String $amount) {
        $this->amount = $amount;
        $this->amountInStandardUnit = $this->convertToStandardUnit($amount);
    }

    public function setAmountFromStandardUnit (String $amount) {
        $this->amount = $this->convertFromStandardUnit($amount);
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getAmountInStandardUnit() {
        return $this->amountInStandardUnit;
    }

    public function getUnitType() {
        return $this->unitType;
    }

    public function convertFromStandardUnit(String $amount) {
        return $this->converter->convertFromStandardUnit($amount);
    }

    public function convertToStandardUnit(String $amount) {
        return $this->converter->convertToStandardUnit($amount);
    }
}

