<?php
class Magic
{
    public function __get($name)
    {
        echo "You are trying to get ($name) property <br>";
    }
    public function __set($name, $val)
    {
        echo "You are trying to set ($name) property to ($val)";
    }
}

$obj = new Magic();

$obj->test;

$obj->test = "Test";
