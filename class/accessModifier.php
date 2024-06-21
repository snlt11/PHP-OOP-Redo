Access Modifier

public,private,protected

<?php
class Test
{
    public $test1 = "testing1";
    // can access this variable from outside the class
    private $test2 = "testing2";
    // can not access this variable from outside the class (Encapsulation)
    protected $test3 = "testing3";
    // can only access this variable from inside the class and its child class
}

$obj = new Test();

echo $obj->test1;
