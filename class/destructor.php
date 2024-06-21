<?php
class Test
{
    public function __construct($param)
    {
        echo "Welcome ", $param,"</br>";
    }
    public function loop(){
        for($i = 0; $i < 10; $i++){
            echo $i , "</br>";
        }
    }
    public function __destruct(){
        echo "Bye";
    }

}
$obj = new Test("Constructor");

echo $obj->loop();

