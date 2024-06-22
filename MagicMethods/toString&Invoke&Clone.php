<?php

class Test
{
    public $test = "I'm testing";
    public function __tostring()
    {
        return "This class has no properties and methods";
    }
    public function __invoke()
    {
        return "You are trying to call Class Object as method";
    }
    public function __clone()
    {
        return "You are trying to clone Class Object";
    }
}

$obj = new Test();

echo $obj . "<br>\n";

echo $obj() . "<br>\n";

$newObj = clone $obj;

echo $newObj->test;
