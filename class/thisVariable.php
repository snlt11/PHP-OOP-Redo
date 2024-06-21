<?php
// $this-> pointer to the object making function call

class This
{
    public $name = "Name Test";
    public function changeName()
    {
        $this->name = "New Name Test";
    }
}
$obj = new This();

$obj->changeName();

echo $obj->name;
