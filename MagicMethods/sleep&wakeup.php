<?php

class Test
{
    public function __sleep()
    {
        echo "You are trying to serialize this object<br>\n";
        return [];
    }
    public function __wakeup()
    {
        echo "You are trying to unserialize this object\n";
    }
}

$obj = new Test();

$test = serialize($obj);

$test2 = unserialize($test);
