<?php

function doIt($var1, $var2, $var3)
{
    $total = $var1 + $var2;
    $var3($total);
}

doIt(10, 20,function ($var) {
    echo "Total value is $var";
});
