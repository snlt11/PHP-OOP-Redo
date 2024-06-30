<?php

$one = 111;
$two = 22222;
$var = function () use ($one, $two) {
    echo "Closure Function $one and $two";
};

$var();
