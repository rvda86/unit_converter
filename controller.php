<?php

require_once "src/calc.php";

if (isset($_GET)) {
    $from = $_GET['from'];
    $to = $_GET['to'];
    $amount = $_GET['amount'];

    $result = calc($from, $to, $amount);
    
    echo $result;

}

?>