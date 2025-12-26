<?php

$amount = 5000;

$discount = 500;


function showAmt(){
    global $discount;
    
    echo $GLOBALS['amount'];
    echo $discount;
}

echo $amount;

showAmt()
?>