<?php

class Test
{
    private static $count = 0;
    public static function getNumber()
    {
        self::$count++;
        echo self::$count . "<br>";
    }
}
$obj = new Test();

$obj->getNumber();
$obj->getNumber();

$new = new Test();
$new->getNumber();
$new->getNumber();
