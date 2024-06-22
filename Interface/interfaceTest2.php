<?php

interface Boy
{
    public function doIt($data);
}
interface Girl
{
    public function test($data);
}

class Human implements Boy, Girl
{
    private $data;
    public function doIt($data)
    {
        $this->data = $data;
    }
    public function test($data)
    {
        $this->data = $data;
    }
    public function Output()
    {
        echo "<pre>" . print_r($this->data, true) . "</pre>";
    }
}

$obj = new Human();
$boyData = ["football", "basketball"];
$girlData = ["tennis", "book"];

$obj->doIt($boyData);

// $obj->test($girlData);

$obj->Output();
