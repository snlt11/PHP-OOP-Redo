<?php
class None
{
    public static $count;

    public static function getNumber()
    {
        self::$count++;
        echo self::$count . "<br>";
    }

    public function getCount()
    {
        self::$count++;
        echo self::$count . "<br>";
    }
    // public static function anotherNumber(){
    //     self::getCount(); //Error
    //     // Static Methods: Cannot call non-static 'method' & 'variables' directly.
    // }
}

$obj = new None();

$obj->getNumber();

$obj->getCount();

// $obj->anotherNumber();
