<?php

class ClassObj
{
    var $propertyTest = "This is Property";
    public function functionTest($parameter, $default = 100)
    {
        echo "This is Method and Accept with $parameter , $default";
    }
}

$obj = new ClassObj();
echo $obj->propertyTest . "</br>";
$obj->functionTest("Send arguments here");
