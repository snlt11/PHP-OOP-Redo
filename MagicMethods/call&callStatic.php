<?php


class Test
{
    public function __call($method, $params)
    {
        echo "You are trying to call ($method) method <br>";
        echo "<pre> params" . print_r($params);
    }
    public static function __callStatic($method, $params)
    {
        echo "You are trying to call static ($method) method <br>";
        echo "<pre> params" . print_r($params);
    }
}

// $obj = new Test();
// $obj->test("one", "two", "three");

Test::staticFunction("one", "two", "three");
