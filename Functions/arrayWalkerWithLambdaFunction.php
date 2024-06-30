<?php

$num = 10;
$array = ["1" => "one", "2" => "two", "3" => "three", "4" => "four", "5" => "five"];

array_walk($array, function ($value, $key) use (&$num) {
    // & references $num
    $num++;
    echo "Key is " . $key . " Value is " . $value . "<br>" . "Current Number is " . $num . "<br>";
});
