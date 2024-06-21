<?php


class ParentConstructorInvoking
{
    public $test = "Parent Test";
    public function __construct()
    {
        echo "Parent Constructor Invoked";
    }
}
class ChildConstructorInvoking extends ParentConstructorInvoking
{
    public $one = "Child Test";

    public function __construct()
    {
        parent::__construct();
        echo "Child Constructor Invoked";
    }
}

$obj = new ChildConstructorInvoking();
echo $obj->test;
