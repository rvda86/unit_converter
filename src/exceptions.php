<?php

class IncompatibleUnitsException extends Exception {
    protected $message = "incompatible units";
}

class ValueTooLowException extends Exception {
    protected $message = "input value too low";
}

?>