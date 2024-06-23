<?php
abstract class Ok
{
    public $name = "Test";
    public function test()
    {
        echo $this->name;
    }
    public abstract function one();
    public abstract function two();
}
class NotOk extends Ok
{
    public function one()
    {
        echo "Not Okay here!";
    }
    public function two()
    {
        echo "Two is here!";
    }
    public function test()
    {
        echo "Not Okay method";
    }
}

$obj = new NotOk();

$obj->test();
