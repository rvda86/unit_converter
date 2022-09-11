<?php

require_once "src/factory.php";

function calc(String $from, String $to, String $amount) {
    bcscale(100);
    $fromUnit = unitFactory($from);
    $fromUnit->setAmount($amount);

    $toUnit = unitFactory($to);
    $toUnit->setAmountFromStandardUnit($fromUnit->getAmountInStandardUnit());

    $result = $toUnit->getAmount();

    return (float)$result;

}

?> 