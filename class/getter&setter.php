<?php

class getterSetter
{
    private $data = "Default Data";

    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }
}
$obj = new getterSetter();

$obj->setData("New Data");

echo $obj->getData();
