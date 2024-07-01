<?php

namespace app\Authors;

class Author
{
    private $firsName, $lastName;
    public function __construct($firsName, $lastName)
    {
        $this->firsName = $firsName;
        $this->lastName = $lastName;
    }
    public function getFirstName(): string
    {
        return $this->firsName;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
