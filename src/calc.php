<?php

require_once "src/factory.php";
require_once "src/constants.php";
require_once "src/exceptions.php";

function checkIfUnitIsKnown(String $testUnit) {
    foreach (UNITS as $unitArray) {
        if (in_array($testUnit, $unitArray)) {
            return true;
        }
    }
    return false;
}

function checkIfAmountIsValid(String $amount) {
    if ($amount == "-" || $amount == "-." || $amount == "0" || $amount == ".") {
        return true;
    }
    if (!filter_var($amount, FILTER_VALIDATE_FLOAT)) {
        return false;
    }
    return true;
}

function calc(String $from, String $to, String $amount) {

    try {

        if (!checkIfUnitIsKnown($from) || !checkIfUnitIsKnown($to)) {
            throw new UnknownUnitException();
        }

        if (!checkIfAmountIsValid($amount)) {
            throw new InvalidAmountException();
        }

        bcscale(100);
        $fromUnit = unitFactory($from);
        $toUnit = unitFactory($to);
    
        if ($fromUnit->getUnitType() != $toUnit->getUnitType()) {
            throw new IncompatibleUnitsException();
        }
    
        $fromUnit->setAmount($amount);
        $toUnit->setAmountFromStandardUnit($fromUnit->getAmountInStandardUnit());
    
        $result = $toUnit->getAmount();
    
        return (float)$result;   
        
    } catch (IncompatibleUnitsException $e) {
        return $e->getMessage();
    } catch (ValueTooLowException $e) {
        return $e->getMessage();
    } catch (InvalidAmountException $e) {
        return $e->getMessage();
    } catch (UnknownUnitException $e) {
        return $e->getMessage();
    }

}

?> 