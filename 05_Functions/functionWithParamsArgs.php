<?php

function greet($name='Everyone'){
    echo "Good Morning ".$name."<br>";
}

greet("Aman");
greet();

function calculate($num1, $num2, $op)
{
    switch ($op) {
        case 'add':
            echo $num1 . "+" . $num2 . "=" . $num1 + $num2 . "<br>";
            break;
        case 'sub':
            echo $num1 . "-" . $num2 . "=" . $num1 - $num2 . "<br>";
            break;
        case 'mul':
            echo $num1 . "x" . $num2 . "=" . $num1 * $num2 . "<br>";
            break;
        case 'div':
            echo $num1 . "/" . $num2 . "=" . $num1 / $num2 . "<br>";
            break;
    }
}

calculate(522,4545,'add');
calculate(522,4545,'sub');
calculate(522,4545,'mul');
calculate(522,4545,'div');


function add($num1, $num2){
    return $num1 + $num2;
}
echo add(455,545);