<?php


class Test
{
    public function __construct($param1, $param2, $param3)
    {
        echo "Hello", $param1, $param2, $param3;
    }
}
$obj = new Test("one", "two", "three");
