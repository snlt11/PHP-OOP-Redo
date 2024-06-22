<?php
class Test
{
    public function __isset($parameter)
    {
        echo "You are trying to get ($parameter) property <br>";
    }
    public function __unset($parameter)
    {
        echo "You are trying to unset ($parameter) property <br>";
    }
}

$obj = new Test();

isset($obj->database);

unset($obj->test);
