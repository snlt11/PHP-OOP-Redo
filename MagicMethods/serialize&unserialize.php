<?php

$array = [
    ["one", "two", "three", "four"],
    ["five", "six", "seven", "eight"],
    ["nine", "ten", "eleven", "twelve"],
    ["thirteen", "fourteen", "fifteen", "sixteen"],
    ["seventeen", "eighteen", "nineteen", "twenty"],
];


$one = serialize($array);

var_dump($one);

$two = unserialize($one);

echo "<pre>" . print_r($two, true);
