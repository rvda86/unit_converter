<?php

require_once "src/factory.php";
require_once "src/constants.php";
require_once "src/exceptions.php";

function calc(String $from, String $to, String $amount) {

    try {

        $validFloat = filter_var($amount, FILTER_VALIDATE_FLOAT);
        if ($amount == "-" || $amount == "-.") {
            $validFloat = true;
        }

        if (!$validFloat) {
            throw new InvalidValueException();
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
    } catch (InvalidValueException $e) {
        return $e->getMessage();
    }

}

?> 