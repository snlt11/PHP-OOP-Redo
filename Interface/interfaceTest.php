<?php
interface Human
{
    public function setWeapon($weapon);
}

class Tester implements Human
{
    private $weapon;
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }
    public function kill()
    {
        echo "I'm killing with " . $this->weapon;
    }
}

$tester = new Tester();

$tester->setWeapon("AK-47");

$tester->kill();