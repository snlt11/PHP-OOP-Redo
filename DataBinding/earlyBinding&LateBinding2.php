<?php

class One
{
    public static $name = "Name Testing";
    public static function setName()
    {
        return static::$name;
    }
    public static function getName()
    {
        echo static::$name . "<br>";
    }
}
class Two extends One
{
    public static function setName()
    {
        return static::$name . "Two Name";
    }
}

One::getName();

Two::getName();
