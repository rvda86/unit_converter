<?php

class IncompatibleUnitsException extends Exception {
    protected $message = "incompatible units";
}

class ValueTooLowException extends Exception {
    protected $message = "input value too low";
}

class InvalidAmountException extends Exception {
    protected $message = "invalid input value";
}

class UnknownUnitException extends Exception {
    protected $message = "unit unknown";
}

?>