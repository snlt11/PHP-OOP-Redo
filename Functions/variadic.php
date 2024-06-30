<?php

function doIt(...$var)
{
    // $var = [["one", "two"], "Test for Variadic" , [1, 2 , 3]], [11,22,33,44,55,66,77,88];
    echo "<pre>";
    print_r($var);
}


doIt([["one", "two"], "Test for Variadic", [1, 2, 3]], [11, 22, 33, 44, 55, 66, 77, 88]);