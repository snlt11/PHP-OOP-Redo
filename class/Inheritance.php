<!-- 
 **Inheritance**
When we have the same properties in different classes, we don't want to rewrite them. Instead, we use inheritance(extends).
For example, suppose a Member has properties like name, age, and address, as well as methods. 
A DiamondMember also has the same properties. In this case, we set Member as the parent class and DiamondMember as the child class. 
Class can override the properties and methods of the parent class.
-->

<?php

class Member
{
    public $name = "Name Test";
    public $age = "Age Test";
    public $address = "Address Test";
    public function testing()
    {
        echo "This is a testing function.";
    }
}

class DiamondMember extends Member
{
    public function testing()
    {
        echo "This is a new testing function.";
    }
}

$obj = new DiamondMember();
echo $obj->name, "<br>";
echo $obj->testing();

?>