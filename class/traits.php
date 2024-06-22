<?php

trait NormalUser
{
    public $normalUser = "NormalUser Trait Property";
    public function normalUser()
    {
        echo "Trait NormalUser Method";
    }
}

trait GoldUser
{
    public $goldUser = "GoldUser Trait Property";
    public function goldUser()
    {
        echo "Trait GoldUser Method";
    }
}

trait DiamondUser
{
    public $diamondUser = "DiamondUser Trait Property";
    public function diamondUser()
    {
        echo "Trait DiamondUser Method";
    }
}

trait UserTraits
{
    use NormalUser, GoldUser, DiamondUser;
}

class SpecialUser
{
    use UserTraits;
}

$obj = new SpecialUser();

echo $obj->normalUser . "</br>";
echo $obj->goldUser() . "</br>";
echo $obj->diamondUser() . "</br>";
