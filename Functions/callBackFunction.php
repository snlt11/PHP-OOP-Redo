<?php


class Best
{

    public function doIt($var)
    {
        $this->$var(2);
    }
    public function test($one)
    {
        echo "Total Number : $one";
    }
    public function test2($two)
    {
        echo "Test 2 Total Number : $two";
    }
    public function test3($three)
    {
        $i = 0;
        $sum = 0;
        while ($i <= $three) {
            $sum += $i;
            $i++;
        }
        echo $sum;
    }
}

$obj = new Best();
$obj->doIt("test3");
