<?php
class One
{
    public function className()
    {
        return __CLASS__;
    }
    public function getClassName()
    {
        // echo $this->className();
        // echo self::className();
        echo static::className();
    }
}
class Two extends One
{
    public function className()
    {
        return __CLASS__;
    }
}

$obj = new One();

$obj2 = new Two();

echo $obj->getClassName();

echo "<br>";

echo $obj2->getClassName();
