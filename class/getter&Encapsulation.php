<?php

class getterEncapsulation
{
    private $test = "Get data from private variable";
    public function getter()
    {
        return $this->test;
    }
}

$obj = new getterEncapsulation();

echo $obj->getter();
