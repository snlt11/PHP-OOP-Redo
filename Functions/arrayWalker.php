<?php

$arrary = ["1"=>"one","2"=>"two","3"=>"three","4"=>"four","5"=>"five"];

function ArrayWalk($value,$key){
    echo "Key is ".$key." Value is ".$value."<br>";
}

array_walk($arrary,"ArrayWalk");